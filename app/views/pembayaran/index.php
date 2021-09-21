<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
  <div class="row" align="center">
    
    <h1>Daftar Pembayaran</h1>

    <table class="table" border="1 px">
        <thead>
          <tr>
            <th> No </th>
            <th> Petugas </th>
            <th> NISN </th>
            <th> Tgl Bayar </th>
            <th> Bulan Bayar </th>
            <th> Tahun Bayar </th>
            <th> Tahun SPP </th>
            <th> Nominal SPP </th>
            <th> Jumlah Bayar </th>
            <th> Aksi </th>
          </tr>
        </thead>
        <tbody>
            <?php $counter = 1; foreach ($data['pembayaran'] as $pembayaran) :?>
            <tr>
              <td><?= $counter;?></td>
              <td><?= $pembayaran['nama_petugas'];?></td>
              <td><?= $pembayaran['nisn'];?></td>
              <td><?= $pembayaran['tgl_bayar'];?></td>
              <td><?= $pembayaran['bulan_dibayar'];?></td>
              <td><?= $pembayaran['tahun_dibayar'];?></td>
              <td><?= $pembayaran['tahun'];?></td>
              <td><?= $pembayaran['nominal'];?></td>
              <td><?= $pembayaran['jumlah_bayar'];?></td>
              <td>
                <a href="<?php echo base64_encode('pembayaran/edit/'.$pembayaran['id_pembayaran']); ?>" class="badge badge-primary badge-pill">Edit</a>
                <a href="<?php echo base64_encode('pembayaran/hapus/'.$pembayaran['id_pembayaran']); ?>" class="badge badge-primary badge-pill" onclick="return confirm('Yakin Hapus Data Ini?')">Hapus</a>
              </td>
            </tr>
          <?php $counter+= 1; endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href="<?php echo base64_encode('pembayaran/tambah'); ?>" class="btn btn-success mt-2">Tambah Pembayaran</a>
    <a href="<?php echo base64_encode('home/beranda'); ?>" class="btn btn-success mt-2">Home</a>

  </div>
</body>
</html>
