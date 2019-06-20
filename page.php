<?php
require_once '_bootstrap.php';

$page = $_GET['page'] ?: null;
if (! Template::isPageExist($page)) {
	// TODO: Display 404.
	echo '404 Page Not Found';
	return;
}

Template::renderPage($page);
?>
