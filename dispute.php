<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <?php
    $disputes = \Omise\Dispute::retrieve();
    if ($disputes['total'] < 1): ?>
        <div class="row">
            <div class="col col-12">
                <div class="col-body content">
                    <h4>Dispute not found</h4>
                    <p class="text">
                        This test requires at least 1 dispute to be opened.<br/>
                        Please submit one dispute at <a href="https://dashboard.omise.co/test/charges">Omise Dashboard</a>, or read: <a href="https://www.omise.co/how-to-open-and-manage-disputes-in-test-mode">"How do I open and manage disputes in test mode?"</a>
                    </p>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="row">
            <div class="col col-6">
                <div class="col-body content">
                    <h4>Retrieve disputes</h4>
                    <pre><?php print_r($disputes); ?></pre>
                </div>
            </div>

            <div class="col col-6">
                <div class="col-body content">
                    <h4>Retrieve pending disputes</h4>
                    <?php
                    $disputes = \Omise\Dispute::retrieve('pending');
                    ?>
                    <pre><?php print_r($disputes); ?></pre>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-6">
                <div class="col-body content">
                    <h4>Retrieve a dispute</h4>
                    <?php
                    $dispute = \Omise\Dispute::retrieve($disputes['data'][0]['id']);
                    ?>
                    <pre><?php print_r($dispute); ?></pre>
                </div>
            </div>

            <div class="col col-6">
                <div class="col-body content">
                    <h4>Update dispute</h4>
                    <?php
                    try {
                        $dispute->update(['message' => 'Updated at ' . time()]);
                        echo '<pre>' . print_r($dispute) . '</pre>';
                    } catch (Exception $e) {
                        echo $e->getMessage();
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-12">
                <div class="col-body content">
                    <h4>Search disputes (filtered by <code>status=open</code>)</h4>
                    <?php
                    $disputes = \Omise\Dispute::search()->filter(['status'=>'open']);
                    $disputes['object'];
                    ?>
                    <pre><?php print_r($disputes); ?></pre>
                </div>
            </div>
        </div>
    <?php endif; ?>
</body>
