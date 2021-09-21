<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
  <div class="row" align="center">
    
    <h1>Daftar Petugas</h1>

    <table class="table" border="1 px">
        <thead>
          <tr>
            <th> No </th>
            <th> Username </th>
            <th> Password </th>
            <th> Nama Petugas </th>
            <th> Level </th>
            <th> Aksi </th>
          </tr>
        </thead>
        <tbody>
            <?php $counter = 1;; foreach ($data['petugas'] as $petugas) :?>
            <tr>
              <td><?= $counter;?></td>
              <td><?= $petugas['username'];?></td>
              <td><?= $petugas['password'];?></td>
              <td><?= $petugas['nama_petugas'];?></td>
              <td><?= $petugas['level'];?></td>
              <td>
                <a href="<?php echo base64_encode('petugas/edit/'.$petugas['id_petugas']); ?>" class="badge badge-primary badge-pill">Edit</a>
                <a href="<?php echo base64_encode('petugas/hapus/'.$petugas['id_petugas']); ?>" class="badge badge-primary badge-pill" onclick="return confirm('Yakin Hapus Data Ini?')">Hapus</a>
              </td>
            </tr>
          <?php $counter+= 1; endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href="<?php echo base64_encode('petugas/tambah'); ?>" class="btn btn-success mt-2">Tambah Petugas</a>
    <a href="<?php echo base64_encode('home/beranda'); ?>" class="btn btn-success mt-2">Home</a>

  </div>
</body>
</html>
