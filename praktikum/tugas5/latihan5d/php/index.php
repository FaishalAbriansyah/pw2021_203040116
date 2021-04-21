<?php
require 'php/functions.php';
$makanan_daerah = query("SELECT * FROM makanan daerah")

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    </head>
    <body>
        <table>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Asal</th>
                <th>Deskripsi</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($makanan as $m) { ?>
            <tr>
                <td><img src="../asset/img/<?= $m["Gambar"]; ?>"></td>
                <td><?= $m["Nama"]; ?></td>
                <td><?= $m["Asal"]; ?></td>
                <td><?= $m["Deskripsi"]; ?></td>
                <td><?= $m["Harga"]; ?></td>
            </tr>
            <?php } ?>
        </table>
		
		<h5 align="center"><a href="../../index.php">Kembali</a></h5>
    </body>
</html>
