<?php
require_once '../config.php';

$del_id = $_POST['del_id'];
$key = "user:$del_id";

$isSuccess = $redis->del($key);

if($isSuccess === 1) {
    header("Location: ../index.php");
}

include '../header.php';
echo "<h1>Oh oh... something went wrong! :(</h1>";