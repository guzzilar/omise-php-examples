<?php
class Template
{
    public static function isPageExist($page)
    {
        $menu = array_merge(Menu::getMenuV2(), Menu::getMenuV3());
        return isset($menu[$page]);
    }

    public static function isVersionExist($version)
    {
        return in_array($version, array(2, 3));
    }

    public static function renderHeader()
    {
        require_once TEMPLATE_PATH . '/_header.php';
    }

    public static function renderPage($page, $version = 3)
    {
        ?>
        <!DOCTYPE html>
        <html>
            <?php static::renderHeader(); ?>
            <body>
                <?php
                if ($version == 3): 
                    Menu::renderNavV3();
                else:
                    Menu::renderNavV2();
                endif;
                ?>
                <div class="page">
                    <?php require BASE_PATH . '/v' . $version . '/' . $page . '.php'; ?>
                </div>
            </body>
        </html>
        <?php
    }

    public static function renderColumn($content)
    {
        ?>
        <div id="<?= $content['slug']; ?>" class="row example">
            <div class="col col-6 content-section">
                <div class="col-body">
                    <div class="content">
                        <h3><?= $content['title']; ?></h3>
                        <h4>Implementation code:</h4>
                        <pre class="code"><?= $content['code']; ?></pre>

                        <?php if ($content['description']): ?>
                            <p><?= $content['description']; ?></p>
                        <?php endif; ?>

                        <?php if ($content['note']): ?>
                            <span class="note"><?= $content['note']; ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col col-6 result-section">
                <div class="col-body">
                    <div class="content">
                        <h4>Result: <small><?= strtolower($content['title']); ?></small></h4>
                        <?php display_result($content['result']); ?>
                    </div>
                </div>
            </div>
        </div>

        <?
    }
}