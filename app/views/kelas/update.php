<div class="container-fluid mt-4">
    <h1 class="h3 mb-4">Edit Data Kelas</h1>
    <div class="card shadow">
        <div class="card-header">
            <h6 class="text-warning">Edit Data Kelas</h6>
        </div>
        <div class="card-body">
            <form action="<?=BASEURL?>Kelas/update" method="post">
                <?php foreach( $data['upKelas'] as $upKelas) : ?>
                 <input type="hidden" value="<?=$upKelas['id']?>" name="id">   
                <div class="row col-md-10">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control mb-4" value="<?=$upKelas['nama']?>" name="nama">
                </div>

                <div class="row col-md-10">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control mb-4" value="<?=$upKelas['kompetensi_keahlian']?>" name="kompetensi_keahlian">
                </div>
            </div>
            
            <div class="card-footer d-flex justify-content-end">
                <a class="btn btn-secondary mr-2" href="<?=BASEURL?>Kelas" name="Cancel">Batal</a>    
                <button class="btn btn-warning mr-3" type="submit" name="updateKelas">Ubah Kelas</button>    
            </div>
            <?php endforeach; ?>
        </form>
    </div>
</div>