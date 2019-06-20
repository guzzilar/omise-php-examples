<div class="row">
    <!-- OmiseAccount -->
    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve account</h4>
            <?php $account = OmiseAccount::retrieve(); ?>
            <?php display_result($account); ?>
        </div>
    </div>

    <!-- Reload OmiseAccount -->
    <div class="col col-6">
        <div class="col-body content">
            <h4>Reload account</h4>
            <?php $account->reload(); ?>
            <?php display_result($account); ?>
        </div>
    </div>
</div>
