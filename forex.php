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
                $forex = OmiseForex::retrieve('JPY');
                $forex->reload();
                ?>
                <pre><?php print_r($forex); ?></pre>
            </div>
        </div>
    </div>
</body>
