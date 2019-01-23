<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve transactions</h4>
                <?php
                $transactions = \Omise\Transaction::retrieve('?limit=3');
                ?>
                <pre><?php print_r($transactions); ?></pre>
            </div>  
        </div>

        <div class="col col-6">
            <div class="col-body content">
                <h4>Reload transactions</h4>
                <?php
                // Note: Create one charge so we can see the different between the balance
                //       before and after reloaded.
                create_charge();
                $transactions->reload();
                ?>
                <pre><?php print_r($transactions); ?></pre>
                <span class="note">Note, this test creates a new one charge before reloading the balance so we can see the different between the balance before and after reloaded.</span>
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col col-12">
            <div class="col-body content">
                <h4>Retrieve transaction</h4>
                <?php
                $transaction = \Omise\Transaction::retrieve($transactions['data'][0]['id']);
                ?>
                <pre><?php print_r($transaction); ?></pre>
            </div>  
        </div>
    </div>
</body>
