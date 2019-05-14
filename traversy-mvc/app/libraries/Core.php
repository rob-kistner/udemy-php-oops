<?php

/**
 * App core class
 * 
 * Creates URL & loads core controller
 * @URLFORMAT - /controller/method/params
 */

class Core
{
  // change as URL changes
  protected $currentController = 'Pages';
  protected $currentMethod = 'index';
  
  protected $params = [];
  
  public function __construct()
  {
    // print_r($this->getUrl());
    $url = $this->getUrl();

    // look in controllers for first value
    if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php' )) {
      // if exists, set as the current controller
      $this->currentController = ucwords($url[0]);
      // unset 0 index
      unset($url[0]);
    }

    // require the controller
    require_once '../app/controllers/' . $this->currentController . '.php';
    // instantiate the controller
    $this->currentController = new $this->currentController;

    // check for second part of url
    if( isset($url[1]) ) {
      // check to see if method exists in controller
      if ( method_exists($this->currentController, $url[1]) ) {
        $this->currentMethod = $url[1];
        // unset 1 index
        unset($url[1]);
      }
    }

    // get params or empty
    $this->params = $url ? array_values($url) : [];

    // call CB with array of params
    call_user_func_array( [$this->currentController, $this->currentMethod], $this->params );
  }
  
  public function getUrl()
  {
    // pull out url
    if( isset( $_GET['url'] ) ) {
        // remove ending slash
      $url = rtrim( $_GET['url'], '/' );
        // sanitize as a url
      $url = filter_var( $url, FILTER_SANITIZE_URL );
        // break url up into parts and place in array
      $url = explode( '/', $url );
      
      return $url;
    }
  }
}