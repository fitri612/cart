<?php
session_start();

if (isset($_SESSION['login'])) {
	unset ($_SESSION);
	session_destroy();

	echo "<h1>Anda sudah berhasil LOGOUT</h1>";
	echo "<h2>Klik <a href='loginsession.php'>di sini</a> untuk LOGIN kembali</h2>";
	echo "<h2><a href='cart-disp.php'>Cek Cart</a></h2>";
}
?>