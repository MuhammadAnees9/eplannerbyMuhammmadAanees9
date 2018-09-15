<?php 
session_name('wcx');
session_start();
session_regenerate_id(true);
define( 'DB_HOST', 'localhost' ); // set database host
define( 'DB_USER', 'root' ); // set database user
define( 'DB_PASS', '' ); // set database password
define( 'DB_NAME', 'eventdb' ); // set database name

spl_autoload_register(function ($class) {
    //require_once 'classes/class.'. $class .'.php';
});

//$backend = new backend();