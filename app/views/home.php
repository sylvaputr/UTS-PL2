<?php 
error_reporting(error_reporting() & ~E_NOTICE)
?>

<!DOCTYPE html>
<html>
    <head>
    <title>UTS PL2</title>
</head>
<body>
    <h2 style="text-align:center;">MAIN MENU</h2>
<table width="100%" border="1">
    <tr height="5%">
        <td align="center">
            <a href="<?php echo base64_encode('petugas'); ?>">Petugas | </a>
            <a href="<?php echo base64_encode('kelas'); ?>">Kelas | </a>
            <a href="<?php echo base64_encode('spp'); ?>">SPP | </a>
            <a href="<?php echo base64_encode('siswa'); ?>">Siswa | </a>
            <a href="<?php echo base64_encode('pembayaran'); ?>">Pembayaran | </a>
            <a href="<?php echo base64_encode('login/logout'); ?>">Logout </a>
        </td>
    </tr>
</table>
</body>
</html>