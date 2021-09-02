<div class="row" align="center">
  
<h1>Daftar Mahasiswa</h1>

<table class="table" border="1 px">
    <thead>
      <tr>
        <th> NISN </th>
        <th> NIS </th>
        <th> Nama </th>
        <th> Kelas </th>
        <th> Alamat </th>
        <th> No Telp </th>
        <th> SPP </th>
        <th> Aksi </th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($data['siswa'] as $siswa) :?>
        <tr>
          <td><?= $siswa['nisn'];?></td>
          <td><?= $siswa['nis'];?></td>
          <td><?= $siswa['nama'];?></td>
          <td><?= $siswa['id_kelas'];?></td>
          <td><?= $siswa['alamat'];?></td>
          <td><?= $siswa['no_telp'];?></td>
          <td><?= $siswa['id_spp'];?></td>
          <td>
            <a href="<?= BASEURL; ?>/siswa/edit/<?= $siswa['id'] ?>" class="badge badge-primary badge-pill">Edit</a>
            <a href="<?= BASEURL; ?>/siswa/hapus/<?= $siswa['id'] ?>" class="badge badge-primary badge-pill">Hapus</a>
          </td>
        </tr>
       <?php endforeach; ?>
    </tbody>
</table>
<br>
<a href="<?= BASEURL; ?>/siswa/tambah" class="btn btn-success mt-2">Tambah Mahasiswa</a>

</div>
