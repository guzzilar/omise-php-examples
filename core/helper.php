<?php
function display_result($result)
{
    echo '<pre>';
    print_r($result);
    echo '</pre>';
}

function create_charge()
{
    $token = OmiseToken::create([
        'card' => [
            'name'             => 'Nuttanon Tester',
            'number'           => '4242424242424242',
            'expiration_month' => 10,
            'expiration_year'  => 2029,
            'city'             => 'Bangkok',
            'postal_code'      => '10320',
            'security_code'    => 123
        ]
    ]);

    $charge = OmiseCharge::create([
        'card'     => $token['id'],
        'amount'   => 100000,
        'capture'  => true,
        'currency' => 'THB'
    ]);
}

function create_card_token()
{
    $token = OmiseToken::create([
        'card' => [
            'name'             => 'Nuttanon Tester',
            'number'           => '4242424242424242',
            'expiration_month' => 10,
            'expiration_year'  => 2029,
            'city'             => 'Bangkok',
            'postal_code'      => '10320',
            'security_code'    => 123
        ]
    ]);

    return $token;
}
