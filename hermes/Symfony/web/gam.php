<?php

require_once __DIR__.'/../gam/bootstrap.php.cache';
require_once __DIR__.'/../gam/AppKernel.php';
//require_once __DIR__.'/../app/bootstrap_cache.php.cache';
//require_once __DIR__.'/../app/AppCache.php';

use Symfony\Component\HttpFoundation\Request;

//$kernel = new AppCache(new AppKernel('prod', false));
$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
$kernel->handle(Request::createFromGlobals())->send();
