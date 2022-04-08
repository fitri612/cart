<?php
session_start();

if (isset ($_POST['Login'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	//periksa login
	if ($user == "fitri" && $pass = "fitricantik") {
		//menciptakan session
		$_SESSION['login'] = $user;
		
		//menuju ke halaman product
		header("location:list-product.php");
	}else{
		echo "<h2>Username/Password salah. 
		Klik <a href='loginsession.php'>di sini</a> untuk LOGIN kembali</h2>";  
	}
} else {
	?>
	<html>
	<head>
	<title>Login here...</title>
	</head>
	<body>
	<form action="" method="post">
	<h2>Login Here...</h2>
	Username : <input type="text" name="user"><br>
	Password : <input type="password" name="pass"><br>
	<input type="submit" name="Login" value="Log In">
	</form>
	</body>
	</html>
	<?php 
} 
?>