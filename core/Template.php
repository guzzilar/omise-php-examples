<?php
class Template
{
    /**
     * @return array
     */
    public static function getMenu()
    {
        return [
            'account'      => [ 'title' => 'Acccount',     'page' => 'account' ],
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
            'account-v3'      => [ 'title' => 'Account',      'page' => 'account-v3' ],
            'balance-v3'      => [ 'title' => 'Balance',      'page' => 'balance-v3' ],
            'capabilities-v3' => [ 'title' => 'Capabilities', 'page' => 'capabilities-v3' ],
            'charge-v3'       => [ 'title' => 'Charge',       'page' => 'charge-v3' ],
            'customer-v3'     => [ 'title' => 'Customer',     'page' => 'customer-v3' ],
            'event-v3'        => [ 'title' => 'Event',        'page' => 'event-v3' ],
        ];
    }

    public static function isPageExist($page)
    {
        $menu = array_merge(static::getMenu(), static::getMenuV3());
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

    public static function renderColumn($title, $result, $code, $note = '')
    {
        ?>
        <div class="col col-6">
            <div class="col-body">
                <div class="content">
                    <h3><?php echo $title; ?></h3>
                    <h4>Implementation code:</h4>
                    <pre class="code"><?php echo $code; ?></pre>
                    <div class="result-section">
                        <h4>Result:</h4>
                        <?php display_result($result); ?>
                    </div>
                    <?php if ($note): ?>
                        <span class="note"><?php echo $note; ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?
    }
}