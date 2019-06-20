<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve capabilities</h4>
            <?php $capabilities = OmiseCapabilities::retrieve(); ?>
            <?php display_result($capabilities); ?>
        </div>
    </div>
</div>
