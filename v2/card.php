<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve Customer's card list</h4>
            <?php
            // Prepare data
            $token     = create_card_token();
            $customers = OmiseCustomer::retrieve('?limit=1');
            $customer  = OmiseCustomer::retrieve($customers['data'][0]['id']);
            $customer->update(['card' => $token['id']]);

            $cards = $customer->cards();
            ?>
            <?php display_result($cards); ?>
        </div>
    </div>

    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve Customer's card list (filtered <code>limit=1</code>)</h4>
            <?php $cards = $customer->cards(['limit'=>1]); ?>
            <?php display_result($cards); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve card</h4>
            <?php
            $cards = $customer->cards();
            $card  = $cards->retrieve($cards['data'][0]['id']);
            ?>
            <?php display_result($card); ?>
        </div>
    </div>

    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve card from a filtered card list</h4>
            <?php
            $cards = $customer->cards(['limit'=>1]);
            $card  = $cards->retrieve($cards['data'][0]['id']);
            $card->reload();
            ?>
            <?php display_result($card); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <h4>Update card</h4>
            <?php $card->update(['name' => 'UPDATED NAME']); ?>
            <?php display_result($card); ?>
        </div>
    </div>

    <div class="col col-6">
        <div class="col-body content">
            <h4>Destroy card</h4>
            <?php $card->destroy(); ?>
            <?php display_result($card); ?>
        </div>
    </div>
</div>
