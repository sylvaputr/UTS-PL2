<div class="row" align="center">
  
<h1>Daftar Pembayaran</h1>

<table class="table" border="1 px">
    <thead>
      <tr>
        <th> ID Pembayaran </th>
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
        <?php foreach ($data['pembayaran'] as $pembayaran) :?>
        <tr>
          <td><?= $pembayaran['id_pembayaran'];?></td>
          <td><?= $pembayaran['nama_petugas'];?></td>
          <td><?= $pembayaran['nisn'];?></td>
          <td><?= $pembayaran['tgl_bayar'];?></td>
          <td><?= $pembayaran['bulan_dibayar'];?></td>
          <td><?= $pembayaran['tahun_dibayar'];?></td>
          <td><?= $pembayaran['tahun'];?></td>
          <td><?= $pembayaran['nominal'];?></td>
          <td><?= $pembayaran['jumlah_bayar'];?></td>
          <td>
            <a href="<?= BASEURL; ?>/pembayaran/edit/<?= $pembayaran['id'] ?>" class="badge badge-primary badge-pill">Edit</a>
            <a href="<?= BASEURL; ?>/pembayaran/hapus/<?= $pembayaran['id'] ?>" class="badge badge-primary badge-pill">Hapus</a>
          </td>
        </tr>
       <?php endforeach; ?>
    </tbody>
</table>
<br>
<a href="<?= BASEURL; ?>/pembayaran/tambah" class="btn btn-success mt-2">Tambah Pembayaran</a>

</div>
