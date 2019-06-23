<?php
// Set base url.
Url::setBaseUrl('http://127.0.0.1');

/**
 * All available constants you can set for Omise-PHP version 2.x
 */
// define('OMISE_PUBLIC_KEY', 'pkey'); // Config your Omise public key (Omise-PHP v2.x and below).
// define('OMISE_SECRET_KEY', 'skey'); // Config your Omise secret key (Omise-PHP v2.x and below).
// define('OMISE_API_VERSION', '2019-05-29');
// define('OMISE_USER_AGENT_SUFFIX', 'Guzzilar/OmisePHPExample/0.1');

/**
 * All available constants you can set for Omise-PHP version 3.x
 */
// \Omise\Omise::setPublicKey('pkey'); // Config your Omise public key (Omise-PHP v3.x and above).
// \Omise\Omise::setSecretKey('skey'); // Config your Omise secret key (Omise-PHP v3.x and above).
\Omise\Omise::setApiVersion('2019-05-29');
\Omise\Omise::setUserAgent('Guzzilar/OmisePHPExample/0.1');
