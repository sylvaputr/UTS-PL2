<div class="row" align="center">
  
<h1>Daftar SPP</h1>

<table class="table" border="1 px">
    <thead>
      <tr>
        <th> ID SPP </th>
        <th> Tahun </th>
        <th> Nominal </th>
        <th> Aksi </th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($data['spp'] as $spp) :?>
        <tr>
          <td><?= $spp['id_spp'];?></td>
          <td><?= $spp['tahun'];?></td>
          <td><?= $spp['nominal'];?></td>
          <td>
            <a href="<?= BASEURL; ?>/spp/edit/<?= $spp['id'] ?>" class="badge badge-primary badge-pill">Edit</a>
            <a href="<?= BASEURL; ?>/spp/hapus/<?= $spp['id'] ?>" class="badge badge-primary badge-pill">Hapus</a>
          </td>
        </tr>
       <?php endforeach; ?>
    </tbody>
</table>
<br>
<a href="<?php echo base64_encode('spp/tambah'); ?>" class="btn btn-success mt-2">Tambah SPP</a>

</div>
