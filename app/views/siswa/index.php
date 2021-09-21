<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
  <div class="row" align="center">
    
  <h1>Daftar Siswa</h1>

  <table class="table" border="1 px">
      <thead>
        <tr>
          <th> No </th>
          <th> NISN </th>
          <th> NIS </th>
          <th> Nama </th>
          <th> Kelas </th>
          <th> Kompetensi <br> Keahlian </th>
          <th> Alamat </th>
          <th> No Telp </th>
          <th> Tahun SPP </th>
          <th> Nominal </th>
          <th> Aksi </th>
        </tr>
      </thead>
      <tbody>
          <?php $counter = 1; foreach ($data['siswa'] as $siswa) :?>
          <tr align="center">
            <td><?= $counter; ?></td>
            <td><?= $siswa['nisn'];?></td>
            <td><?= $siswa['nis'];?></td>
            <td><?= $siswa['nama'];?></td>
            <td><?= $siswa['nama_kelas'];?></td>
            <td><?= $siswa['kompetensi_keahlian'];?></td>
            <td><?= $siswa['alamat'];?></td>
            <td><?= $siswa['no_telp'];?></td>
            <td><?= $siswa['tahun'];?></td>
            <td><?= $siswa['nominal'];?></td>
            <td>
              <a href="<?php echo base64_encode('siswa/edit/'.$siswa['nisn']); ?>" class="badge badge-primary badge-pill">Edit</a>
              <a href="<?php echo base64_encode('siswa/hapus/'.$siswa['nisn']); ?>" class="badge badge-primary badge-pill" onclick="return confirm('Yakin Hapus Data Ini?')">Hapus</a>
            </td>
          </tr>
        <?php $counter+= 1; endforeach; ?>
      </tbody>
  </table>
  <br>
  <a href="<?php echo base64_encode('siswa/tambah'); ?>" class="btn btn-success mt-2">Tambah Siswa</a>
  <a href="<?php echo base64_encode('home/beranda'); ?>" class="btn btn-success mt-2">Home</a>

  </div>
</body>
</html>
