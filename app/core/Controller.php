<?php 

class Controller {
  public function view($view, $data = []) 
  {
    if(session_status() == PHP_SESSION_NONE) {
      session_start();
      if(!isset($session['nama'])) {
        require_once '../app/views/auth/index.php';
      } else {

        require_once '../app/views/'.$view.'.php';
      }
    }
  } 

  public function model($model, $data = []) 
  {
      require_once '../app/models/'.$model.'.php';
      return new $model;
  }

}