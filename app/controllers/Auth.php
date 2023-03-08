<?php

class Auth extends Controller {
  public function index() {
    $data['judul'] = 'Login';

    $this->view('auth/index',$data);
  }

  public function login() {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $data['login'] = $this->model('Auth_model')->getUser($username, $password);
  }
}