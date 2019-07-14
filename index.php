<?php include 'koneksi.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
    .hello{
      background-color: maroon;
    }
    </style>
    <title>Mata Lensa</title>
  </head>
  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-md navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand text-light" href="#">Mata Lensa</a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse navbar-right" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-light " href="index2.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index3.html">About</a>
            </li> 
          </ul>
        </div> 
      </nav>
    <!-- Akhir Navbar -->

    <!-- JumboTron -->
    <div class="jumbotron text-center">
      <img src="img/asd.png" class="rounded-circle" >
      <h1>Mata Lensa</h1>
      <p> Frame Your Life !</p>
    </div>
    <!-- Akhir Jumbtro -->

  
    <!-- Gallery -->
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center" margin>Gallery</h2>
            <hr>
          </div> 
        </div>

        <div class="row">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="la.jpg" alt="Los Angeles" width="1100" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="chicago.jpg" alt="Chicago" width="1100" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="ny.jpg" alt="New York" width="1100" height="500">
                  </div>
                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
        </div>
      </div>

    </section>
    <!-- Akhir Galery -->
   
    <!-- Box gambar -->
    <section class="box">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                <h2 class="text-center" margin>Other</h2>
                
              </div> 
          </div>
          <div class="row">
            <!-- Proses penampilan gambar -->
            <?php 
            $produk = mysqli_query($conn, "SELECT * FROM produk");
            while($hasil = mysqli_fetch_array($produk)){
            ?>
              <div class="box-gambar">
                <img src="gambar/<?php echo $hasil['foto']; ?>" />
              </div> 
          <?php } ?>
              <!-- Akhir Proses -->
        </div>
      </div>
      
     
    
    </section>
    <!-- Akhir Box -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>