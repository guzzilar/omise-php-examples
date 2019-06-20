<div class="row">
    <!-- OmiseBalance -->
    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve balance</h4>
            <?php $balance = OmiseBalance::retrieve(); ?>
            <?php display_result($balance); ?>
        </div>
    </div>

    <!-- Reload OmiseBalance -->
    <div class="col col-6">
        <div class="col-body content">
            <h4>Reload balance</h4>
            <?php
            // Note: Create one charge so we can see the different
            //       between the balance before and after reloaded.
            create_charge(); 
            $balance->reload();
            ?>
            <?php display_result($balance); ?>

            <span class="note">Note, this test creates a new one charge before reloading the balance so we can see the different between the balance before and after reloaded.</span>
        </div>
    </div>
</div>
