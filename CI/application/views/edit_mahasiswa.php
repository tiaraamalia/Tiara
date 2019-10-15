<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('mahasiswa/update') ?>

              <div class="form-group">
                <label for="text" disable>NIM</label>
                <input type="text" name="nim" value="<?php echo $data_mahasiswa->nim ?>" class="form-control" placeholder="Masukkan NIM">
                <input type="hidden" value="<?php echo $data_mahasiswa->nim ?>" name="nim">
              </div>

              <div class="form-group">
                <label for="text">Nama Mahasiswa</label>
                <input type="text" name="nama" value="<?php echo $data_mahasiswa->nama ?>" class="form-control" placeholder="Masukkan Nama Mahasiswa">
              </div>

              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jk" class="form-control">
                  <option value="<?php echo $data_mahasiswa->jk ?>"></option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>

              <div class="form-group">
                <label for="text">Alamat</label>
                <input type="text" name="alamat" value="<?php echo $data_mahasiswa->alamat ?>" class="form-control" >
              </div>

              <button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>