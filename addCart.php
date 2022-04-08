<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {	
	
	$brg=$_GET['brg']; // nama Barang
	$hrg=$_GET['hrg'];
	$jml=$_GET['jml'];

	print("<br>brg: $brg<br>hrg: $hrg<br>jml: $jml"); // ini ketampil
	$total = 0;
	
	if (!empty($_SESSION['cart']['arrCart'])) {

		$find = false;
		$max = sizeof($_SESSION['cart']['arrCart']);
		for ($i = 0; $i < $max; $i++) {

			$cart = $_SESSION['cart']['arrCart'][$i];

			// If Duplicate
			if ($cart["brg"] == $brg) {

				// Increment
				$_SESSION['cart']['arrCart'][$i]['jml'] += intval($jml);
				$find = true;
			}

			$total += $cart['hrg'];
		}

		if (!$find) {

			$newBrg = array(

				"brg" => $brg,
				"hrg" => intval($hrg),
				"jml" => intval($jml)
			);
	
			array_push($_SESSION['cart']['arrCart'], $newBrg);
		}

	} else {


		$newBrg = array(

			"brg" => $brg,
			"hrg" => intval($hrg),
			"jml" => intval($jml)
		);

		$total = $hrg;

		array_push($_SESSION['cart']['arrCart'], $newBrg);
	}

	// belum ada
	// Var Jumlah, Harga
	// ada
	// Jumlah +1

	// Totaling
	if (!empty($_SESSION['cat']['arrCart'])) {

		$find = false;
		$max = sizeof($_SESSION['cart']['arrCart']);
		for ($i = 0; $i < $max; $i++) {

			$cart = $_SESSION['cart']['arrCart'][$i];

			// If Duplicate
			if ($cart["brg"] == 'Total') {

				// Increment
				$_SESSION['cart']['arrCart'][$i]['hrg'] += intval($hrg);
				$find = true;
			}

			$total += $cart['hrg'];
		}

		if (!$find) {

			$newBrg = array(

				"brg" => "Total",
				"hrg" => intval($hrg),
				"jml" => 0
			);

			array_push($_SESSION['cart']['arrCart'], $newBrg);
		}
	} else {

		$newBrg = array(

			"brg" => "Total",
			"hrg" => intval($total),
			"jml" => 0
		);
	
		$_SESSION['cart']['arrCart'] []= $newBrg;
	}

	// var_dump($_SESSION['cat']['arrCart']);
}

header("location:cart-disp.php");
// include "cart-disp.php";
?>