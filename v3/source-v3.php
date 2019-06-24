<?php
// Implementation ---
$source = \Omise\Source::create([ 'amount' => 100000, 'currency' => 'thb', 'type' => 'bill_payment_tesco_lotus' ]);

// Template ---
Template::renderColumn(array(
    'title'       => 'Create a new Source',
    'slug'        => 'create-source',
    'description' => '',
    'result'      => $source,
    'note'        => '',
    'code'        =>
'
<code>$source = <span class="code-class">\Omise\Source</span>::<span class="code-fnc">create</span><span class="code-fnc-prths">(</span>[</code>
<code>    <span class="code-string">\'amount\'</span>   => <span class="code-int">3000</span>,</code>
<code>    <span class="code-string">\'currency\'</span> => <span class="code-string">\'thb\'</span>,</code>
<code>    <span class="code-string">\'type\'</span>     => <span class="code-string">\'bill_payment_tesco_lotus\'</span></code>
<code>]<span class="code-fnc-prths">)</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$source<span class="code-fnc-prths">)</span>;</code>
'));
?>