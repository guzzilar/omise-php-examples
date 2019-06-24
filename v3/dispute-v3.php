<?php
// Implementation ---
$disputes = Omise\Dispute::all([ 'limit' => 3, 'order' => 'reverse_chronological' ]);

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve a collection of Dispute objects <small>(Total: ' . number_format(count($disputes)) . ' items)</small>',
    'slug'        => 'retrieve-dispute-collection',
    'description' => '',
    'result'      => $disputes,
    'note'        => '',
    'code'        =>
'
<code>$disputes = <span class="code-class">\Omise\Dispute</span>::<span class="code-fnc">all</span><span class="code-fnc-prths">(</span>[</code>
<code>    <span class="code-string">\'limit\'</span> => <span class="code-int">3</span>,</code>
<code>    <span class="code-string">\'order\'</span> => <span class="code-string">\'reverse_chronological\'</span></code>
<code>]<span class="code-fnc-prths">)</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$disputes<span class="code-fnc-prths">)</span>;</code>
'));
?>