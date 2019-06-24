
<ul class="section-nav">
    <li><strong>Omise-PHP v3.x</strong></li>
    <li><a href="<?php echo Url::toHome(); ?>">index</a></li>

    <?php
    $submenu = null;
    foreach (Menu::getMenuV3() as $menu) :
        $active = isset($_GET) && $_GET['page'] == $menu['page'] ? true : false;
        if ($active && isset($menu['submenu'])) {
            $submenu = $menu['submenu'];
        }
        ?>
        <li class="<?= $active ? 'active' : ''; ?>"><a href="<?= Url::toPage($menu['page'], 3); ?>"><?= $menu['title']; ?></a></li>
    <?php endforeach; ?>
</ul>

<?php if ($submenu) : ?>
    <ul class="section-nav">
        <li><strong>available methods::</strong></li>
        <?php foreach ($submenu as $menu) : ?>
            <li><a href="#<?= $menu['slug']; ?>"><?= $menu['title']; ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>