<?php
define("BASEPATH", dirname(__DIR__));
use GestionNotePooV2\Core\Router;

require_once(BASEPATH."/vendor/autoload.php");

$route = new Router();
$route->redirection();