<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve capabilities</h4>
                <?php
                $capabilities = \Omise\Capabilities::retrieve();
                ?>
                <pre><?php print_r($capabilities); ?></pre>
            </div>
        </div>

        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve capabilities's payment backend</h4>
                <?php
                $paymentBackends = $capabilities->getBackends();
                ?>
                <pre><?php print_r($paymentBackends); ?></pre>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve capabilities's payment backend filtered by installment type</h4>
                <?php
                $installmentPaymentBackends = $capabilities->getBackends(
                    $capabilities->makeBackendFilterType('installment')
                );
                ?>
                <pre><?php print_r($installmentPaymentBackends); ?></pre>
            </div>
        </div>
    </div>
</body>
