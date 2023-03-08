<?php

class Kelas extends Controller {
  //method default
  public function index() {
    $data['judul'] = 'Data Kelas';
    $data['kelas'] = $this->model('Kelas_model')->getAllKelas();

    $this->view('templates/header',$data);
    $this->view('kelas/index', $data);
    $this->view('templates/footer');
  }
  

  //fungsi insert data kelas
  public function insert() {
    if($this->model('Kelas_model')->insertDataKelas($_POST) > 0 ) {
      Flasher::setFlash('Data Kelas Berhasil', 'Ditambahkan', 'success');
      header('Location: ' . BASEURL . 'Kelas');
      exit;
    } else {
      Flasher::setFlash('Data Kelas Gagal', 'Ditambahkan', 'danger');
      header('Location: ' . BASEURL . 'Kelas');
      exit;
    }
  }

  //form update data kelas
  public function updateForm($id) {
    $data['judul'] = 'Edit Data Kelas';
    $data['upKelas'] = $this->model('Kelas_model')->updateFormKelas($id);

    $this->view('templates/header', $data);
    $this->view('kelas/update', $data);
    $this->view('templates/footer');
  }

  //fungsi update data kelas
  public function update() {  
    if($this->model('Kelas_model')->updateDataKelas($_POST)) {
      Flasher:: setFlash('Data Kelas Berhasil', 'Diubah', 'success');
      header('Location: ' .BASEURL. 'Kelas');
      exit;
    } else {
      Flasher::setFlash('Data Kelas Gagal', 'Diubah', 'danger');
      header('Location: '. BASEURL . 'Kelas');
      exit;
    }
  }

  //fungsi hapus data
  public function hapus($id) {
    if($this->model('Kelas_model')->hapusDataKelas($id) > 0 ) {
      Flasher::setFlash('Data Kelas Berhasil', 'Dihapus', 'success');
      header('Location: ' . BASEURL . 'Kelas');
      exit;
    } else {
      Flasher::setFlash('Data Kelas Gagal', 'Dihapus', 'danger');
      header('Location: ' . BASEURL . 'Kelas');
      exit;
    }
  }

}