<div class="row" align="center">
  
  <h1>Tambah Mahasiswa</h1>

  <form action="<?php echo base64_encode('siswa/simpan'); ?>" method="POST" enctype="multipart/form-data">
    NISN <br>
    <input type="text" name="nisn" required><br>
    NIS <br>
    <input type="text" name="nis" required><br>
    Nama <br>
    <input type="text" name="nama" required><br>
    Kelas <br>
    <input type="text" name="id_kelas" required><br>
    Alamat <br>
    <input type="text" name="alamat" required><br>
    No Tlp <br>
    <input type="text" name="no_telp" required><br>
    SPP <br>
    <input type="text" name="id_spp" required><br>
    <br>

    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('siswa'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>
