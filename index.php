<?php
/**
 * Created by JetBrains PhpStorm.
 * User: seanmcgary
 * Date: 3/21/11
 * Time: 10:17 AM
 * To change this template use File | Settings | File Templates.
 */
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

$library_path = 'lib';

//---------------------------------------------------------------------------//
// Set the basepath.
//
// PHP < 5.3 doesnt have __DIR__
//---------------------------------------------------------------------------//
if(phpversion() < 5.3)
{
    define('BASEPATH', dirname(__FILE__).'/');
}
else
{
    define('BASEPATH', __DIR__.'/');
}

require_once('core/bootstrap.php');

