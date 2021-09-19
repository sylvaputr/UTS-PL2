<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
  <div class="row" align="center">
    
    <h1>Tambah Kelas</h1>

    <form action="<?php echo base64_encode('kelas/simpan'); ?>" method="POST" enctype="multipart/form-data"> 
      <table border="1">
        <tr>
            <td>Nama Kelas</td>
            <td><input type="text" name="nama_kelas" required></td>
        </tr>
        <tr>
            <td>Kompetensi Keahlian</td>
            <td><input type="text" name="kompetensi_keahlian" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
              <input type="submit" value="Simpan" class="btn">
              <a href="<?php echo base64_encode('kelas'); ?>" >Kembali</a>
            </td>
        </tr>
      </table>    
    </form>

  </div>
</body>
</html>
