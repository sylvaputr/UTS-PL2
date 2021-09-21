<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
    <div class="row" align="center">
    
    <h1>Edit Siswa</h1>

    <form action="<?php echo base64_encode('siswa/update'); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="nisn" value="<?= $data['siswa']['nisn']; ?>">
        <table border="1">
        <tr>
            <td>NISN</td>
            <td><input type="number" value="<?= $data['siswa']['nisn']; ?>" required disabled></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td><input type="number" name="nis" value="<?= $data['siswa']['nis']; ?>" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?= $data['siswa']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>
                <select class="form-control" name="id_kelas">
                    <option value="">Pilih</option>
                        <?php foreach ($data['kelas'] as $row) :?>
                    <option value="<?= $row['id_kelas']; ?>" <?php if($data['siswa']['id_kelas'] == $row['id_kelas']) { echo "selected"; } ?>><?= $row['nama_kelas']; ?> - <?= $row['kompetensi_keahlian']; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?= $data['siswa']['alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>No Telpon</td>
            <td><input type="number" name="no_telp" value="<?= $data['siswa']['no_telp']; ?>" required></td>
        </tr>
        <tr>
            <td>SPP</td>
            <td>
            <select class="form-control" name="id_spp">
                <option value="">Pilih</option>
                    <?php foreach ($data['spp'] as $row) :?>
                <option value="<?= $row['id_spp']; ?>" <?php if($data['siswa']['id_spp'] == $row['id_spp']) { echo "selected"; } ?>><?= $row['tahun'].' - '.$row['nominal']; ?></option>
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