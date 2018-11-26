<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <div class="row">
        <div class="col col-4">
            <div class="col-body">
                <?php
                $recipients = OmiseRecipient::retrieve('?limit=3');
                ?>
                <pre><?php print_r($recipients); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body">
                <?php
                $recipient = OmiseRecipient::retrieve($recipients['data'][0]['id']);
                $recipient->reload();
                ?>
                <pre><?php print_r($recipient); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body">
                <?php
                $searchRecipients = OmiseRecipient::search();
                $searchRecipients['object'];
                ?>
                <pre><?php print_r($searchRecipients); ?></pre>
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
                <pre><?php print_r($recipient); ?></pre>
            </div>  
        </div>

        <div class="col col-4">
            <div class="col-body">
                <?php
                $recipient->update([
                    'description'  => 'Updated! Tester account, created at ' . time(),
                ]);
                ?>
                <pre><?php print_r($recipient); ?></pre>
            </div>  
        </div>

        <div class="col col-4">
            <div class="col-body">
                <?php
                $recipient->destroy();
                ?>
                <pre><?php print_r($recipient); ?></pre>
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col col-12">
            <div class="col-body">
                <?php
                $recipient = OmiseRecipient::retrieve($recipients['data'][0]['id']);
                ?>

                <pre><?php print_r($recipient->schedules()); ?></pre>
            </div>
        </div>
    </div>
</body>
