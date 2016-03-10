<?php
require_once '../application/functions/essentials.php';
require_once '../application/functions/application.php';
require_once '../application/functions/crypt.php';
$theme = 'bootstrap';

ob_start();
	require_once '../application/pages/home.html';
$page = ob_get_clean();

echo $page;