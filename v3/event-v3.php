<?php
// Implementation ---
$events = Omise\Event::all([ 'limit' => 3, 'order' => 'reverse_chronological' ]);

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve a collection of Event objects <small>(Total: ' . number_format(count($events)) . ' items)</small>',
    'slug'        => 'retrieve-event-collection',
    'description' => '',
    'result'      => $events,
    'note'        => '',
    'code'        =>
'
<code>$events = <span class="code-class">\Omise\Event</span>::<span class="code-fnc">all</span><span class="code-fnc-prths">(</span>[</code>
<code>    <span class="code-string">\'limit\'</span> => <span class="code-int">3</span>,</code>
<code>    <span class="code-string">\'order\'</span> => <span class="code-string">\'reverse_chronological\'</span></code>
<code>]<span class="code-fnc-prths">)</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$events<span class="code-fnc-prths">)</span>;</code>
'));
?>

<?php
// Implementation ---
$event = \Omise\Event::retrieve($events->first()['id']);
$event->reload();

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve a Event',
    'slug'        => 'retrieve-event',
    'description' => '',
    'result'      => $event,
    'note'        => 'We want to reload a resource only when there is a situation that we are not sure if the resource\'s attributes are up-to-date. In case of <code class="highlight">retrieve</code>, most of the time, we do not need to re-reload (as we just retrieved it).',
    'code'        =>
'
<code>$event = <span class="code-class">\Omise\Event</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">(</span><span class="code-string">\'evnt_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code>$event-><span class="code-fnc">reload</span><span class="code-fnc-prths">()</span>; <span class="code-comment">// Optional</span></code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$event<span class="code-fnc-prths">)</span>;</code>
'));
?>





