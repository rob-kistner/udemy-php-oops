<?php

// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'traversymvc');


// app root

/**
 * parent folder of current file
 *     echo dirname(__FILE__);
 *
 * parent of parent folder of current file
 * which will be the app root
 */
define( 'APPROOT',  dirname(dirname(__FILE__)) );

// URL root
define( 'URLROOT', 'http://traversy.mvc' );

// Site Name
define( 'SITENAME', 'Traversy MVC' );