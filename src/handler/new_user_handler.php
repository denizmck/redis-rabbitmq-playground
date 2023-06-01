<?php
require_once '../config.php';

$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$keys = $redis->keys('user:*');
$userid = count($keys) + 1;

$redis->hSet('user:'.$userid, 'username', $username);
$redis->hSet('user:'.$userid, 'firstname', $firstname);
$redis->hSet('user:'.$userid, 'lastname', $lastname);

header("Location: ../index.php");
exit;