<?php
include("list_menu.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PBW - Looping</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
  </head>
</head>
</head>

<body class="container">
     <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
               <a class="navbar-brand">Latihan Program PBW</a>
               <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
               </form>
          </div>
     </nav>
     <div class="d-flex justify-content-center align-items-center gap-3 flex-xl-wrap mt-4 flex-wrap">
          <!-- Kode kalian untuk perulangan -->
          <?php // Kode Kalian Disini ?>
          <!-- ---------------------------- -->

          <div class="card" style="width: 18rem;">
               <span
                    style="display:flex; justify-content: center; margin: auto; margin: 20px; align-items: center; width: 15rem;"><?php include("image.php") ?></span>
               <div class="card-body">

                    <!-- Kode kalian untuk perulangan -->
                    <h5 class="card-title"><?= // Kode Kalian Disini ?></h5>
                    <!-- ---------------------------- -->
                    <!-- Kode kalian untuk perulangan -->
                    <p class="card-text">Rp. <?= // Kode Kalian Disini ?></p>
                    <!-- ---------------------------- -->

                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                         <button type="button" class="btn btn-danger">Kembali</button>
                         <button type="button" class="btn btn-success">Beli Makanan</button>
                    </div>
               </div>
          </div>
          <?php } ?>
     </div>

     <!-- JS BS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
       integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
       crossorigin="anonymous"></script>
</body>
</body>

</html>
