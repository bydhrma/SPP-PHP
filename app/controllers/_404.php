<?php

class _404 extends Controller {
  public function index() 
  {
    $data['judul'] = '404 Not Found';
    $this->view('templates/header', $data);
    $this->view('404/index');
    $this->view('templates/footer');
  }
}