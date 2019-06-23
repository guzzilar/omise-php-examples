<div class="row">
<?php
$capabilities = \Omise\Capabilities::retrieve();
Template::renderColumn('Retrieve capabilities', $capabilities,
'
<code>$capabilities = <span class="code-class">\Omise\Capabilities::</span><span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$capabilities<span class="code-fnc-prths">)</span>;</code>
');
?>

    <!-- Reload OmiseCapabilities -->
    <div class="col col-6">
        <div class="col-body content">
            <h4>Reload capabilities</h4>
            <?php $capabilities->reload(); ?>
            <?php display_result($capabilities); ?>
        </div>
    </div>
</div>
