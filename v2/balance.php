<div class="row">
<?php
$balance = OmiseBalance::retrieve();
// ---
Template::renderColumn('Retrieve balance', $balance,
'
<code>$balance = <span class="code-class">OmiseBalance</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$balance<span class="code-fnc-prths">)</span>;</code>
');
?>

<?php
create_charge(); 
$balance->reload();
// ---
Template::renderColumn('Reload balance', $balance,
'
<code>$balance = <span class="code-class">OmiseBalance</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code>$balance-><span class="code-fnc">reload</span><span class="code-fnc-prths">()</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$balance<span class="code-fnc-prths">)</span>;</code>
',
'Note, this test creates a new charge before reloading the balance so we can see the different between the balance before (on the left column) and after (this column) reloaded.');
?>
</div>
