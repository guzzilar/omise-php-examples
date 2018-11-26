<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>
    <?php
    // Prepare data.
    $startDatetime = new \DateTime('now', new \DateTimeZone('Asia/Bangkok'));
    $endDatetime   = new \DateTime('now', new \DateTimeZone('Asia/Bangkok'));
    $endDatetime->modify('+1 day');
    ?>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Create charge schedule</h4>
                <?php
                $customers = OmiseCustomer::retrieve('?limit=1&order=reverse_chronological');
                $customer  = OmiseCustomer::retrieve($customers['data'][0]['id']);

                if (is_null($customer['default_card'])) {
                    $token = create_card_token();
                    $customer->update(['card' => $token['id']]);
                }

                $scheduler = OmiseCharge::schedule(array(
                    'customer'    => $customer['id'],
                    'card'        => $customer['default_card'],
                    'amount'      => 50000,
                    'description' => 'Test schedule by Omise-PHP'
                ));

                try {
                    $chargeSchedule = $scheduler->every(1)
                                        ->days()
                                        ->startDate($startDatetime->format('Y-m-d'))
                                        ->endDate($endDatetime->format('Y-m-d'))
                                        ->start();
                    
                    $chargeSchedule->reload();
                    ?>
                    <pre><?php print_r($chargeSchedule); ?></pre>
                    <?php
                } catch (Exception $e) {
                    echo '<strong class="color-red">Failed</strong> : ' . $e->getMessage();
                }
                ?>
            </div>
        </div>

        <div class="col col-6">
            <div class="col-body content">
                <h4>Create transfer schedule</h4>
                <?php
                $scheduler = OmiseTransfer::schedule([
                    'recipient' => 'recp_test_59tqz77cl6uaelsj7nu',
                    'amount'    => 100000
                ]);

                try {
                    $transferSchedule = $scheduler->every(1)
                                        ->days()
                                        ->startDate($startDatetime->format('Y-m-d'))
                                        ->endDate($endDatetime->format('Y-m-d'))
                                        ->start();

                    $transferSchedule->reload();
                    ?>
                    <pre><?php print_r($transferSchedule); ?></pre>
                    <?php
                } catch (Exception $e) {
                    echo '<strong class="color-red">Failed</strong> : ' . $e->getMessage();
                }
                ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Get charge schedule's occurrences</h4>
                <?php
                $chargeOccurrences = $chargeSchedule->occurrences();
                ?>
                <pre><?php print_r($chargeOccurrences); ?></pre>
            </div>
        </div>

        <div class="col col-6">
            <div class="col-body content">
                <h4>Get transfer schedule's occurrences (filtered <code>order=reverse_chronological</code>)</h4>
                <?php if ($transferSchedule): ?>
                    <?php
                    $transferOccurrences = $transferSchedule->occurrences('?order=reverse_chronological');
                    ?>
                    <pre><?php print_r($transferOccurrences); ?></pre>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Get charge occurrence</h4>
                <?php
                $chargeOccurrence = $chargeOccurrences->retrieve($chargeOccurrences['data'][0]['id']);
                ?>
                <pre><?php print_r($chargeOccurrence); ?></pre>
            </div>
        </div>

        <div class="col col-6">
            <div class="col-body content">
                <h4>Get transfer occurrence</h4>
                <?php if ($transferSchedule): ?>
                    <?php
                    $transferOccurrence = $transferOccurrences->retrieve($transferOccurrences['data'][0]['id']);
                    ?>
                    <pre><?php print_r($transferOccurrence); ?></pre>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Destroy charge schedule</h4>
                <?php
                $chargeSchedule->destroy();
                ?>
                <pre><?php print_r($chargeSchedule); ?></pre>
            </div>
        </div>

        <div class="col col-6">
            <div class="col-body content">
                <h4>Destroy transfer schedule</h4>
                <?php if ($transferSchedule): ?>
                    <?php
                    $transferSchedule->destroy();
                    ?>
                    <pre><?php print_r($transferSchedule); ?></pre>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
