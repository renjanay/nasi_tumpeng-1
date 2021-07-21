<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>/menu">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>/meja">Meja</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Pesanan  <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pembayaran</a>
      </li>
    </ul>
    <?php echo $this->session->userdata('nama_pegawai') ?>
    -
    <?php echo $this->session->userdata('jabatan') ?>
    <?php echo form_open("login/logout") ?>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
    <?php echo form_close() ?>
  </div>
</nav>
  <a class="btn btn-primary" href="<?php echo site_url() ?>/pesanan/view_tambah_pesanan" role="button">Tambah Pesanan Baru</a>
    <div id="accordion">
      <?php foreach ($data as $value): ?>
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $value->id_pesanan?>" aria-expanded="true" aria-controls="collapseOne">
                  Meja <?php echo $value->no_meja ?> - <?php echo $value->nama_pelanggan ?> - <?php echo $value->status_pesanan ?>
                </button>
              </h5>
            </div>
            <div id="collapse<?php echo $value->id_pesanan?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <table>
                  <tr>
                    <td>Nama menu</td>
                    <td>jumlah pesan</td>
                  </tr>
                  <?php
                    foreach (${'data'.$x} as $val): ?>
                    <tr>
                      <td><?php echo $val->nama_menu ?></td>
                      <td><?php echo $val->jumlah_pesan ?></td>
                    </tr>
                    <?php
                  endforeach;
                    $x--;
                   ?>
                   <a class="btn btn-primary" href="<?php echo site_url() ?>/pesanan/view_tambah_pesanan?id=<?php echo $value->id_pesanan?>" role="button">Tambah pesanan</a>
                   <a class="btn btn-primary" href="<?php echo site_url() ?>/pesanan/#" role="button">Ubah pesanan</a>
                   <a class="btn btn-primary" href="<?php echo site_url() ?>/pesanan/#" role="button">Hapus pesanan</a>
                   <a class="btn btn-primary" href="<?php echo site_url() ?>/pesanan/#" role="button">Selesaikan pesanan</a>
                </table>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <br>
  </body>
</html>
