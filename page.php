<?php
require_once '_bootstrap.php';

$page    = $_GET['page'] ?: null;
$version = $_GET['version'] ?: 3;
if (! Template::isPageExist($page)) {
    // TODO: Display 404.
    echo '404 Page Not Found';
    return;
}

if (! Template::isVersionExist($version)) {
    // TODO: Display 404.
    echo '404 Document for version ' . $version . ' Not Found';
    return;
}

Template::renderPage($page, $version);
?>
