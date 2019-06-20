<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <?php
            $forex = OmiseForex::retrieve('JPY');
            $forex->reload();
            ?>
            <?php display_result($forex); ?>
        </div>
    </div>
</div>
