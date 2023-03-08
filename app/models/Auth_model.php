<?php

class Auth_model {
  private $db;

  private $table = 'pengguna';

  public function __construct() {
    $this->db = new Database;
  }

  public function getUser($username, $password, $role) {
    $this->db->query('SELECT * FROM '.$this->table.' WHERE username =:username, password =:password');
    $this->db->bind('username', $username);
    $this->db->bind('password', $password);
    
    return $this->db->resultSet();
  }

}