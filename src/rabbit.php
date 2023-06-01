<?php
/*
    require_once __DIR__ . '/vendor/autoload.php';

    use PhpAmqpLib\Connection\AMQPStreamConnection;
    use PhpAmqpLib\Message\AMQPMessage;

    // Verbindung zu RabbitMQ herstellen
    $connection = new AMQPStreamConnection('rabbitmq', 5672, 'guest', 'guest');
    $channel = $connection->channel();

    // Queue deklarieren
    $queue = 'test_queue';
    $channel->queue_declare($queue, false, false, false, false);

    // Nachricht senden
    $messageBody = 'Hello, RabbitMQ!';
    $message = new AMQPMessage($messageBody);
    $channel->basic_publish($message, '', $queue);

    echo "Nachricht gesendet: $messageBody\n";

    // Nachricht empfangen
    $callback = function ($message) {
        echo 'Nachricht empfangen: ' . $message->body . "\n";
    };

    $channel->basic_consume($queue, '', false, true, false, false, $callback);

    while ($channel->is_consuming()) {
        $channel->wait();
    }

    // Verbindung schließen
    $channel->close();
    $connection->close();
*/
?>

<div class="mb-3">
    <h2>RabbitMQ Playground</h2>


</div>