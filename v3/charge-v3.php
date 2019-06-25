<?php
// Implementation ---
$charges = \Omise\Charge::all();

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve a collection of charge objects <small>(Total: ' . number_format(count($charges)) . ' items)</small>',
    'slug'        => 'retrieve-charge-collection',
    'description' => '',
    'result'      => $charges,
    'note'        => '',
    'code'        =>
'
<code>$charges = <span class="code-class">\Omise\Charge</span>::<span class="code-fnc">all</span><span class="code-fnc-prths">()</span>;</code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$charges<span class="code-fnc-prths">)</span>;</code>
'));
?>

<?php
// Implementation ---
$charges = \Omise\Charge::all([ 'limit' => 2, 'order' => 'reverse_chronological' ]);

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve a collection of charge objects, with query condition <small>(Total: ' . number_format(count($charges)) . ' items)</small>',
    'slug'        => '',
    'description' => 'We can simply pass a query condition at the first argument of <code class="highlight">all()</code> method.<br/>Check <a href="https://www.omise.co/api-pagination">https://www.omise.co/api-pagination</a> for more information.',
    'result'      => $charges,
    'note'        => '',
    'code'        =>
'
<code>$charges = <span class="code-class">Charge</span>::<span class="code-fnc">all</span><span class="code-fnc-prths">(</span>[</code>
<code>    <span class="code-string">\'limit\'</span> => <span class="code-int">2</span>,</code>
<code>    <span class="code-string">\'order\'</span> => <span class="code-string">\'reverse_chronological\'</span></code>
<code>]<span class="code-fnc-prths">)</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$charges<span class="code-fnc-prths">)</span>;</code>
'));
?>

<?php
// Implementation ---
$charge = \Omise\Charge::retrieve($charges->first()['id']);

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve a charge',
    'slug'        => 'retrieve-charge',
    'description' => '',
    'result'      => $charge,
    'note'        => '',
    'code'        =>
'
<code>$charge = <span class="code-class">\Omise\Charge</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">(</span><span class="code-string">\'chrg_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$charge<span class="code-fnc-prths">)</span>;</code>
'));
?>
