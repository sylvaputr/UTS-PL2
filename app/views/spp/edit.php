<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
<div class="row" align="center">  
  <div class="row" align="center">
    
    <h1>Edit SPP</h1>

    <form action="<?php echo base64_encode('spp/update'); ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_spp" value="<?= $data['spp']['id_spp']; ?>">
    <table border="1">
        <tr>
            <td>Tahun</td>
            <td><input type="number" name="tahun" value="<?= $data['spp']['tahun']; ?>" required ></td>
        </tr>
        <tr>
            <td>Nominal</td>
            <td><input type="number" name="nominal" value="<?= $data['spp']['nominal']; ?>" required></td>
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

