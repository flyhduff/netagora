<?php

require_once __DIR__.'/../beta/bootstrap.php.cache';
require_once __DIR__.'/../beta/AppKernel.php';
//require_once __DIR__.'/../beta/AppCache.php';

use Symfony\Component\HttpFoundation\Request;

date_default_timezone_set("Europe/Paris");

$kernel = new AppKernel('prod', true);
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);
$kernel->handle(Request::createFromGlobals())->send();
