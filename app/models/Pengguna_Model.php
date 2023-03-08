<?php

class Pengguna_model 
{
  private $table = 'pengguna';
  private $nama = 'Bayu';

  public function getUser() {
    return $this->nama;
  }
}