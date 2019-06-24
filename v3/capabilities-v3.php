<div class="row">
<?php
$capabilities = \Omise\Capabilities::retrieve();
Template::renderColumn('Retrieve capabilities', $capabilities,
'
<code>$capabilities = <span class="code-class">\Omise\Capabilities::</span><span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$capabilities<span class="code-fnc-prths">)</span>;</code>
');
?>

<?php
$capabilities->reload();
Template::renderColumn('Reload capabilities', $capabilities,
'
<code>$capabilities = <span class="code-class">\Omise\Capabilities</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code>$capabilities-><span class="code-fnc">reload</span><span class="code-fnc-prths">()</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$capabilities<span class="code-fnc-prths">)</span>;</code>
');
?>
</div>
