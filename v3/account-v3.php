<?php
// Implementation ---
$account = \Omise\Account::retrieve();

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve an account',
    'slug'        => 'retrieve-account',
    'description' => '',
    'result'      => $account,
    'note'        => '',
    'code'        =>
'
<code>$account = <span class="code-class">\Omise\Account</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$account<span class="code-fnc-prths">)</span>;</code>
'));
?>


<?php
// Implementation ---
$account->reload();

// Template ---
Template::renderColumn(array(
    'title'       => 'Reload an account',
    'slug'        => 'reload-account',
    'description' => '',
    'result'      => $account,
    'note'        => '',
    'code'        =>
'
<code>$account = <span class="code-class">\Omise\Account</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code>$account-><span class="code-fnc">reload</span><span class="code-fnc-prths">()</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$account<span class="code-fnc-prths">)</span>;</code>
'));
?>

