session_start();

if (!isset($_SESION["username"])) {
    header("Location: login.php");
    exit;
}

<h3>Form Tambah Data Mahasiswa</h3>
<form action="" method="post">
	<ul>
		<li>
			<label for="nrp">NRP :</label><br>
			<input type="text" name="nrp" id="nrp" required><br><br>
		</li>
		<li>
			<label for="nama">Nama :</label><br>
			<input type="text" name="nama" id="nama" required><br><br>
		</li>
		<li>
			<label for="email">EMAIL :</label><br>
			<input type="text" name="email" id="email" required><br><br>
		</li>
		<li>
			<label for="jurusan">JURUSAN :</label><br>
			<select name="jurusan" id="jurusan" required>
				<option value="">-------------- PILIH Jurusan ----------------</option>
				<option value="Teknik Industri">Teknik Industri</option>
				<option value="Teknik Informatika">Teknik Informatika</option>
			</select>
		</li>
		<br>
		<button type="submit" name="tambah">Tambah Data!</button>
		<button type="submit"
		    <a href="index.php" style="text-deoration: none; color; black;">Kembali</a>
	    </button>
	</ul>



<?php
require 'functions.php'

if (isset($_POST['tambah'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
		            alert('DATA Berhasil ditambahkan!');
		            document.location.href = 'admin.php';
		        </script>
	} else {
		echo "<script>
		            alert('Data Gagal ditambahkan!');
		            document.location.href = 'admin.php';
		        </script>";                
	}
}
?>

funtion tambah($data)
{
	$conn = koneksi();

	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$img = htmlspecialchars($data['img']);

	$query = "INSERT INTO Mahasiswa
	                VALUES
	                ('','$img', '$nrp', '$nama', '$email', '$jurusan')";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);                
}


