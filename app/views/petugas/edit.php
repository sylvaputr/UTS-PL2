<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
  <div class="row" align="center">
    
    <h1>Edit Petugas</h1>

    <form action="<?php echo base64_encode('petugas/update'); ?>" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id_petugas" value="<?= $data['petugas']['id_petugas']; ?>">
      <table border="1">
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?= $data['petugas']['username']; ?>" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" value="<?= $data['petugas']['password']; ?>" required></td>
        </tr>
        <tr>
            <td> Nama Petugas</td>
            <td><input type="text" name="nama_petugas" value="<?= $data['petugas']['nama_petugas']; ?>" required></td>
        </tr>
        <tr>
            <td>Level</td>
            <td>
                <select class="form-control" name="level" required>
                  <option value=""><?= $data['petugas']['level']; ?></option>
                  <option value="1">Administrator</option>
                  <option value="2">Petugas</option>
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
