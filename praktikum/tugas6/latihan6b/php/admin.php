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

<form action="" method="get">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari!</button>
</form>

<?php
require 'functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE
                 nrp LIKE '%$keyword%' OR
                 nama LIKE '%$keyword%' OR
                 email LIKE '%$keyword%' OR
                 jurusan LIKE '%$keyword%' ");
} else {
    $mahasiswa = query("SELECT * FROM mahasiswa");
}           	   
?>


<?php if (empty($mahasiswa)) : ?>
    <tr>
        <td colspan="7">
            <h1>Data tidak ditemukan</h1>
        </td>
    </tr>
<?php else : ?>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <div class="update"><a href="ubah.php?id=<?= $mhs['id'] ?>">Ubah</a></div>
                <div class="delete"><a href="hapus.php?id=<?= $mhs['id'] ?>" onclick="return confirm('Hapus Data??')">Hapus</a></div>

            </td>
            <td><img src="../assets/img/<?= $mhs['img']; ?>" alt=""></td>
            <td><?= $mhs['nrp']; ?></td>
            <td><?= $mhs['nama']; ?></td> 
            <td><?= $mhs['email']; ?></td> 
            <td><?= $mhs['jurusan']; ?></td> 
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
<?php endif; ?> 

<div class="logout">
    <a href="logout.php">Logout</a>
</div>           
