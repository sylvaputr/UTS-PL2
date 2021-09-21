<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
<div class="row" align="center">
  
  <h1>Daftar SPP</h1>
  
  <table class="table" border="1 px">
      <thead>
        <tr>
          <th> No </th>
          <th> Tahun </th>
          <th> Nominal </th>
          <th> Aksi </th>
        </tr>
      </thead>
      <tbody>
          <?php $counter = 1; foreach ($data['spp'] as $spp) :?>
          <tr>
            <td><?= $counter;?></td>
            <td><?= $spp['tahun'];?></td>
            <td><?= $spp['nominal'];?></td>
            <td>
              <a href="<?php echo base64_encode('spp/edit/'.$spp['id_spp']); ?>" class="badge badge-primary badge-pill">Edit</a>
              <a href="<?php echo base64_encode('spp/hapus/'.$spp['id_spp']); ?>" class="badge badge-primary badge-pill" onclick="return confirm('Yakin Hapus Data Ini?')">Hapus</a>
            </td>
          </tr>
         <?php $counter+= 1; endforeach; ?>
      </tbody>
  </table>
  <br>
  <a href="<?php echo base64_encode('spp/tambah'); ?>" class="btn btn-success mt-2">Tambah SPP</a>
  <a href="<?php echo base64_encode('home/beranda'); ?>" class="btn btn-success mt-2">Home</a>
  
  </div>
</body>
</html>

