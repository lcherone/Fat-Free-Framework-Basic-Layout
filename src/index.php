<?php
// set timezone
date_default_timezone_set('UTC');

//
chdir('../');

// composers autoloader
require_once('vendor/autoload.php');

// init fatfree instance
$f3 = \Base::instance();

// load config
$f3->config('src/config.ini');
$f3->config('src/routes.ini');

// enable cors
$f3->copy('HEADERS.Origin', 'CORS.origin');
$f3->set('CORS.headers', 'authorization, origin, x-requested-with, x-request-token, content-type');
$f3->set('CORS.credentials', true);
$f3->set('CORS.expose', true);
$f3->set('CORS.ttl', 300);

// add hive
$f3->set('f3', $f3);

// load libs
$f3->set('session',  \Lib\Session::instance($f3));
$f3->set('cache',    \Cache::instance());
$f3->set('response', \Lib\Response::instance($f3));
//$f3->set('helper',   \Lib\Helper::instance($f3));
//$f3->set('flashbag', \Lib\Flashbag::instance($f3));

// run app
$f3->run();
