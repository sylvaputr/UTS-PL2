<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
  <div class="row" align="center">
    
  <h1>Daftar Kelas</h1>

  <table class="table" border="1 px">
      <thead>
        <tr>
          <th> No </th>
          <th> Nama Kelas </th>
          <th> Kompetensi Keahlian </th>
          <th> Aksi </th>
        </tr>
      </thead>
      <tbody>
          <?php $counter = 1; foreach ($data['kelas'] as $kelas) :?>
          <tr>
            <td><?= $counter;?></td>
            <td><?= $kelas['nama_kelas'];?></td>
            <td><?= $kelas['kompetensi_keahlian'];?></td>
            <td>
              <a href="<?php echo base64_encode('kelas/edit/'.$kelas['id_kelas']); ?>" class="badge badge-primary badge-pill">Edit</a>
              <a href="<?php echo base64_encode('kelas/hapus/'.$kelas['id_kelas']); ?>" class="badge badge-primary badge-pill" onclick="return confirm('Yakin Hapus Data Ini?')">Hapus</a>
            </td>
          </tr>
        <?php $counter+=1; endforeach; ?>
      </tbody>
  </table>
  <br>
  <div class="row">
    <a href="<?php echo base64_encode('kelas/tambah'); ?>" class="btn btn-success mt-2">Tambah Kelas</a>
    <a href="<?php echo base64_encode('home/beranda'); ?>" class="btn btn-success mt-2">Home</a>
  </div>

  </div>
</body>
</html>