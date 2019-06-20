<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve disputes</h4>
            <?php $disputes = OmiseDispute::retrieve(); ?>
            <?php display_result($disputes); ?>
        </div>  
    </div>

    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve pending disputes</h4>
            <?php $disputes = OmiseDispute::retrieve('pending'); ?>
            <?php display_result($disputes); ?>
        </div>  
    </div>
</div>

<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <h4>Retrieve dispute</h4>
            <?php $dispute = OmiseDispute::retrieve('dspt_test_5dzte5rdx2dgzbdzyc0'); ?>
            <?php display_result($dispute); ?>
        </div>  
    </div>

    <div class="col col-6">
        <div class="col-body content">
            <?php
            try {
                $dispute->update(['message' => 'Updated at ' . time()]);
                display_result($dispute);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            ?>
            
        </div>  
    </div>
</div>

<div class="row">
    <div class="col col-12">
        <div class="col-body content">
            <?php
            $disputes = OmiseDispute::search()->filter(['status'=>'open']);
            $disputes['object'];
            ?>
            <?php display_result($disputes); ?>
        </div>  
    </div>
</div>
