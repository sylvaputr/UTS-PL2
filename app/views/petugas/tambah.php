<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
  <div class="row" align="center">
    
    <h1>Tambah Petugas</h1>

    <form action="<?php echo base64_encode('petugas/simpan'); ?>" method="POST" enctype="multipart/form-data"> 
      <table border="1">
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" required></td>
        </tr>
        <tr>
            <td>Nama Petugas</td>
            <td><input type="text" name="nama_petugas" required></td>
        </tr>
        <tr>
            <td>Level</td>
            <td>
                <select class="form-control" name="level" required>
                    <option value="">Pilih</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Petugas">Petugas</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
              <input type="submit" value="Simpan" class="btn">
              <a href="<?php echo base64_encode('petugas'); ?>" >Kembali</a>
            </td>
        </tr>
      </table>    
    </form>

  </div>
</body>
</html>
