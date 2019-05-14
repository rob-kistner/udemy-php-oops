<?php

class User
{
  public $name;
  public $age;
  public static $minPassLength = 6;

  public static function validatePass( $pass )
  {
    // static doesn't recognize $this-> directive
    if( strlen($pass) >= self::$minPassLength ) {
      return true;
    } else {
      return false;
    }
  }
}

// don't have to instantiate a User
// to use the static method
//
$pw = 'hello';
if(User::validatePass($pw)) {
  echo 'Password is valid';
} else {
  echo 'Password invalid';
}
