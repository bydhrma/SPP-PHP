<?php

class Kelas_model {
  private $table = 'kelas';

  private $db;

  //menjalankan database
  public function __construct() 
  {
    $this->db = new Database;
  }

  //fungsi amnbil semua data kelaas
  public function getAllKelas() 
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  //fungsi insert sql data kelas
  public function insertDataKelas($data){
    $query = 'INSERT INTO kelas (id,nama,kompetensi_keahlian) VALUES (0,:nama, :kompetensi_keahlian)';
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('kompetensi_keahlian', $data['kompetensi_keahlian']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  //fungsi hapus data kelas
  public function hapusDataKelas($id) 
  {
    $query = 'DELETE FROM '.$this->table. ' WHERE id=:id';
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }

   public function updateFormKelas($id) {
    $this->db->query('SELECT * FROM kelas WHERE id=:id');
    $this->db->bind('id', $id);
    
    return $this->db->resultSet();  
   }

   public function updateDataKelas($data){
    $query = 'UPDATE '.$this->table.' SET nama = :nama, kompetensi_keahlian = :kompetensi_keahlian WHERE id=:id';
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('kompetensi_keahlian', $data['kompetensi_keahlian']);

    $this->db->execute();

    return $this->db->rowCount();
  }
}