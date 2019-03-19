

<div class="container">


<div class="row mt-3">


    <div class="col-md-6">


        <div class="card">


            <div class="card-header">


                Detail Data Mahasiswa


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

            value="<?= $mhs->nim; ?>" class="form-control" readonly="true">


                    </div>


                    <div class="form-group">


                        <label for="nama">Nama</label>


                        <input type="text" name="nama" id="nama"  

           value="<?= $mhs->nama; ?>" class="form-control" readonly="true">


                    </div>


                    <div class="form-group">


                        <label for="jurusan">Jurusan</label>


                        <input type="text" name="jurusan" id="jurusan" value="<?= $mhs->jurusan; ?>" class="form-control" readonly="true">


                    </div>


                    <a href="<?= base_url(); ?>/mahasiswa" class="btn btn-primary float-right mr-2">Kembali</a>


                </form>


            </div>


        </div>


    </div>


</div>


</div>

