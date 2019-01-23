<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve links (filtered by <code>order=reverse_chronological</code> & <code>limit=5</code>)</h4>
                <?php
                $links = \Omise\Link::retrieve('?order=reverse_chronological&limit=5');
                ?>
                <pre><?php print_r($links); ?></pre>
            </div>
        </div>

        <div class="col col-6">
            <div class="col-body content">
                <h4>Create link</h4>
                <?php
                $link = \Omise\Link::create([
                    'amount'      => 3000,
                    'currency'    => 'thb',
                    'title'       => 'Created Link at ' . time(),
                    'description' => 'Omise-PHP test suit'
                ]);
                ?>
                <pre><?php print_r($link); ?></pre>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve link</h4>
                <?php
                $link = \Omise\Link::retrieve($link['id']);
                $link->reload();
                ?>
                <pre><?php print_r($link); ?></pre>
            </div>
        </div>

        <div class="col col-6">
            <div class="col-body content">
                <h4>Search links (filtered by <code>used=false</code>)</h4>
                <?php
                $links = \Omise\Link::search()->filter(['used' => false]);
                $links['object'];
                ?>
                <pre><?php print_r($links); ?></pre>
            </div>
        </div>
    </div>
</body>
