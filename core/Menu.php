<?php
class Menu
{
    /**
     * @return array
     */
    public static function getMenuV2()
    {
        return [
            'account'      => [ 'title' => 'Account',     'page' => 'account' ],
            'balance'      => [ 'title' => 'Balance',      'page' => 'balance' ],
            'capabilities' => [ 'title' => 'Capabilities', 'page' => 'capabilities' ],
            'card'         => [ 'title' => 'Card',         'page' => 'card' ],
            'charge'       => [ 'title' => 'Charge',       'page' => 'charge' ],
            'customer'     => [ 'title' => 'Customer',     'page' => 'customer' ],
            'dispute'      => [ 'title' => 'Dispute',      'page' => 'dispute' ],
            'event'        => [ 'title' => 'Event',        'page' => 'event' ],
            'forex'        => [ 'title' => 'Forex',        'page' => 'forex' ],
            'link'         => [ 'title' => 'Link',         'page' => 'link' ],
            'recipient'    => [ 'title' => 'Recipient',    'page' => 'recipient' ],
            'schedule'     => [ 'title' => 'Schedule',     'page' => 'schedule' ],
            'source'       => [ 'title' => 'Source',       'page' => 'source' ],
            'transaction'  => [ 'title' => 'Transaction',  'page' => 'transaction' ],
            'transfer'     => [ 'title' => 'Transfer',     'page' => 'transfer' ],
        ];
    }

    /**
     * @return array
     */
    public static function getMenuV3()
    {
        return [
            'account-v3' => [ 
                'title'   => 'Account',
                'page'    => 'account-v3',
                'submenu' => [
                    [ 'title' => 'retrieve()', 'slug' => 'retrieve-account' ],
                    [ 'title' => 'reload()',   'slug' => 'reload-account' ],
                ]
            ],
            'balance-v3' => [
                'title' => 'Balance',
                'page' => 'balance-v3',
                'submenu' => [
                    [ 'title' => 'retrieve()', 'slug' => 'retrieve-balance' ],
                    [ 'title' => 'reload()',   'slug' => 'reload-balance' ],
                ]
            ],
            // 'capabilities-v3' => [ 'title' => 'Capabilities', 'page' => 'capabilities-v3' ],
            // 'charge-v3'       => [ 'title' => 'Charge',       'page' => 'charge-v3' ],
            // 'customer-v3'     => [ 'title' => 'Customer',     'page' => 'customer-v3' ],
            // 'event-v3'        => [ 'title' => 'Event',        'page' => 'event-v3' ],
        ];
    }

    public static function renderNavV2()
    {
        require_once TEMPLATE_PATH . '/_nav-v2.php';
    }

    public static function renderNavV3()
    {
        require_once TEMPLATE_PATH . '/_nav-v3.php';
    }
}