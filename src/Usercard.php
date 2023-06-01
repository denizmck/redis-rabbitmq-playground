<?php
class Usercard {

    private $username;
    private $firstname;
    private $lastname;

    function __construct($redis, $key) {
        $this->loadUserByKey($redis, $key);
    }

    public function loadUserByID($redis, $id) {
        $hash = $redis->hgetall('user:'.$id);
        $this->setFields($hash);
    }

    public function loadUserByKey($redis, $key) {
        $hash = $redis->hgetall($key);
        $this->setFields($hash);
    }

    private function setFields($array) {
        $this->username = $array['username'];
        $this->firstname = $array['firstname'];
        $this->lastname = $array['lastname'];
    }

    public function displayCard() {
        echo '
            <div class="card mb-3" style="max-width: 100%">
                <div class="card-header">
                    ' . $this->username . '
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">' . $this->firstname . ' ' . $this->lastname . '</li>
                </ul>
            </div>';
    }

}