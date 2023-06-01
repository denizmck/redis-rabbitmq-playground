<?php
require_once 'config.php';

class Usercard {

    private $id;
    private $username;
    private $firstname;
    private $lastname;
    private $redis;

    function __construct($key, $redis) {
        $this->redis = $redis;
        $this->loadUserByKey($key);
    }

    public function loadUserByID($id) {
        $hash = $this->redis->hgetall('user:'.$id);
        $this->setFields($hash, $id);
    }

    public function loadUserByKey($key) {
        $hash = $this->redis->hgetall($key);
        $this->setFields($hash, $key);
    }

    private function setFields($array, $id) {

        $search = "user:";
        $id = str_replace($search, "", $id);
        $this->id = $id;

        $this->username = $array['username'];
        $this->firstname = $array['firstname'];
        $this->lastname = $array['lastname'];
    }

    public function displayCard() {
        echo '
            <div class="card mb-3" style="max-width: 100%">
                <div class="card-header">
                    ' . $this->username . ' <span class="float-end"> ID: ' . $this->id . '</span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Firstname : ' . $this->firstname . '<br>Lastname : ' . $this->lastname . '</li>
                </ul>
            </div>';
    }

}