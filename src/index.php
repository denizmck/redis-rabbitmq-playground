<!DOCTYPE html>
<html lang="en">
    <?php 
        include_once 'head.php'; 
        include_once 'Usercard.php';

        $redis = new Redis();
        $redis->connect('redis', 6379);
    
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];

            $keys = $redis->keys('user:*');
            $userid = count($keys) + 1;

            $redis->hSet('user:'.$userid, 'username', $username);
            $redis->hSet('user:'.$userid, 'firstname', $firstname);
            $redis->hSet('user:'.$userid, 'lastname', $lastname);
        }

        $userCards = array();

    ?>
    <body>

        <div class="container">
            <?php include 'redis.php';?>
            <?php include 'rabbit.php';?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
