<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve account</h4>
                <?php
                $account = \Omise\Account::retrieve();
                ?>
                <pre><?php print_r($account); ?></pre>
            </div>
        </div>

        <!-- OmiseAccount -->
        <div class="col col-6">
            <div class="col-body content">
                <h4>Reload account</h4>
                <?php
                $account->reload();
                ?>
                <pre><?php print_r($account); ?></pre>
            </div>
        </div>
    </div>
</body>
