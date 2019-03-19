
<div class="container">

<div class="row mt-3">

    <div class="col-md-6">

        <div class="card">

            <div class="card-header">

                Form Edit Data Mahasiswa

            </div>

            <div class="card-body">


                <?php if( validation_errors() ) : ?>

                    <div class="alert alert-danger" role="alert">

                        <?= validation_errors(); ?>

                    </div>

                <?php endif; ?>


                <form action="" method="post">

                    <input type="hidden" name="id" id="id" 

                            value="<?= $mhs->id; ?>">                        

                    <div class="form-group">

                        <label for="nim">Nim</label>

                        <input type="text" name="nim" id="nim" 

   value="<?= $mhs->nim; ?>" class="form-control" placeholder="Masukkan nim">

                    </div>

                    <div class="form-group">

                        <label for="nama">Nama</label>

                        <input type="text" name="nama" id="nama"  

value="<?= $mhs->nama; ?>" class="form-control" placeholder="Masukkan nama">

                    </div>


                    <div class="form-group">

                        <label for="jurusan">Jurusan</label>

                        <select name="jurusan" id="jurusan" class="form-control" required="true">

                            <option value="<?= $mhs->jurusan; ?>"><?= $mhs->jurusan; ?></option>

                            <option value="Teknik Informatika">Teknik Informatika</option>

                            <option value="Teknik Elektro">Teknik Elektro</option>

                            <option value="Teknik Mesin">Teknik Mesin</option>

                            <option value="Teknik Industri">Teknik Industri</option>

                        </select>

                    </div>

                    <button type="submit" class="btn btn-primary float-right">Ubah Data</button>

                    <a href="<?= base_url(); ?>/mahasiswa" class="btn btn-primary float-right mr-2">Kembali</a>

                </form>

            </div>

        </div>

    </div>

</div>

</div>