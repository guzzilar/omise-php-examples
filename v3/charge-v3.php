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
$charge->reload();

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve a charge',
    'slug'        => 'retrieve-charge',
    'description' => '',
    'result'      => $charge,
    'note'        => 'We want to reload a resource only when there is a situation that we are not sure if the resource\'s attributes are up-to-date. In case of <code class="highlight">retrieve</code>, most of the time, we do not need to re-reload (as we just retrieved it).',
    'code'        =>
'
<code>$charge = <span class="code-class">\Omise\Charge</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">(</span><span class="code-string">\'chrg_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code>$charge-><span class="code-fnc">reload</span><span class="code-fnc-prths">()</span>; <span class="code-comment">// Optional</span></code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$charge<span class="code-fnc-prths">)</span>;</code>
'));
?>

<?php
// Implementation ---
$token  = create_card_token();
$charge = \Omise\Charge::create([
    'card'      => $token['id'],
    'amount'    => 55000,
    'currency'  => 'THB'
]);

// Template ---
Template::renderColumn(array(
    'title'       => 'Create a charge',
    'slug'        => 'create-charge',
    'description' => '',
    'result'      => $charge,
    'warning'     => '<strong>DO NOT</strong> use <code class="highlight">\Omise\Token::create([...])</code> class in production.<br/>Please note that this class should be used only in development with a test card. In production, please use omise.js!',
    'note'        => '',
    'code'        =>
'
<code>$card = [</code>
<code>    <span class="code-string">\'name\'</span>             => <span class="code-string">\'Nuttanon T.\'</span>,</code>
<code>    <span class="code-string">\'number\'</span>           => <span class="code-string">\'4242424242424242\'</span>,</code>
<code>    <span class="code-string">\'expiration_month\'</span> => <span class="code-int">10</span>,</code>
<code>    <span class="code-string">\'expiration_year\'</span>  => <span class="code-int">2032</span>,</code>
<code>    <span class="code-string">\'security_code\'</span>    => <span class="code-int">123</span></code>
<code>];</code>
<code>$token  = <span class="code-class">\Omise\Token</span>::<span class="code-fnc">create</span><span class="code-fnc-prths">(</span>[ <span class="code-string">\'card\'</span> => $card ]<span class="code-fnc-prths">)</span>;</code>
<code></code>
<code>$charge = <span class="code-class">\Omise\Charge</span>::<span class="code-fnc">create</span><span class="code-fnc-prths">(</span>[</code>
<code>    <span class="code-string">\'card\'</span>     => $token[<span class="code-string">\'id\'</span>],</code>
<code>    <span class="code-string">\'amount\'</span>   => <span class="code-int">55000</span>,</code>
<code>    <span class="code-string">\'currency\'</span> => <span class="code-string">\'THB\'</span>,</code>
<code>]<span class="code-fnc-prths">)</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$charge<span class="code-fnc-prths">)</span>;</code>
'));
?>
