# A live code example for Omise-PHP

<img width="1552" alt="Screen Shot 2562-06-23 at 23 12 30" src="https://user-images.githubusercontent.com/2154669/59978195-70567900-960c-11e9-85bd-09f459e78975.png">

> ⚠️ **Disclaimer**: I'm working with Omise. However, this repository is just one of my side projects and it's not an official example from Omise Payment Gateway. Please refer to https://www.omise.co/docs as an official document, or contact support@omise.co if you are interested in using Omise Payment Gateway.

## Requirements

* PHP v5.4 or above
* Built-in [libcurl](http://php.net/manual/en/book.curl.php) support
* [Composer](https://getcomposer.org/download/)
* [Omise-PHP](https://github.com/omise/omise-php) library

## Installation

1. Either clone or [download](https://github.com/guzzilar/omise-php-examples/archive/master.zip) this project to your local machine.
2. Extract files into your server.
3. Execute `composer install`.
4. Enter the url of your server (i.e. `127.0.0.1` in my case).

## Configuration

### • Config Omise public and secret keys

1. You will need to enter your Omise public key and secret key at `_config.php` file. Either at the line `8-9` if you are using Omise-PHP version 2.x and below, or at the line `16-17` for Omise-PHP version 3.x and above.
```php
 l8: // define('OMISE_PUBLIC_KEY', 'pkey'); // Config your Omise public key (Omise-PHP v2.x and below).
 l9: // define('OMISE_SECRET_KEY', 'skey'); // Config your Omise secret key (Omise-PHP v2.x and below).
...
l16: // \Omise\Omise::setPublicKey('pkey'); // Config your Omise public key (Omise-PHP v3.x and above).
l17: // \Omise\Omise::setSecretKey('skey'); // Config your Omise secret key (Omise-PHP v3.x and above).
```

### • Config a baseUrl

One last thing, you will need to set a correct path of your URL to this example

1. At `_config.php`, line `3`, just set your URL to this project there.
For example, if you installed this project at your route folder, then it should be `http:://localhost` (or `http:://127.0.0.1`).
```php
Url::setBaseUrl('http://127.0.0.1');
```

And now, you should be ready to go ;) 
