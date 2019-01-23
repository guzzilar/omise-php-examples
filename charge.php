<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <div class="row">
        <div class="col col-4">
            <div class="col-body content">
                <h4>Retrieve charges</h4>
                <?php
                $charges = \Omise\Charge::schedules();
                ?>
                <pre><?php print_r($charges); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body content">
                <h4>Retrieve charges (filtered by <code>order=reverse_chronological</code> & <code>limit=3</code>)</h4>
                <?php
                $charges = \Omise\Charge::retrieve('?order=reverse_chronological&limit=3');
                ?>
                <pre><?php print_r($charges); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body content">
                <h4>Retrieve charge</h4>
                <?php
                $charge = \Omise\Charge::retrieve($charges['data'][0]['id']);
                $charge->reload();
                ?>
                <pre><?php print_r($charge); ?></pre>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-4">
            <div class="col-body content">
                <h4>Search charges (filtered by <code>paid=false</code>)</h4>
                <?php
                $searchCharges = \Omise\Charge::search()->filter(['paid' => false]);
                $searchCharges['object'];
                ?>
                <pre><?php print_r($searchCharges); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body content">
                <h4>Create charge</h4>
                <?php
                $token  = create_card_token();
                $charge = \Omise\Charge::create([
                    'card'      => $token['id'],
                    'amount'    => 55000,
                    'currency'  => 'THB',
                    'capture'   => false
                ]);
                ?>
                <pre><?php print_r($charge); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body content">
                <h4>Update charge</h4>
                <?php
                $charge->update(['description' => 'Updated at ' . time()]);
                ?>
                <pre><?php print_r($charge); ?></pre>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-4">
            <div class="col-body content">
                <h4>Capture charge</h4>
                <?php
                $charge->capture();
                ?>
                <pre><?php print_r($charge); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body content">
                <h4>Refund charge</h4>
                <?php
                $refund = $charge->refund(['amount' => 35000]);
                ?>
                <pre><?php print_r($refund); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body content">
                <h4>Get refund list</h4>
                <?php
                $refunds = $charge->refunds();
                ?>
                <pre><?php print_r($refunds); ?></pre>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Reverse charge</h4>
                <?php
                $token  = create_card_token();
                $charge = \Omise\Charge::create([
                    'card'      => $token['id'],
                    'amount'    => 55000,
                    'currency'  => 'THB',
                    'capture'   => false
                ]);

                $charge->reverse();
                ?>
                <pre><?php print_r($charge); ?></pre>

                <span class="note">Note, this test creates a new one charge before reversing the charge.</span>
            </div>
        </div>
    </div>
</body>
