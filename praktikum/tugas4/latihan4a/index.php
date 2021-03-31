<?php

$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "pw_tubes_203040116");
$result = mysqli_query($conn, "SELECT * FROM makanan daerah");

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
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><img src="../asset/img/<?= $m["Gambar"]; ?>"></td>
                <td><?= $m["Nama"]; ?></td>
                <td><?= $m["Asal"]; ?></td>
                <td><?= $m["Deskripsi"]; ?></td>
                <td><?= $m["Harga"]; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
		
		<h5 align="center"><a href="../../index.php">Kembali</a></h5>
    </body>
</html>
