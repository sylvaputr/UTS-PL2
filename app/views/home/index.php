<?php 
error_reporting(error_reporting() & ~E_NOTICE)
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Beranda</title>
</head>
<body>
<table width="100%" height="100%" border="1">
    <tr height="5%">
        <td align="center">
            <a href="siswa">Siswa</a>
            <a href="index.php?id=<?php echo base64_encode(2); ?>">Dosen</a>
            <a href="index.php?id=<?php echo base64_encode(3); ?>">Matakuliah</a>
            <a href="index.php?id=<?php echo base64_encode(4); ?>">Nilai</a>
        </td>
    </tr>
    <tr height="95%">
        <td valign="top" align="center">
            <?php
                $id_menu = $_GET["id"];
                if($id_menu=='siswa')
                {
                    include('siswa.php');
                }
                elseif($id_menu==2)
                {
                    include('latihan5.php');
                }
                elseif($id_menu==3)
                {
                    echo ("belum ada form");
                    //include('latihan9.php');
                }
                elseif($id_menu==4)
                {
                    echo ("belum ada form");
                    //include('latihan13.php');
                }
            ?>
        </td>
    </tr>
</table>
</body>
</html>