<div class="row">
    <div class="col col-4">
        <div class="col-body">
            <?php $recipients = OmiseRecipient::retrieve('?limit=3'); ?>
            <?php display_result($recipients); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body">
            <?php
            $recipient = OmiseRecipient::retrieve($recipients['data'][0]['id']);
            $recipient->reload();
            ?>
            <?php display_result($recipient); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body">
            <?php
            $searchRecipients = OmiseRecipient::search();
            $searchRecipients['object'];
            ?>
            <?php display_result($searchRecipients); ?>
        </div>  
    </div>
</div>

<div class="row">
    <div class="col col-4">
        <div class="col-body">
            <?php
            $recipient = OmiseRecipient::create([
                'name'         => 'Nuttanon ' . time(),
                'description'  => 'Tester account, created at ' . time(),
                'email'        => 'nam@omise.co',
                'type'         => 'individual',
                'bank_account' => array(
                    'brand'  => 'bbl',
                    'number' => '1234567890',
                    'name'   => 'Tester Account'
                )
            ]);
            ?>
            <?php display_result($recipient); ?>
        </div>  
    </div>

    <div class="col col-4">
        <div class="col-body">
            <?php
            $recipient->update([
                'description'  => 'Updated! Tester account, created at ' . time(),
            ]);
            ?>
            <?php display_result($recipient); ?>
        </div>  
    </div>

    <div class="col col-4">
        <div class="col-body">
            <?php $recipient->destroy(); ?>
            <?php display_result($recipient); ?>
        </div>  
    </div>
</div>

<div class="row">
    <div class="col col-12">
        <div class="col-body">
            <?php $recipient = OmiseRecipient::retrieve($recipients['data'][0]['id']); ?>
            <?php display_result($recipient->schedules()); ?>
        </div>
    </div>
</div>
