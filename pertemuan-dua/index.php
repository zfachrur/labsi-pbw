<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Latihan PBW - Menu Minuman</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
         rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
         crossorigin="anonymous">
   </head>
   <body class="container">
      <div class="d-flex col-md-12 justify-content-center align-items-center">
         <ul class="list-group w-50">
            <h1>Menu Minuman</h1>
            <li class="list-group-item">1. Es Teh</li>
            <li class="list-group-item">2. Es Milo</li>
            <li class="list-group-item">3. Es Kopi</li>
            <li class="list-group-item">4. Jus Strawberry</li>
            <li class="list-group-item">5. Jus Mangga</li>
         </ul>
         <div class="d-flex justify-content-center align-items-center container vh-100 vw-100 border-2">
            <form action="./passing.php" method="GET">
               <div class="row g-3 align-items-center">
                  <div class="col-auto">
                     <label for="input_menu" class="col-form-label">Pilih Menu 1-5</label>
                  </div>
                  <div class="col-auto">
                     <input type="number" name="input_menu" id="input_menu" 
                        class="form-control" required>
                  </div>
                  <div class="col-auto">
                     <span class="form-text">
                     Pilih menu yang tersedia.
                     </span>
                  </div>
                  <button type="submit" class="btn btn-dark">Submit</button>
               </div>
            </form>
         </div>
      </div>
      <!-- Javascript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
         crossorigin="anonymous"></script>
   </body>
</html>
