<div class="row" align="center">
  
  <h1>Tambah Pembayaran</h1>

  <form action="<?php echo base64_encode('pembayaran/simpan'); ?>" method="POST" enctype="multipart/form-data">
    <table border="1">
      <tr>
          <td>ID Pembayaran</td>
          <td><input type="number" name="id_pembayaran" required></td>
      </tr>
      <tr>
          <td>Petugas</td>
          <td>
            <select class="form-control" name="id_petugas">
                <option value="">Pilih</option>
                  <?php foreach ($data['petugas'] as $row) :?>
                <option value="<?= $row['id_petugas']; ?>"><?= $row['nama_petugas']; ?></option>
              <?php endforeach; ?>
            </select>
          </td>
      </tr>
      <tr>
          <td>NISN</td>
          <td>
            <select class="form-control" name="nisn">
                <option value="">Pilih</option>
                  <?php foreach ($data['siswa'] as $row) :?>
                <option value="<?= $row['nisn']; ?>"><?= $row['nisn']. ' - '.$row['nama'];; ?></option>
              <?php endforeach; ?>
            </select>
          </td>
      </tr>
      <tr>
          <td>Tgl Bayar</td>
          <td><input type="number" name="tgl_bayar" required></td>
      </tr>
      <tr>
          <td>Bulan Bayar</td>
          <td><input type="text" name="bulan_dibayar" required></td>
      </tr>
      <tr>
          <td>Tahun Bayar</td>
          <td><input type="number" name="tahun_dibayar" required></td>
      </tr>
      <tr>
          <td>SPP</td>
          <td>
            <select class="form-control" name="id_spp">
                <option value="">Pilih</option>
                  <?php foreach ($data['spp'] as $row) :?>
                <option value="<?= $row['id_spp']; ?>"><?= $row['nominal']; ?></option>
              <?php endforeach; ?>
            </select>
          </td>
      </tr>
      <tr>
          <td>Jumlah Bayar</td>
          <td><input type="number" name="jumlah_bayar" required></td>
      </tr>
      <tr>
          <td colspan="2" align="center">
            <input type="submit" value="Simpan" class="btn">
            <a href="<?php echo base64_encode('pembayaran'); ?>" >Kembali</a>
          </td>
      </tr>
    </table>
  </form>

</div>
