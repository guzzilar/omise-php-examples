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
            'charge-v3' => [
                'title' => 'Charge',
                'page'  => 'charge-v3',
                'submenu' => [
                    [ 'title' => 'all()',       'slug' => 'retrieve-charge-collection' ],
                    [ 'title' => 'retrieve()',  'slug' => 'retrieve-charge' ],
                    [ 'title' => 'reload()',    'slug' => 'reload-charge' ],
                    [ 'title' => 'create()',    'slug' => 'create-charge' ],
                    [ 'title' => 'update()',    'slug' => 'update-charge' ],
                    [ 'title' => 'capture()',   'slug' => 'capture-charge' ],
                    [ 'title' => 'refund()',    'slug' => 'refund-charge' ],
                    [ 'title' => 'reverse()',   'slug' => 'reverse-charge' ],
                    [ 'title' => 'schedule()',  'slug' => 'schedule-charge' ],
                    [ 'title' => 'refunds()',   'slug' => 'retrieve-refund-collection' ],
                    [ 'title' => 'schedules()', 'slug' => 'retrieve-schedule-collection' ],
                    [ 'title' => 'search()',    'slug' => 'search-charge' ],
                ]
            ],
            // 'customer-v3'     => [ 'title' => 'Customer',     'page' => 'customer-v3' ],
            'dispute-v3' => [
                'title' => 'Dispute',
                'page'  => 'dispute-v3',
                'submenu' => [
                    [ 'title' => 'all()',      'slug' => 'retrieve-dispute-collection' ],
                    [ 'title' => 'search()',   'slug' => 'search-dispute' ],
                    [ 'title' => 'retrieve()', 'slug' => 'retrieve-dispute' ],
                    [ 'title' => 'reload()',   'slug' => 'retrieve-dispute' ],
                    [ 'title' => 'update()',   'slug' => 'update-dispute' ],
                ]
            ],
            'event-v3' => [
                'title' => 'Event',
                'page'  => 'event-v3',
                'submenu' => [
                    [ 'title' => 'all()',      'slug' => 'retrieve-event-collection' ],
                    [ 'title' => 'retrieve()', 'slug' => 'retrieve-event' ],
                    [ 'title' => 'reload()',   'slug' => 'retrieve-event' ],
                ]
            ],
            'forex-v3' => [
                'title' => 'Forex',
                'page'  => 'forex-v3',
                'submenu' => [
                    [ 'title' => 'retrieve()', 'slug' => 'retrieve-forex' ],
                    [ 'title' => 'reload()',   'slug' => 'retrieve-forex' ],
                ]
            ],
            'link-v3' => [
                'title' => 'Link',
                'page'  => 'link-v3',
                'submenu' => [
                    [ 'title' => 'create()',   'slug' => 'create-link' ],
                    [ 'title' => 'all()',      'slug' => 'retrieve-link-collection' ],
                    [ 'title' => 'retrieve()', 'slug' => 'retrieve-link' ],
                    [ 'title' => 'reload()',   'slug' => 'retrieve-link' ],
                    [ 'title' => 'search()',   'slug' => 'search-link' ],
                ]
            ],
            'source-v3' => [
                'title' => 'Source',
                'page'  => 'source-v3',
                'submenu' => [
                    [ 'title' => 'create()',   'slug' => 'create-source' ],
                ]
            ],
            'token-v3' => [
                'title' => 'Token',
                'page'  => 'token-v3',
                'submenu' => [
                    [ 'title' => 'create()',   'slug' => 'create-token' ],
                    [ 'title' => 'retrieve()', 'slug' => 'retrieve-token' ],
                ]
            ],
            'transaction-v3' => [
                'title' => 'Transaction',
                'page'  => 'transaction-v3',
                'submenu' => [
                    [ 'title' => 'all()',      'slug' => 'retrieve-transaction-collection' ],
                    [ 'title' => 'retrieve()', 'slug' => 'retrieve-transaction' ],
                    [ 'title' => 'reload()',   'slug' => 'retrieve-transaction' ],
                ]
            ],
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