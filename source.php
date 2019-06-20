<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <?php
            $source = OmiseSource::create([
                'type'     => 'alipay',
                'amount'   => 50000,
                'currency' => 'THB'
            ]);
            ?>
            <?php display_result($source); ?>
        </div>
    </div>
</div>
