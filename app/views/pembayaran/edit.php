<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
  <div class="row" align="center">
    
    <h1>Edit Pembayaran</h1>

    <form action="<?php echo base64_encode('pembayaran/update'); ?>" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id_pembayaran" value="<?= $data['pembayaran']['id_pembayaran']; ?>">
      <table border="1">
        <tr>
            <td>Petugas</td>
            <td>
              <select class="form-control" name="id_petugas" required>
                  <option value="">Pilih</option>
                    <?php foreach ($data['petugas'] as $row) :?>
                      <option value="<?= $row['id_petugas']; ?>" <?php if($data['pembayaran']['id_petugas'] == $row['id_petugas']) { echo "selected"; } ?>><?= $row['nama_petugas']; ?></option>
                    <?php endforeach; ?>
              </select>
            </td>
        </tr>
        <tr>
            <td>NISN</td>
            <td>
              <select class="form-control" name="nisn" required>
                  <option value="">Pilih</option>
                    <?php foreach ($data['siswa'] as $row) :?>
                      <option value="<?= $row['nisn']; ?>" <?php if($data['pembayaran']['nisn'] == $row['nisn']) { echo "selected"; } ?>><?= $row['nisn']; ?></option>
                    <?php endforeach; ?>
              </select>
            </td>
        </tr>
        <tr>
            <td>Tgl Bayar</td>
            <td><input type="number" name="tgl_bayar" value="<?= $data['pembayaran']['tgl_bayar']; ?>" required></td>
        </tr>
        <tr>
            <td>Bulan Bayar</td>
            <td><input type="text" name="bulan_dibayar" value="<?= $data['pembayaran']['bulan_dibayar']; ?>" required></td>
        </tr>
        <tr>
            <td>Tahun Bayar</td>
            <td><input type="number" name="tahun_dibayar" value="<?= $data['pembayaran']['tahun_dibayar']; ?>" required></td>
        </tr>
        <tr>
            <td>SPP</td>
            <td>
              <select class="form-control" name="id_spp" required>
                  <option value="">Pilih</option>
                    <?php foreach ($data['spp'] as $row) :?>
                      <option value="<?= $row['id_spp']; ?>" <?php if($data['pembayaran']['id_spp'] == $row['id_spp']) { echo "selected"; } ?>><?= $row['tahun']; ?> - <?= $row['nominal']; ?></option>
                <?php endforeach; ?>
              </select>
            </td>
        </tr>
        <tr>
            <td>Jumlah Bayar</td>
            <td><input type="number" name="jumlah_bayar" value="<?= $data['pembayaran']['jumlah_bayar']; ?>" required></td>
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
</body>
</html>
