<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?/

<body>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>   
                <td><?= $i; ?></td>
                <td>
           	        <a href=""><button>Ubah</button></a>
           	        <a href=""><button>Hapus</button></a>
            	</td>
            	<td><img src="../assets/img/<?= $mhs['img']; ?>" alt=""></td>
            	<td><?= $mhs['nrp']; ?></td>
            	<td><?= $mhs['nama']; ?></td>
            	<td><?= $mhs['email']; ?></td>
           	    <td>RP <?= $mhs['jurusan']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>   
</body>           	   

<div class="add">
    <a href="tambah.php">Tambah Data</a>
</div>    