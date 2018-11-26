<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <div class="row">
        <div class="col col-6">
            <div class="col-body">
                <?php
                $events = OmiseEvent::retrieve('?limit=3');
                ?>
                <pre><?php print_r($events); ?></pre>
            </div>  
        </div>

        <div class="col col-6">
            <div class="col-body">
                <?php
                $event = OmiseEvent::retrieve('evnt_test_59trmbv1hz9yux9wtcq');
                $event->reload();
                ?>
                <pre><?php print_r($event); ?></pre>
            </div>  
        </div>
    </div>
</body>
