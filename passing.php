<?php 
$inputMenu = $_POST['inputMenu'];

$menuMinuman;
$hargaMinuman;

if ($inputMenu == 1) {
	$menuMinuman = "Es Teh";
	$hargaMinuman = "Rp." . 8000;
} else if ($inputMenu == 2) {
	$menuMinuman = "Es Milo";
	$hargaMinuman = "Rp." . 11000;
} else if ($inputMenu == 3) {
	$menuMinuman = "Es Kopi";
	$hargaMinuman = "Rp." . 13000;
} else if ($inputMenu == 4) {
	$menuMinuman = "Jus Strawberry";
	$hargaMinuman = "Rp." . 15000;
} else if ($inputMenu == 5) {
	$menuMinuman = "Jus Mangga";
	$hargaMinuman = "Rp." . 15000;
} else {
	header("Location:./index.php");
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
	rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
	crossorigin="anonymous">
</head>
<body class="container d-flex justify-content-center align-items-center h-100">
	<div class="card w-50">
	  <div class="card-body">
		<h5 class="card-title font-bold">Anda Memesan <?php echo $menuMinuman ?></h5>
		<p class="card-text">Harga Minuman <?= $hargaMinuman ?></p>
		<a href="index.php" class="btn btn-danger">Kembali</a>
	  </div>
	</div>
	
	<!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
	crossorigin="anonymous"></script>
</body>
</html>
