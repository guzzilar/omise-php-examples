<?php
class Template
{
    /**
     * @return array
     */
    public static function getMenu()
    {
        return [
            'account'     => [ 'title' => 'Acccount',    'url' => Url::toPage('account') ],
            'balance'     => [ 'title' => 'Balance',     'url' => Url::toPage('balance') ],
            'card'        => [ 'title' => 'Card',        'url' => Url::toPage('card') ],
            'charge'      => [ 'title' => 'Charge',      'url' => Url::toPage('charge') ],
            'customer'    => [ 'title' => 'Customer',    'url' => Url::toPage('customer') ],
            // 'dispute'     => [ 'title' => 'Dispute',     'url' => Url::toPage('dispute') ],
            // 'event'       => [ 'title' => 'Event',       'url' => Url::toPage('event') ],
            // 'forex'       => [ 'title' => 'Forex',       'url' => Url::toPage('forex') ],
            // 'link'        => [ 'title' => 'Link',        'url' => Url::toPage('link') ],
            // 'recipient'   => [ 'title' => 'Recipient',   'url' => Url::toPage('recipient') ],
            // 'schedule'    => [ 'title' => 'Schedule',    'url' => Url::toPage('schedule') ],
            // 'source'      => [ 'title' => 'Source',      'url' => Url::toPage('source') ],
            // 'transaction' => [ 'title' => 'Transaction', 'url' => Url::toPage('transaction') ],
            // 'transfer'    => [ 'title' => 'Transfer',    'url' => Url::toPage('transfer') ],
        ];
    }

    public static function isPageExist($page)
    {
        $menu = static::getMenu();
        return isset($menu[$page]);
    }

    public static function renderHeader()
    {
        require_once TEMPLATE_PATH . '/_header.php';
    }

    public static function renderNav()
    {
        require_once TEMPLATE_PATH . '/_nav.php';
    }

    public static function renderPage($page)
    {
        ?>
        <!DOCTYPE html>
        <html>
            <?php static::renderHeader(); ?>
            <body>
                <?php static::renderNav(); ?>
                <?php require BASE_PATH . '/' . $page . '.php'; ?>
            </body>
        </html>
        <?php
    }
}