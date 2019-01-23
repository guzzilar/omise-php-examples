<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve events</h4>
                <?php
                $events = \Omise\Event::retrieve('?limit=3');
                ?>
                <pre><?php print_r($events); ?></pre>
            </div>  
        </div>

        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve event</h4>
                <?php if ($events['total'] < 1): ?>
                    <p class="text">
                        This test requires at least 1 event to be listed.<br/>
                        You can easily stop by the <a href="./charge.php">Charge</a> to let the test creates a new activity (aka. charge-event) for you.<br/>
                        Then come back to this page later.
                    </p>
                <?php else: ?>
                    <?php
                    $event = \Omise\Event::retrieve($events['data'][0]['id']);
                    $event->reload();
                    ?>
                    <pre><?php print_r($event); ?></pre>
                <?php endif; ?>
            </div>  
        </div>
    </div>
</body>
