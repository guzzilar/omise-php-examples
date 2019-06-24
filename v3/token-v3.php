<?php
// Implementation ---
$card = [
    'name'             => 'Nuttanon T.',
    'number'           => '4242424242424242',
    'expiration_month' => 10,
    'expiration_year'  => 2032,
    'security_code'    => 123
];
$token = \Omise\Token::create(['card' => $card]);

// Template ---
Template::renderColumn(array(
    'title'       => 'Create a new Token',
    'slug'        => 'create-token',
    'description' => '',
    'result'      => $token,
    'note'        => '<strong>DO NOT</strong> use this class in production.<br/>Please note that this class should be used only in development with a test card. In production, please use omise.js!',
    'code'        =>
'
<code>$card = [</code>
<code>    <span class="code-string">\'name\'</span>             => <span class="code-string">\'Nuttanon T.\'</span>,</code>
<code>    <span class="code-string">\'number\'</span>           => <span class="code-string">\'4242424242424242\'</span>,</code>
<code>    <span class="code-string">\'expiration_month\'</span> => <span class="code-int">10</span>,</code>
<code>    <span class="code-string">\'expiration_year\'</span>  => <span class="code-int">2032</span>,</code>
<code>    <span class="code-string">\'security_code\'</span>    => <span class="code-int">123</span></code>
<code>];</code>
<code></code>
<code>$token = <span class="code-class">\Omise\Token</span>::<span class="code-fnc">create</span><span class="code-fnc-prths">(</span>[ <span class="code-string">\'card\'</span> => $card ]<span class="code-fnc-prths">)</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$token<span class="code-fnc-prths">)</span>;</code>
'));
?>


<?php
// Implementation ---
$token = \Omise\Token::retrieve($token['id']);
$token->reload();

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve a Token',
    'slug'        => 'retrieve-token',
    'description' => '',
    'result'      => $token,
    'note'        => 'We want to reload a resource only when there is a situation that we are not sure if the resource\'s attributes are up-to-date. In case of <code class="highlight">retrieve</code>, most of the time, we do not need to re-reload (as we just retrieved it).',
    'code'        =>
'
<code>$token = <span class="code-class">\Omise\Token</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">(</span><span class="code-string">\'tokn_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code>$token-><span class="code-fnc">reload</span><span class="code-fnc-prths">();</span> <span class="code-comment">// Optional</span></code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$token<span class="code-fnc-prths">)</span>;</code>
'));
?>
