<ul class="section-nav">
    <li>For Omise-PHP v2.x /</li>
    <li><a href="<?php echo Url::toHome(); ?>">index</a></li>

    <?php foreach (Template::getMenu() as $menu) : ?>
    	<?php $activeClass = isset($_GET) && $_GET['page'] == $menu['page'] ? 'active' : ''; ?>
        <li class="<?= $activeClass; ?>"><a href="<?= Url::toPage($menu['page']); ?>"><?= $menu['title']; ?></a></li>
    <?php endforeach; ?>
</ul>

<ul class="section-nav">
    <li>For Omise-PHP v3.x /</li>

    <?php foreach (Template::getMenuV3() as $menu) : ?>
        <?php $activeClass = isset($_GET) && $_GET['page'] == $menu['page'] ? 'active' : ''; ?>
        <li class="<?= $activeClass; ?>"><a href="<?= Url::toPage($menu['page']); ?>"><?= $menu['title']; ?></a></li>
    <?php endforeach; ?>
</ul>
