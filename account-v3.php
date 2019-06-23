<div class="row">
<?php
$account = \Omise\Account::retrieve();
// ---
Template::renderColumn('Retrieve an account', $account,
'
<code>$account = <span class="code-class">\Omise\Account</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$account<span class="code-fnc-prths">)</span>;</code>
');
?>

<?php
$account->reload();
// ---
Template::renderColumn('Reload an account', $account,
'
<code>$account = <span class="code-class">\Omise\Account</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code>$account-><span class="code-fnc">reload</span><span class="code-fnc-prths">()</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$account<span class="code-fnc-prths">)</span>;</code>
');
?>
</div>
