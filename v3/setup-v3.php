<?php
$account = \Omise\Account::retrieve();

// Template ---
Template::renderColumn(array(
    'title'       => 'Setup',
    'slug'        => 'setup',
    'description' => 'Before we start making our first HTTP request to Omise API, we would need to setup your Omise credentials to this library. And by that, we will need just only 2 lines.<br/>For public key: <code class="highlight">\Omise\Omise::setPublicKey(\'pkey_***\');</code><br/>For secret key: <code class="highlight">\Omise\Omise::setSecretKey(\'skey_***\');</code>',
    'result'      => $account,
    'note'        => 'Your Omise public key and secret key can be found at <a href="https://dashboard.omise.co">https://dashboard.omise.co</a>.<br/>Log in the Dashboard and look for a menu, "<strong>Keys</strong>", from the left-sidebar.',
    'code'        =>
'
<code><span class="code-phpkey">require_once</span> <span class="code-string">\'omise-php/lib/Omise.php\'</span>;</code>
<code><span class="code-class">\Omise\Omise</span>::<span class="code-fnc">setPublicKey</span><span class="code-fnc-prths">(</span><span class="code-string">\'pkey_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code><span class="code-class">\Omise\Omise</span>::<span class="code-fnc">setSecretKey</span><span class="code-fnc-prths">(</span><span class="code-string">\'skey_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code></code>
<code>$account = <span class="code-class">\Omise\Account</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$account<span class="code-fnc-prths">)</span>;</code>
'));
?>

<?php
\Omise\Omise::setApiVersion('2017-11-02');
$account = \Omise\Account::retrieve();
\Omise\Omise::setApiVersion('2019-05-29');

// Template ---
Template::renderColumn(array(
    'title'       => 'You can choose API Version <small>(optional)</small>',
    'slug'        => 'setup-api-version',
    'description' => 'If you take a close look at the output on the right panel, you will see that the response is quite different from the previous example (above). This simply happens because we set Omise API version in this example to version "<strong>2017-11-02</strong>".<br/><br/>This is to prevent us from a disaster of breaking API. Omise has provided a way to forever-forced their API to a specific version at your desire, to keep our system safe from any future breaking-changes that may happen until we really ready.',
    'result'      => $account,
    'note'        => 'At the moment, Omise has already provided 4 versions of API. "2019-05-29", "2017-11-02", "2015-11-17", and "2014-07-27".<br/><br/>Also note that Omise will not deprecate the legacy API versions.<br/>If there is any concerns about how much time you have to migrate to a new API version, you can be relieved as a fact that Omise API version 2014 is still available and accessible.',
    'code'        =>
'
<code><span class="code-phpkey">require_once</span> <span class="code-string">\'omise-php/lib/Omise.php\'</span>;</code>
<code><span class="code-class">\Omise\Omise</span>::<span class="code-fnc">setPublicKey</span><span class="code-fnc-prths">(</span><span class="code-string">\'pkey_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code><span class="code-class">\Omise\Omise</span>::<span class="code-fnc">setSecretKey</span><span class="code-fnc-prths">(</span><span class="code-string">\'skey_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code><span class="code-class">\Omise\Omise</span>::<span class="code-fnc">setApiVersion</span><span class="code-fnc-prths">(</span><span class="code-string">\'2017-11-02\'</span><span class="code-fnc-prths">)</span>;</code>
<code></code>
<code>$account = <span class="code-class">\Omise\Account</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$account<span class="code-fnc-prths">)</span>;</code>
'));
?>

<?php
$account = \Omise\Account::retrieve();

// Template ---
Template::renderColumn(array(
    'title'       => 'You can custom USER-AGENT <small>(optional)</small>',
    'slug'        => 'setup-user-agent',
    'description' => '',
    'result'      => $account,
    'note'        => '',
    'code'        =>
'
<code><span class="code-phpkey">require_once</span> <span class="code-string">\'omise-php/lib/Omise.php\'</span>;</code>
<code><span class="code-class">\Omise\Omise</span>::<span class="code-fnc">setPublicKey</span><span class="code-fnc-prths">(</span><span class="code-string">\'pkey_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code><span class="code-class">\Omise\Omise</span>::<span class="code-fnc">setSecretKey</span><span class="code-fnc-prths">(</span><span class="code-string">\'skey_***\'</span><span class="code-fnc-prths">)</span>;</code>
<code><span class="code-class">\Omise\Omise</span>::<span class="code-fnc">setUserAgent</span><span class="code-fnc-prths">(</span><span class="code-string">\'Guzzilar/OmisePHPExample/0.1\'</span><span class="code-fnc-prths">)</span>;</code>
<code></code>
<code>$account = <span class="code-class">\Omise\Account</span>::<span class="code-fnc">retrieve</span><span class="code-fnc-prths">()</span>;</code>
<code><span class="code-fnc">print_r<span class="code-fnc-prths">(</span></span>$account<span class="code-fnc-prths">)</span>;</code>
'));
?>