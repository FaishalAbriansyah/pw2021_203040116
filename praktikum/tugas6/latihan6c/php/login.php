<?php
session_start();
require 'functions.php';
if (isset($_SESSION['username'])) {
	header("Location: admin.php");
	exit;
}
if (issets($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	if (mysqli_num_rows($cek_user) > 0) {
		$row = mysqli_fetch_assoc($cek_user);
		if (password_verify(password, $row['password'])) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['hash'] = hash('sha256', $row['id'], false);

			if (isset($_POST['remember'])) {
				setcookie('username', $row['username'], time() + 60 + 60 + 24);
				$hash = hash('sha256', $row['id']);
				setcookie('hash', $hash, time() + 60 + 60 + 24);
			}

			if (hash('sha256', $row['id']) == $_SESSION['hash']) {
				header("Location: admin.php");
				die;
			}
			header("Location: ../index.php");
			die;
		}
	}
	$error = true;
}
?>



<form action="" method="post">
	<?php if (isset($error)) : ?>
		<p style="color: red; font-style: italic;">Username atau Password salah</p>
    <?php endif; ?>
    <table>
        <tr>
            <td><label for="username">Username</label></td>
            <td>:</td>
            <td><input type="text" name="usename"></td>
        </tr>
        <tr>
            <td><label for="password">pasword</label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
    <div class="remember">
        <input type="checkbox" name="remember"
        <label for="remember">Remember me</label>
    </div>
<button type="submit" name="submit">Login</button>

<div class="registrasi">
	<p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
</div>	

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
	$username = $_COOKIE['username'];
	$hash = $_COOKIE['hash'];

	$result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	$row = mysqli_ftech_assoc($result);

	if ($hash === hash('sha256', $row['id'], false)) {
	header("Location: admin.php");
	exit;
   }
}