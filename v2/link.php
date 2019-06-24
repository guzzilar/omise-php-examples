<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <h4>Creates link</h4>
            <?php
            $link = OmiseLink::create([
                'amount'      => 3000,
                'currency'    => 'thb',
                'title'       => 'Created Link at ' . time(),
                'description' => 'Omise-PHP test suit'
            ]);
            ?>
            <?php display_result($link); ?>
        </div>
    </div>

    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve links</h4>
            <?php $links = OmiseLink::retrieve('?order=reverse_chronological&limit=5'); ?>
            <?php display_result($links); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve link</h4>
            <?php
            $link = OmiseLink::retrieve($links['data'][0]['id']);
            $link->reload();
            ?>
            <?php display_result($link); ?>
        </div>
    </div>

    <div class="col col-6">
        <div class="col-body content">
            <?php
            $links = OmiseLink::search()->filter(['used' => false]);
            $links['object'];
            ?>
            <?php display_result($links); ?>
        </div>
    </div>
</div>
