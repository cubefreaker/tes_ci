
<div class="container">

<?php if( $this->session->flashdata('msg') ) : ?>

  <div class="row mt-3">

    <div class="col-md-6">

      <div class="alert alert-success alert-dismissible fade show"  

        role="alert">

        Data <strong>berhasil</strong> <?= $this->session->flashdata('msg'); ?>

        <button type="button" class="close" data-dismiss="alert"  

         aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

    </div>

  </div>

<?php endif; ?>


<div class="row">

    <div class="col-md-12">

      <a href="<?= base_url(); ?>mahasiswa/tambah"  

           class="btn btn-primary"> Tambah Mahasiswa</a>

      <h1>Data Mahasiswa</h1>

      <table class="table table-stripped">

        <thead>

          <tr>

            <th scope="col">Nama</th>

            <th scope="col" width="200px">Action</th>

          </tr>

        </thead>

        <tbody>

          <?php foreach ($mhs as $mhs) :?>

            <tr>

              <td><?= $mhs['nama'];?></td>

              <td>

                <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>"  

               class="badge badge-primary badge-pill">Detail</a>

                <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id']; ?>"  

               class="badge badge-primary badge-pill tampilModalUbah">Edit</a>

                <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" 

                          class="badge badge-danger badge-pill"  

                          onclick="return confirm('Hapus data?');">Hapus</a>

              </td>

            </tr>

          <?php endforeach; ?>

        </tbody>

      </table>    

    </div>

</div>

</div>
