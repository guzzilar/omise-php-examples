<div class="row">
    <div class="col col-4">
        <div class="col-body content">
            <h4>Retrieve charges</h4>
            <?php $charges = OmiseCharge::retrieve(); ?>
            <?php display_result($charges); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body content">
            <h4>Retrieve charges (filtered by <code>order=reverse_chronological</code> & <code>limit=3</code>)</h4>
            <?php $charges = OmiseCharge::retrieve('?order=reverse_chronological&limit=3'); ?>
            <?php display_result($charges); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body content">
            <h4>Retrieve charge</h4>
            <?php
            $charge = OmiseCharge::retrieve($charges['data'][0]['id']);
            $charge->reload();
            ?>
            <?php display_result($charge); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-4">
        <div class="col-body content">
            <h4>Search charges (filtered by <code>paid=false</code>)</h4>
            <?php
            $searchCharges = OmiseCharge::search()->filter(['paid' => false]);
            $searchCharges['object'];
            ?>
            <?php display_result($searchCharges); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body content">
            <h4>Create charge</h4>
            <?php
            $token  = create_card_token();
            $charge = OmiseCharge::create([
                'card'      => $token['id'],
                'amount'    => 55000,
                'currency'  => 'THB',
                'capture'   => false
            ]);
            ?>
            <?php display_result($charge); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body content">
            <h4>Update charge</h4>
            <?php
            $charge->update(['description' => 'Updated at ' . time()]);
            ?>
            <?php display_result($charge); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-4">
        <div class="col-body content">
            <h4>Capture charge</h4>
            <?php $charge->capture(); ?>
            <?php display_result($charge); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body content">
            <h4>Refund charge</h4>
            <?php $refund = $charge->refund(['amount' => 35000]); ?>
            <?php display_result($refund); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body content">
            <h4>Get refund list</h4>
            <?php $refunds = $charge->refunds(); ?>
            <?php display_result($refunds); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <h4>Reverse charge</h4>
            <?php
            $token  = create_card_token();
            $charge = OmiseCharge::create([
                'card'      => $token['id'],
                'amount'    => 55000,
                'currency'  => 'THB',
                'capture'   => false
            ]);

            $charge->reverse();
            ?>
            <?php display_result($charge); ?>

            <span class="note">Note, this test creates a new charge before reversing the charge.</span>
        </div>
    </div>
</div>
