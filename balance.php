<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve balance</h4>
                <?php
                $balance = OmiseBalance::retrieve();
                ?>
                <pre><?php print_r($balance); ?></pre>
            </div>
        </div>

        <div class="col col-6">
            <div class="col-body content">
                <h4>Reload balance</h4>
                <?php
                // Note: Create one charge so we can see the different between the balance
                //       before and after reloaded.
                create_charge(); 
                $balance->reload();
                ?>
                <pre><?php print_r($balance); ?></pre>

                <span class="note">Note, this test creates a new one charge before reloading the balance so we can see the different between the balance before and after reloaded.</span>
            </div>
        </div>
    </div>
</body>
