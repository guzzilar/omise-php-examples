<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <div class="row">
        <div class="col col-6">
            <div class="col-body">
                <?php
                $disputes = OmiseDispute::retrieve();
                ?>
                <pre><?php print_r($disputes); ?></pre>
            </div>  
        </div>

        <div class="col col-6">
            <div class="col-body">
                <?php
                $disputes = OmiseDispute::retrieve('pending');
                ?>
                <pre><?php print_r($disputes); ?></pre>
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col col-6">
            <div class="col-body">
                <?php
                $dispute = OmiseDispute::retrieve('dspt_test_5dzte5rdx2dgzbdzyc0');
                ?>
                <pre><?php print_r($dispute); ?></pre>
            </div>  
        </div>

        <div class="col col-6">
            <div class="col-body">
                <?php
                try {
                    $dispute->update(['message' => 'Updated at ' . time()]);
                    echo '<pre>' . print_r($dispute) . '</pre>';
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                ?>
                
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col col-12">
            <div class="col-body">
                <?php
                $disputes = OmiseDispute::search()->filter(['status'=>'open']);
                $disputes['object'];
                ?>
                <pre><?php print_r($disputes); ?></pre>
            </div>  
        </div>
    </div>
</body>
