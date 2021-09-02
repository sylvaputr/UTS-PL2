<div class="row" align="center">
  
  <h1>Tambah Pembayaran</h1>

  <form action="<?php echo base64_encode('pembayaran/simpan'); ?>" method="POST" enctype="multipart/form-data">
    ID Pembayaran <br>
    <input type="text" name="id_pembayaran" required><br>
    Petugas <br>
    <select class="form-control" name="id_petugas">
        <option value="">Pilih</option>
          <?php foreach ($data['petugas'] as $row) :?>
        <option value="<?= $row['id_petugas']; ?>"><?= $row['nama_petugas']; ?></option>
      <?php endforeach; ?>
    </select><br>
    NISN <br>
    <input type="text" name="nisn" required><br>
    Tgl Bayar <br>
    <input type="text" name="tgl_bayar" required><br>
    Bulan Bayar <br>
    <input type="text" name="bulan_dibayar" required><br>
    Tahun Bayar <br>
    <input type="text" name="tahun_dibayar" required><br>
    SPP <br>
    <select class="form-control" name="id_spp">
        <option value="">Pilih</option>
          <?php foreach ($data['spp'] as $row) :?>
        <option value="<?= $row['id_spp']; ?>"><?= $row['nominal']; ?></option>
      <?php endforeach; ?>
    </select><br>
    Jumlah Bayar <br>
    <input type="text" name="jumlah_bayar" required><br>
    <br>

    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('pembayaran'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>
