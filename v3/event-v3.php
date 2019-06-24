<div class="row">
<?php
$events = Omise\Event::all([ 'limit' => 3 ]);
Template::renderColumn('Retrieve a collection of event objects <small>(Total: ' . number_format(count($events)) . ' items)</small>', $events,
'
<code>$events = <span class="code-class">\Omise\Event::</span><span class="code-fnc">all</span><span class="code-fnc-prths">(</span>[ <span class="code-string">\'limit\'</span> => <span class="code-int">3</span> ]<span class="code-fnc-prths">)</span>;</code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$events<span class="code-fnc-prths">)</span>;</code>
');
?>

<?php
Template::renderColumn('Retrieve a first object of an event collection', $events->first(),
'
<code>$events = <span class="code-class">\Omise\Event::</span><span class="code-fnc">all</span><span class="code-fnc-prths">(</span>[ <span class="code-string">\'limit\'</span> => <span class="code-int">3</span> ]<span class="code-fnc-prths">)</span>;</code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$events-><span class="code-fnc">first</span><span class="code-fnc-prths">())</span>;</code>
');
?>
</div>

<div class="row">
<?php
$event = Omise\Event::retrieve($events->first()['id']);
$event->reload();
Template::renderColumn('Retrieve a first object of an event collection', $event,
'
<code>$event = <span class="code-class">\Omise\Event::</span><span class="code-fnc">retrieve</span><span class="code-fnc-prths">(</span><span class="code-string">\'evnt_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code>$event-><span class="code-fnc">reload</span><span class="code-fnc-prths">()</span>; <span class="code-comment">// Optional</span></code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$event<span class="code-fnc-prths">)</span>;</code>
');
?>
</div>
