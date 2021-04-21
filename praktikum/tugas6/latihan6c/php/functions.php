<?php
function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "pw_tubes_203040116");

	return $conn;
}

function query($sql)
{
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function ubah($data)
{
	$conn = koneksi();
	$id = htmlspecialchars($data['id']);
	$img = htmlspecialchars($data['img']);
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);

	$query = "UPDATE mahasiswa2
	        SET
	        img = '$img',
	        nrp = '$nrp',
	        nama = 'nama',
	        email = 'email',
	        jurusan = 'jurusan',
	        WHERE id = '$id'
	        ";

	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);        
}