<?php
// Implementation ---
$balance = \Omise\Balance::retrieve();

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve balance',
    'slug'        => 'retrieve-balance',
    'description' => '',
    'result'      => $balance,
    'note'        => '',
    'code'        =>
'
<code>$balance = <span class="code-class">\Omise\Balance</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$balance<span class="code-fnc-prths">)</span>;</code>
'));
?>

<?php
// Implementation ---
create_charge(); 
$balance->reload();

// Template ---
Template::renderColumn(array(
    'title'       => 'Reload balance',
    'slug'        => 'reload-balance',
    'description' => '',
    'result'      => $balance,
    'note'        => 'Note, this test creates a new charge before reloading the balance so we can see the different between the balance before (on the left column) and after (this column) reloaded.',
    'code'        =>
'
<code>$balance = <span class="code-class">\Omise\Balance</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code>$balance-><span class="code-fnc">reload</span><span class="code-fnc-prths">()</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$balance<span class="code-fnc-prths">)</span>;</code>
'));
?>
</div>
