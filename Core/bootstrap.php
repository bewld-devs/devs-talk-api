<?php

use DevsTalk\Core\Mantle\App;
use DevsTalk\Core\Database\Connection;
use DevsTalk\Core\Database\Migrations\UserMigration;
use DevsTalk\Core\Database\QueryBuilder;
use Illuminate\Database\Capsule\Manager as Capsule;

//production development
//90
define('ENV', 'development');

//require all files here
require 'helpers.php';

require_once __DIR__ . '/../vendor/autoload.php';

//configure config to always point to config.php
App::bind('config', require 'config.php');

session_start();


$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'sqlite',
    'database' => App::get('config')['sqlite']['path'],
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);



// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();





// $database = (is_dev()) ? App::get('config')['sqlite'] : App::get('config')['mysql'];

// /**
//  *Bind the Database credentials and connect to the app
//  *Bind the requred database file above to 
//  *an instance of the connections
//  */

// App::bind('database', new QueryBuilder(
//     Connection::make($database)
// ));
