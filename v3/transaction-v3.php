<?php
// Implementation ---
$transactions = \Omise\Transaction::all([ 'limit' => 3, 'order' => 'reverse_chronological' ]);

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve a collection of Transaction objects <small>(Total: ' . number_format(count($transactions)) . ' items)</small>',
    'slug'        => 'retrieve-transaction-collection',
    'description' => '',
    'result'      => $transactions,
    'note'        => '',
    'code'        =>
'
<code>$transactions = <span class="code-class">\Omise\Transaction</span>::<span class="code-fnc">all</span><span class="code-fnc-prths">(</span>[</code>
<code>    <span class="code-string">\'limit\'</span> => <span class="code-int">3</span>,</code>
<code>    <span class="code-string">\'order\'</span> => <span class="code-string">\'reverse_chronological\'</span></code>
<code>]<span class="code-fnc-prths">)</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$transactions<span class="code-fnc-prths">)</span>;</code>
'));
?>

<?php
// Implementation ---
$transaction = \Omise\Transaction::retrieve($transactions->first()['id']);
$transaction->reload();

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve a Transaction',
    'slug'        => 'retrieve-transaction',
    'description' => '',
    'result'      => $transaction,
    'note'        => 'We want to reload a resource only when there is a situation that we are not sure if the resource\'s attributes are up-to-date. In case of <code class="highlight">retrieve</code>, most of the time, we do not need to re-reload (as we just retrieved it).',
    'code'        =>
'
<code>$transaction = <span class="code-class">\Omise\Transaction</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">(</span><span class="code-string">\'trxn_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code>$transaction-><span class="code-fnc">reload</span><span class="code-fnc-prths">()</span>; <span class="code-comment">// Optional</span></code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$transaction<span class="code-fnc-prths">)</span>;</code>
'));
?>