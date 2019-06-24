<?php
// Implementation ---
$forex = \Omise\Forex::retrieve('jpy');
$forex->reload();

// Template ---
Template::renderColumn(array(
    'title'       => 'Retrieve a Forex',
    'slug'        => 'retrieve-forex',
    'description' => '',
    'result'      => $forex,
    'note'        => 'We want to reload a resource only when there is a situation that we are not sure if the resource\'s attributes are up-to-date. In case of <code class="highlight">retrieve</code>, most of the time, we do not need to re-reload (as we just retrieved it).',
    'code'        =>
'
<code>$forex = <span class="code-class">\Omise\Forex</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">(</span><span class="code-string">\'jpy\'</span><span class="code-fnc-prths">)</span>;</code>
<code>$forex-><span class="code-fnc">reload</span><span class="code-fnc-prths">()</span>; <span class="code-comment">// Optional</span></code>
<code></code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$forex<span class="code-fnc-prths">)</span>;</code>
'));
?>