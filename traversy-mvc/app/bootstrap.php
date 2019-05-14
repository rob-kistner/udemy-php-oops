<?php

// Config
require_once 'config/config.php';

// Libraries
// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';

// autoload core libraries
spl_autoload_register( function( $className ) {
  // filename needs to match the class name
  require_once 'libraries/' . $className . '.php';
});