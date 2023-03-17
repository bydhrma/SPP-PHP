        <div class="container mt-4">
            <h1 class="h3 mb-4">Data Kelas</h1>

                <!-- Input Kelas -->
                <form class=""action="<?=BASEURL?>kelas/insert" method="post">
                    <div class="card shadow">
                        <div class="card-header d-flex justify-content-between">
                            <div class="d-inline mt-2">
                                <h6 class="font-weight-bold text-primary">Tambah Kelas</h6>
                            </div>
                            <div class="d-inline">
                                <button class="btn btn-outline-primary" type="submit" name="tambahKelas">Tambah Kelas</button>
                            </div>
                        </div>

                    <div class="card-body">
                        <!-- add class form-->
                            <div class="row col-md-10">
                                <label for="kelas">Kelas</label>
                                <input type="text" class="form-control mb-4" placeholder="Nama Kelas" name="nama">
                            </div>

                            <div class="row col-md-10">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control mb-4" placeholder="Kompetensi Keahlian" name="kompetensi_keahlian">
                            </div>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3"></div>
                    </div>
                        </form>
                    <!-- end form kelas -->
                </div>

                <!-- Flasher Alert -->
                <div class="mt-4 mb-4">
                    <div>
                        <?php Flasher::flash(); ?>
                    </div>
                </div>

                <!-- Tabel Kelas -->
                <div class="card shadow-sm mb-4 mt-4" >
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Siswa</h6>
                        </div>
                        <div class="card-body" width="100%">
                            <div class="table">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kelas</th>
                                            <th>Kompetensi Keahlian</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;
                                        foreach( $data['kelas'] as $kelas) :  $no++ ?>
                                        <tr>
                                            <td><?=$no;?></td>
                                            <td><?=$kelas['nama']?></td>
                                            <td><?=$kelas['kompetensi_keahlian']?></td>
                                            <td width="13%">
                                                <div class="d-flex justify-content-center">
                                                    
                                                    <a class="btn btn-warning mr-2" href="<?=BASEURL;?>kelas/updateForm/<?=$kelas['id']?>">
                                                        <i class="fas fa-pen"></i>
                                                    </a>


                                                    <a class="btn  btn-danger ml-1"  data-toggle="modal" data-target="#deleteModal<?= $kelas['id']?>">
                                                        <i class="fas fa-trash"></i>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>



                                         <!-- Modal Delete -->
                                            <div class="modal fade" id="deleteModal<?= $kelas['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title text-danger" id="exampleModalCenterTitle"><strong>Hapus Kelas</strong></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Apakah anda yakin menghapus kelas ini?</h6>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <a type="button" href="<?=BASEURL?>kelas/hapus/<?= $kelas['id']; ?>" class="btn btn-danger">Hapus Kelas</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>     
                </div>
                    
                   

                    
                    
                </div>