<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
  <div class="row" align="center">
    
    <h1>Tambah Siswa</h1>

    <form action="<?php echo base64_encode('siswa/simpan'); ?>" method="POST" enctype="multipart/form-data">
      <table border="1">
        <tr>
            <td>NISN</td>
            <td><input type="number" name="nisn" required></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td><input type="number" name="nis" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>
                <select class="form-control" name="id_kelas">
                    <option value="">Pilih</option>
                      <?php foreach ($data['kelas'] as $row) :?>
                    <option value="<?= $row['id_kelas']; ?>"><?= $row['nama_kelas'].' - '.$row['kompetensi_keahlian']; ?></option>
                  <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>No Telpon</td>
            <td><input type="number" name="no_telp" required></td>
        </tr>
        <tr>
            <td>SPP</td>
            <td>
              <select class="form-control" name="id_spp">
                  <option value="">Pilih</option>
                    <?php foreach ($data['spp'] as $row) :?>
                  <option value="<?= $row['id_spp']; ?>"><?= $row['tahun'].' - '.$row['nominal']; ?></option>
                <?php endforeach; ?>
              </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
              <input type="submit" value="Simpan" class="btn">
              <a href="<?php echo base64_encode('siswa'); ?>" >Kembali</a>
            </td>
        </tr>
      </table>
    </form>

  </div>
</body>
</html>
