<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve transfers</h4>
            <?php $transfers = OmiseTransfer::retrieve(); ?>
            <?php display_result($transfers); ?>
        </div>
    </div>

    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve transfer</h4>
            <?php
            $transfer = OmiseTransfer::retrieve($transfers['data'][0]['id']);
            $transfer->reload();
            ?>
            <?php display_result($transfer); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-4">
        <div class="col-body content">
            <h4>Create transfer</h4>
            <?php $transfer = OmiseTransfer::create(['amount' => 50000]); ?>
            <?php display_result($transfer); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body content">
            <h4>Update transfer</h4>
            <?php
            $transfer['amount'] = 30000;
            $transfer->save();
            ?>
            <?php display_result($transfer); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body content">
            <h4>Retrieve transfer's schedules</h4>
            <?php $schedules = $transfer->schedules(); ?>
            <?php display_result($schedules); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-6">
        <div class="col-body">
            <?php
            $searchTransfer = OmiseTransfer::search();
            $searchTransfer['object'];
            ?>
            <?php display_result($searchTransfer); ?>
        </div>
    </div>

    <div class="col col-6">
        <div class="col-body">
            <?php
            $transferSchedules = OmiseTransfer::schedules();
            ?>
            <?php display_result($transferSchedules); ?>
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
</div>
