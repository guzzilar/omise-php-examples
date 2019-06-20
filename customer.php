<div class="row">
    <div class="col col-4">
        <div class="col-body content">
            <h4>Retrieve customers (filtered by <code>limit=3</code>)</h4>
            <?php $customers = OmiseCustomer::retrieve('?limit=3'); ?>
            <?php display_result($customers); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body content">
            <h4>Retrieve customer</h4>
            <?php $customer = OmiseCustomer::retrieve($customers['data'][0]['id']); ?>
            <?php display_result($customer); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body content">
            <h4>Search</h4>
            <?php
            $searchCustomers = OmiseCustomer::search();
            $searchCustomers['object'];
            ?>
            <?php display_result($searchCustomers); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-4">
        <div class="col-body content">
            <h4>Create customer</h4>
            <?php
            $customer = OmiseCustomer::create(['email' => 'nam@omise.co']);
            $customer->reload();
            ?>
            <?php display_result($customer); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body content">
            <h4>Update customer</h4>
            <?php $customer->update(array('description' => 'Updated! created at ' . time())); ?>
            <?php display_result($customer); ?>
        </div>
    </div>

    <div class="col col-4">
        <div class="col-body content">
            <h4>Destroy customer</h4>
            <?php $customer->destroy(); ?>
            <?php display_result($customer); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve customer's cards</h4>
            <?php
            $customer = OmiseCustomer::retrieve($customers['data'][0]['id']);
            $cards    = $customer->cards();
            ?>
            <?php display_result($cards); ?>
        </div>
    </div>

    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve customer's schedules</h4>
            <?php $schedules = $customer->schedules(); ?>
            <?php display_result($schedules); ?>
        </div>
    </div>
</div>
