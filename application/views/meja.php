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
      <li class="nav-item active">
        <a class="nav-link" href="#">Menu <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Meja</a>
      </li>
    </ul>
  </div>
</nav>
    List Meja
    <table>
      <tr>
        <td>No Meja</td>
        <td>Status</td>
        <td>Aksi</td>
      </tr>
      <?php foreach ($data as $value): ?>
        <tr>
          <td><?php echo $value->no_meja ?></td>
          <td><?php echo $value->status ?></td>
          <td>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalMeja<?php echo $value->no_meja ?>">
  Pilih
</button>

<!-- Modal -->
<div class="modal fade" id="modalMeja<?php echo $value->no_meja ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <?php $hid = array('no_meja' => $value->no_meja);
      echo form_open('meja/isi_meja', '', $hid); ?>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Meja <?php echo $value->no_meja ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if ($value->status == "Kosong"):?>
          <div class="form-group">
            <label for="nama-pelanggan" class="col-form-label">Nama Pelanggan:</label>
            <input type="text" class="form-control" id="nama-pelanggan" name="nama_pelanggan">
          </div>
        <?php endif; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <?php if ($this->session->userdata('jabatan')=='Pelayan'): ?>

    <?php endif; ?>
  </body>
</html>
