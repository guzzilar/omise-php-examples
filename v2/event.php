<div class="row">
    <div class="col col-6">
        <div class="col-body content">
            <?php $events = OmiseEvent::retrieve('?limit=3'); ?>
            <?php display_result($events); ?>
        </div>  
    </div>

    <div class="col col-6">
        <div class="col-body content">
            <?php
            $event = OmiseEvent::retrieve('evnt_test_59trmbv1hz9yux9wtcq');
            $event->reload();
            ?>
            <?php display_result($event); ?>
        </div>  
    </div>
</div>
