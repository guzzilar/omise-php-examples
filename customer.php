<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <div class="row">
        <div class="col col-4">
            <div class="col-body content">
                <h4>Retrieve customers (filtered by <code>limit=3</code>)</h4>
                <?php
                $customers = \Omise\Customer::retrieve('?limit=3');
                ?>
                <pre><?php print_r($customers); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body content">
                <h4>Retrieve customer</h4>
                <?php
                $customer = \Omise\Customer::retrieve($customers['data'][0]['id']);
                ?>
                <pre><?php print_r($customer); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body content">
                <h4>Search</h4>
                <?php
                $searchCustomers = \Omise\Customer::search();
                $searchCustomers['object'];
                ?>
                <pre><?php print_r($searchCustomers); ?></pre>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-4">
            <div class="col-body content">
                <h4>Create customer</h4>
                <?php
                $customer = \Omise\Customer::create(['email' => 'nam@omise.co']);
                $customer->reload();
                ?>
                <pre><?php print_r($customer); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body content">
                <h4>Update customer</h4>
                <?php
                $customer->update(array(
                    'description' => 'Updated! created at ' . time()
                ));
                ?>
                <pre><?php print_r($customer); ?></pre>
            </div>
        </div>

        <div class="col col-4">
            <div class="col-body content">
                <h4>Destroy customer</h4>
                <?php
                $customer->destroy();
                ?>
                <pre><?php print_r($customer); ?></pre>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve customer's cards</h4>
                <?php
                $customer = \Omise\Customer::retrieve($customers['data'][0]['id']);
                $cards    = $customer->cards();
                ?>
                <pre><?php print_r($cards); ?></pre>
            </div>
        </div>

        <div class="col col-6">
            <div class="col-body content">
                <h4>Retrieve customer's schedules</h4>
                <?php
                $schedules = $customer->schedules();
                ?>
                <pre><?php print_r($schedules); ?></pre>
            </div>
        </div>
    </div>
</body>
