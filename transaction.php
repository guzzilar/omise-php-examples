<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve transactions</h4>
            <?php $transactions = OmiseTransaction::retrieve('?limit=3'); ?>
            <?php display_result($transactions); ?>
        </div>  
    </div>

    <div class="col col-6">
        <div class="col-body content">
            <h4>Reload transactions</h4>
            <?php
            // Note: Create one charge so we can see the different between the balance
            //       before and after reloaded.
            create_charge();
            $transactions->reload();
            ?>
            <?php display_result($transactions); ?>
            <span class="note">Note, this test creates a new one charge before reloading the balance so we can see the different between the balance before and after reloaded.</span>
        </div>  
    </div>
</div>

<div class="row">
    <div class="col col-12">
        <div class="col-body content">
            <h4>Retrieve transaction</h4>
            <?php $transaction = OmiseTransaction::retrieve($transactions['data'][0]['id']); ?>
            <?php display_result($transaction); ?>
        </div>  
    </div>
</div>
