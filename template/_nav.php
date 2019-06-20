<ul class="section-nav">
    <li><a href="<?php echo Url::toHome(); ?>">index</a></li>

    <?php foreach (Template::getMenu() as $menu) : ?>
        <li><a href="<?= $menu['url']; ?>"><?= $menu['title']; ?></a></li>
    <?php endforeach; ?>
</ul>
