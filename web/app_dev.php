<?php
umask(0002);
// this check prevents access to debug front controllers that are deployed by accident to production servers.
// feel free to remove this, extend it, or make something more sophisticated.
if (!in_array(@$_SERVER['REMOTE_ADDR'], array(
    '127.0.0.1',
    '::1',
))) {
    header('HTTP/1.0 403 Forbidden');
    die('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}


require_once __DIR__.'/../app/bootstrap.php.cache';
require_once __DIR__.'/../app/AppKernel.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$kernel->handle(Request::createFromGlobals())->send();


/*//require_once __DIR__.'/../app/bootstrap.php.cache';
require_once __DIR__.'/../vendor/symfony/src/Symfony/Component/ClassLoader/UniversalClassLoader.php';
require_once __DIR__.'/../app/autoload.php';
require_once __DIR__.'/../app/AppKernel.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new AppKernel('dev', true);
//$kernel->loadClassCache();
$kernel->handle(Request::createFromGlobals())->send();
$kernel->loadClassCache('classes', '.php.cache');*/