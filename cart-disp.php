<?Php
session_start();

//pemeriksaan session
if (isset($_SESSION['login'])) {
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>daftar Isi Cart </title> 
	</head>
	<body>
		<p>
	<?php
	if (!empty($_SESSION['cart']["arrCart"])){

		echo "Jumlah data :".sizeof($_SESSION['cart']['arrCart']).
			 "<br /> <a href=cart-remove.php>Kosongkan Cart</a><br />
			 kembali ke <a href='list-product.php'>List Product</a><br />
			 <br />";
		
			 $max = sizeof($_SESSION['cart']['arrCart']);
			 $totalIndex = -1;
		
			 for ($i = 0; $i < $max; $i++){

			
				$cart = $_SESSION['cart']['arrCart'][$i];

				if ($cart['brg'] == 'Total') {


					// move 
					$totalIndex = $i;
					continue;

				} else {

					echo str_pad(strval($cart['brg']), 19, " ", STR_PAD_RIGHT)
					.str_pad(strval($cart['jml']), 6, " ", STR_PAD_LEFT)
					.str_pad(strval($cart['hrg']), 10, " ", STR_PAD_LEFT);
				}
			
				echo "<br />";	
		
			}	

			if ($totalIndex > 0) {

				$cart = $_SESSION['cart']['arrCart'][$totalIndex];
				echo "Total".str_pad(strval($cart['hrg']), 30, " ", STR_PAD_LEFT);
			}
	
		} else
		
		echo "cart kosong<br>kembali ke <a href='list-product.php'>List Product</a>";

?>
	 </p>
</body>
</html>
<?php
}else{
	//session belum ada artinya belum login
	die ("Anda belum login! Anda tidak berhak masuk ke halaman ini.
	Silahkan login <a href='loginsession.php'>di sini</a>");
}
?>
