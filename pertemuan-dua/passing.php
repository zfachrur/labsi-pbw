<?php 
// Kode Kalian


// -----------

?>

<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Latihan PBW - Menu Bayar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
            crossorigin="anonymous">
    </head>
    <body class="container d-flex justify-content-center align-items-center h-100">
        <div class="card w-50">
            <div class="card-body">
				<!-- Untuk Menampilkan Nama Minuman -->
                <h5 class="card-title font-bold">Anda Memesan <?php echo $menuMinuman ?></h5>
				<!-- ------------------------------ -->
				
				<!-- Untuk Menampilkan Harga Minuman -->
                <p class="card-text">Harga Minuman <?php echo $hargaMinuman ?></p>
				<!-- ------------------------------- -->
				
				<!-- Tombol Untuk Kembali Ke Menu -->
                <a href="index.php" class="btn btn-danger">Kembali</a>
				<!-- ---------------------------- -->
				
            </div>
        </div>
        <!-- Javascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>
    </body>
</html>
