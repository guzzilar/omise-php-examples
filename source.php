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
                $source = \Omise\Source::create([
                    'type'     => 'alipay',
                    'amount'   => 50000,
                    'currency' => 'THB'
                ]);
                ?>
                <pre><?php print_r($source); ?></pre>
            </div>
        </div>
    </div>
</body>
