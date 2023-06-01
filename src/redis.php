<div class="mb-3">
    <h2>Redis Playground</h2>

    <div class="row">
        <div class="col-6 border-end">
            <h3>Results</h3>

            <div class="cards pe-3" style="max-height: 590px; overflow: auto;">
                <?php
                require_once 'config.php';
                require_once 'user/Usercard.php';

                $ids = $redis->keys('user:*');

                foreach($ids as $id) {
                    $temp = new Usercard($id, $redis);
                    $temp->displayCard();
                }
                ?>
            </div>

        </div>
        <div class="col-6">
            <h3>Editor</h3>
            <?php include_once 'user/userform.php'; ?>
        </div>
    </div>
</div>