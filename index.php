<?php
include_once '_config.php';
include_once '_header.php';
?>

<body>
    <?php include_once '_nav.php'; ?>

    <style type="text/css">
        .featured-table td { height: 24px; }
        .featured-table td.value { padding-left: 1rem; }
    </style>

    <div class="row">
        <div class="col col-12">
            <div class="col-body content">
                <h4>System support</h4>
                <table class='featured-table'>
                    <tr>
                        <td class="key">PHP Version</td>
                        <td class="value">: <?= phpversion(); ?></td>
                    </tr>

                    <tr>
                        <td class="key">Omise-PHP Version</td>
                        <td class="value">: <?= class_exists('\Omise\ApiRequestor') ? \Omise\ApiRequestor::OMISE_PHP_LIB_VERSION : '<span class="color-red">unknown</span> (Class <code>\Omise\ApiRequestor</code> does not exist)'; ?></td>
                    </tr>

                    <tr>
                        <td class="key">cURL enabled</td>
                        <td class="value">: <?= function_exists('curl_version') ? 'yes' : '<span class="color-red">no</span>'; ?></td>
                    </tr>

                    <tr>
                        <td class="key">OMISE_PUBLIC_KEY defined</td>
                        <td class="value">: <?= defined('OMISE_PUBLIC_KEY') ? 'yes: ' . OMISE_PUBLIC_KEY : '<span class="color-red">no</span> (see, <code>_config.php</code>)'; ?></td>
                    </tr>

                    <tr>
                        <td class="key">OMISE_SECRET_KEY defined</td>
                        <td class="value">: <?= defined('OMISE_SECRET_KEY') ? 'yes' : '<span class="color-red">no</span> (see, <code>_config.php</code>)'; ?></td>
                    </tr>

                    <tr>
                        <td class="key">OMISE_API_VERSION defined</td>
                        <td class="value">: <?= defined('OMISE_API_VERSION') ? 'yes: ' . OMISE_API_VERSION : '<span class="color-red">no</span> (see, <code>_config.php</code>)'; ?></td>
                    </tr>

                    <tr>
                        <td class="key">OMISE_USER_AGENT_SUFFIX defined</td>
                        <td class="value">: <?= defined('OMISE_USER_AGENT_SUFFIX') ? 'yes: ' . OMISE_USER_AGENT_SUFFIX : '<span class="color-red">no</span> (see, <code>_config.php</code>)'; ?></td>
                    </tr>

                    <tr>
                        <td class="key">Omise Account connected</td>
                        <td class="value">: 
                            <?php
                            if (defined('OMISE_PUBLIC_KEY') && defined('OMISE_SECRET_KEY')) {
                                try {
                                    $account = OmiseAccount::retrieve();
                                    echo $account['email'];      
                                } catch (Exception $e) {
                                    echo '<span class="color-red">' . $e->getMessage() . '</span> <em>(make sure the public key and secret key are correct)</em>';
                                }
                            } else {
                                echo '<span class="color-red">no</span>  (see, <code>_config.php</code>)';
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>