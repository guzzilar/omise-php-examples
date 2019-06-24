<div class="row">
<?php
$customers = \Omise\Customer::all([ 'limit' => 3 ]);
// ---
Template::renderColumn('Retrieve a collection of event objects <small>(Total: ' . number_format(count($customers)) . ' items)</small>', $customers,
'
<code>$customers = <span class="code-class">\Omise\Customer</span>::<span class="code-fnc">all</span><span class="code-fnc-prths">(</span>[ <span class="code-string">\'limit\'</span> => <span class="code-int">3</span> ]<span class="code-fnc-prths">)</span>;</code>
<code><span class="code-fnc">print_r</span><span class="code-fnc-prths">(</span>$customers<span class="code-fnc-prths">)</span>;</code>
');
?>

<?php
$customer = \Omise\Customer::retrieve($customers->first()['id']);
// ---
Template::renderColumn('Retrieve one customer', $customer,
'
<code>$customer = <span class="code-class">\Omise\Customer</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">(</span><span class="code-string">\'cust_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code><span class="code-fnc">print_r</span><span class="code-fnc-prths">(</span>$customer<span class="code-fnc-prths">)</span>;</code>
');
?>
</div>

<div class="row">
<?php
$search = \Omise\Customer::search();
// ---
Template::renderColumn('Search for a specific customers', $search,
'
<code>$search = <span class="code-class">\Omise\Customer</span>::<span class="code-fnc">search</span><span class="code-fnc-prths">(</span><span class="code-fnc-prths">)</span>;</code>
<code>$search[<span class="code-string">\'object\'</span>];</code>
<code></code>
<code><span class="code-fnc">print_r</span><span class="code-fnc-prths">(</span>$search<span class="code-fnc-prths">)</span>;</code>
',
'Note, Search object is implemented with lazy loader.');
?>

<?php
$customer = \Omise\Customer::create([ 'email' => 'reinuttanon@gmail.com' ]);
// ---
Template::renderColumn('Create a new customer object', $customer,
'
<code>$customer = <span class="code-class">\Omise\Customer</span>::<span class="code-fnc">create</span><span class="code-fnc-prths">(</span>[ <span class="code-string">\'email\'</span> => <span class="code-string">\'reinuttanon@gmail.com\'</span><span class="code-fnc-prths"> ])</span>;</code>
<code><span class="code-fnc">print_r</span><span class="code-fnc-prths">(</span>$customer<span class="code-fnc-prths">)</span>;</code>
');
?>
</div>

<div class="row">


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
            $customer = OmiseCustomer::retrieve($customers->first()['id']);
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
