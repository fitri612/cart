<?php
session_start();

//pemeriksaan session
if (isset($_SESSION['login'])) {
	//jika sudah login
	if (empty($_SESSION['cart']["arrCart"]))
	$_SESSION['cart']["arrCart"]=array();

	include 'koneksi.php';
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>daftar produk </title> 
	</head>

	<body>
	Selamat Datang, <?php echo $_SESSION['login'] ?> (<a href='cart-disp.php'>Cek Cart</a>) (<a href='logout.php'>Log Out</a>)
	<h2>Tanaman Hias Aglonema</h2> 

	<table align="center">
		<tr>
			<?php
				$sql = "SELECT * FROM db_order";
				$result = $conn->query($sql);
				// var_dump($result->fetch_assoc());
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						?>
						<td>
							<img src='img/<?php echo $row['foto']?>' style='width:100px;height:100px' /><br />
							<a href="addCart.php?brg=<?php echo $row['nama']?>&hrg=<?php echo $row['harga']?>&jml=1"><?php echo $row['nama']?></a><br />
							<?php echo $row['harga']?>
						</td>
						<?php
					} 
				} 
				else {
					echo "0 results";
				}
			?>
		</tr>
	</table>  
	</body>
	</html>
	<?php
}else{
	//session belum ada artinya belum login
	die ("Anda belum login! Anda tidak berhak masuk ke halaman ini.
	Silahkan login <a href='loginsession.php'>di sini</a>");
}
 					
?> 
