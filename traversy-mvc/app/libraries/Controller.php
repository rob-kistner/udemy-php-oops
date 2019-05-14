<?php

/**
 * Base Controller
 * 
 * Loads models and views
 */

class Controller
{
  // load model
  public function model($model)
  {
    // require model file
    require_once '../app/models/' . $model . '.php';

    // instantiate the model
    return new $model();
  }

  // load view
  public function view( $view, $data=[] )
  {
    // check for view file
    $page = '../app/views/' . $view . '.view.php';
    if(file_exists($page)) {
      require_once $page;
    } else {
      // 404 error, load the 404 page
      require_once '../app/views/errors/404.view.php';
    }
  }
}