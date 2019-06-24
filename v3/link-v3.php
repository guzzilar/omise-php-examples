<?php
// Implementation ---
$link = \Omise\Link::create([ 'amount' => 3000, 'currency' => 'thb', 'title' => 'Sony Alpha 7 III (' . time() . ')', 'description' => 'Special deal only for you' ]);

// Template ---
Template::renderColumn(array(
    'title'       => 'Create a new Link',
    'slug'        => 'create-link',
    'description' => '',
    'result'      => $link,
    'note'        => '',
    'code'        =>
'
<code>$link = <span class="code-class">\Omise\Link</span>::<span class="code-fnc">create</span><span class="code-fnc-prths">(</span>[</code>
<code>    <span class="code-string">\'amount\'</span>      => <span class="code-int">3000</span>,</code>
<code>    <span class="code-string">\'currency\'</span>    => <span class="code-string">\'thb\'</span>,</code>
<code>    <span class="code-string">\'title\'</span>       => <span class="code-string">\'Sony Alpha 7 III\'</span>,</code>
<code>    <span class="code-string">\'description\'</span> => <span class="code-string">\'Special deal only for you.\'</span></code>
<code>]<span class="code-fnc-prths">)</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$link<span class="code-fnc-prths">)</span>;</code>
'));
?>


<?php
// Implementation ---
$links = \Omise\Link::all([ 'limit' => 3, 'order' => 'reverse_chronological' ]);

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve a collection of Link objects, with query condition <small>(Total: ' . number_format(count($links)) . ' items)</small>',
    'slug'        => 'retrieve-link-collection',
    'description' => '',
    'result'      => $links,
    'note'        => '',
    'code'        =>
'
<code>$links = <span class="code-class">\Omise\Link</span>::<span class="code-fnc">all</span><span class="code-fnc-prths">(</span>[</code>
<code>    <span class="code-string">\'limit\'</span> => <span class="code-int">3</span>,</code>
<code>    <span class="code-string">\'order\'</span> => <span class="code-string">\'reverse_chronological\'</span></code>
<code>]<span class="code-fnc-prths">)</span>;</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$links<span class="code-fnc-prths">)</span>;</code>
'));
?>


<?php
// Implementation ---
$link = \Omise\Link::retrieve($links->first()['id']);
$link->reload();

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve a Link',
    'slug'        => 'retrieve-link',
    'description' => '',
    'result'      => $link,
    'note'        => 'We want to reload a resource only when there is a situation that we are not sure if the resource\'s attributes are up-to-date. In case of <code class="highlight">retrieve</code>, most of the time, we do not need to re-reload (as we just retrieved it).',
    'code'        =>
'
<code>$link = <span class="code-class">\Omise\Link</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">(</span><span class="code-string">\'link_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code>$link-><span class="code-fnc">reload</span><span class="code-fnc-prths">();</span> <span class="code-comment">// Optional</span></code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$link<span class="code-fnc-prths">)</span>;</code>
'));
?>


<?php
// Implementation ---
$search = \Omise\Link::search()->filter(['used' => false]);
$search['object'];

// Template ---
Template::renderColumn(array(
    'title'       => 'Search for Links that have not been used',
    'slug'        => 'search-link',
    'description' => '',
    'result'      => $search,
    'note'        => '',
    'code'        =>
'
<code>$search = <span class="code-class">\Omise\Link</span>::<span class="code-fnc">search</span><span class="code-fnc-prths">()</span>-><span class="code-fnc">filter</span><span class="code-fnc-prths">(</span>[ <span class="code-string">\'used\'</span> => <span class="code-bool">false</span> ]<span class="code-fnc-prths">)</span>;</code>
<code>$search[<span class="code-string">\'object\'</span>];</code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$search<span class="code-fnc-prths">)</span>;</code>
'));
?>
