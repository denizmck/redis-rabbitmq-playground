<!DOCTYPE html>
<html lang="en">
    <?php 
        include_once 'head.php'; 
        include_once 'user/Usercard.php';

        $userCards = array();
    ?>
    <body>

        <div class="container">
            <?php include_once 'redis.php';?>
            <?php include_once 'rabbit.php';?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>