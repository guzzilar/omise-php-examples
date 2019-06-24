<ul class="section-nav">
    <li><strong>Omise-PHP v2.x</strong></li>
    <li><a href="<?php echo Url::toHome(); ?>">index</a></li>

    <?php foreach (Menu::getMenuV2() as $menu) : ?>
        <?php $activeClass = isset($_GET) && $_GET['page'] == $menu['page'] ? 'active' : ''; ?>
        <li class="<?= $activeClass; ?>"><a href="<?= Url::toPage($menu['page'], 2); ?>"><?= $menu['title']; ?></a></li>
    <?php endforeach; ?>
</ul>