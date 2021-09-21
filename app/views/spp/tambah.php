<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
  <div class="row" align="center">
    
    <h1>Tambah SPP</h1>

    <form action="<?php echo base64_encode('spp/simpan'); ?>" method="POST" enctype="multipart/form-data">
      <table border="1">
        <tr>
            <td>Tahun</td>
            <td><input type="text" name="tahun" required></td>
        </tr>
        <tr>
            <td>Nominal</td>
            <td><input type="number" name="nominal" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
              <input type="submit" value="Simpan" class="btn">
              <a href="<?php echo base64_encode('spp'); ?>" >Kembali</a>
            </td>
        </tr>
      </table>    
    </form>

  </div>
</body>
</html>
