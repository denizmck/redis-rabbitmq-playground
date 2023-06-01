FROM php:7.1-apache

RUN pecl install redis && docker-php-ext-enable redis

# Install required dependencies
RUN apt-get update && apt-get install -y \
    librabbitmq-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN pecl install amqp && docker-php-ext-enable amqp

# Configure RabbitMQ PHP extension
RUN echo "extension=amqp.so" >> /usr/local/etc/php/php.ini

# Install Composer (if not already installed)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
