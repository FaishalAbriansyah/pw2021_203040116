<?php

if (!isset($_GET['id'])) {
	header("location: ..a/index.php");
	exit;
}

require 'functions.php';

$id = $_GET['id'];
$mahasiswa = query("SELECT * FROM makanan daerah WHERE id = $id")[0];
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    </head>
    <body>
        <div class="container">
        	<div class="gambar">
                <img src="../asset/img/<?= $m["Gambar"]; ?>" alt="">
            </div>
            <div class="keterangan">    
                <td><?= $m["Nama"]; ?></td>
                <td><?= $m["Asal"]; ?></td>
                <td><?= $m["Deskripsi"]; ?></td>
                <td><?= $m["Harga"]; ?></td>
            </div>
		
		<h5 align="center"><a href="../../index.php">Kembali</a></h5>
    </body>
</html>