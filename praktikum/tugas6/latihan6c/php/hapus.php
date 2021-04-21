session_start();

if (!isset($_SESION["username"])) {
    header("Location: login.php");
    exit;
}

<a href="hapus".php?id=<? $mhs['id'] ?>" onclick="return confirm('Hapus Data??')">Hapus</a>

<?php

require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
	echo "<script>
	        alert('Data Berhasil dihapus!');
	        document.location.href = 'admin.php';
	    </script>";
} else {
	echo "<script>
	        alert('Data Gagal dihapus!');
	        document.location.href = 'admin.php';
	    </script>";
	        
}
?>

function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($conn);
}
