<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve transfers</h4>
                <?php
                $transfers = \Omise\Transfer::retrieve();
                ?>
                <pre><?php print_r($transfers); ?></pre>
            </div>
        </div>

        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve transfer</h4>
                <?php
                $transfer = \Omise\Transfer::retrieve($transfers['data'][0]['id']);
                $transfer->reload();
                ?>
                <pre><?php print_r($transfer); ?></pre>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-4">
            <div class="col-body content">
                <h4>Create transfer</h4>
                <?php
                $transfer = \Omise\Transfer::create(['amount' => 50000]);
                ?>
                <pre><?php print_r($transfer); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body content">
                <h4>Update transfer</h4>
                <?php
                $transfer['amount'] = 30000;
                $transfer->save();
                ?>
                <pre><?php print_r($transfer); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body content">
                <h4>Retrieve transfer's schedules</h4>
                <?php
                $schedules = $transfer->schedules();
                ?>
                <pre><?php print_r($schedules); ?></pre>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-6">
            <div class="col-body">
                <?php
                $searchTransfer = \Omise\Transfer::search();
                $searchTransfer['object'];
                ?>
                <pre><?php print_r($searchTransfer); ?></pre>
            </div>
        </div>

        <div class="col col-6">
            <div class="col-body">
                <?php
                $transferSchedules = \Omise\Transfer::schedules();
                ?>
                <pre><?php print_r($transferSchedules); ?></pre>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-6">
            <div class="col-body">
                <?php
                $transfer->destroy();
                ?>
                <pre><?php print_r($transfer); ?></pre>
            </div>
        </div>
</body>
