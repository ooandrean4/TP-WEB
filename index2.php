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


    <title>Mata Lensa</title>
  </head>

  <!-- Validasi Form -->
  <script>

  function fileValidation(){
    var inputfile = document.getElementById('file');
    var filePath = inputfile.value;
    var ekstensi = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!ekstensi.exec(filePath)){
        alert('Upload dengan extensi .jpeg/.jpg/.png/.gif only.');
        inputfile.value = '';
        return false;
    }else{
        //Image preview
        if (inputfile.files && inputfile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(inputfile.files[0]);
        }
    }
  }

  function validasi(){
    var name = document.getElementById('nama').value;
    if(name==""){
      alert('Masukkan Nama Foto !');
      return false;
    }
    else{
      return true;
    }
  }
  
  </script>

  <!-- Akhir Validasi Form -->
  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-md  navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Mata Lensa</a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse navbar-right" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-light" href="index2.php">Home</a>
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

    <!-- Awal Home  -->
    <div class="home">
      <div class="landing-text">
        
        <h1>MATA LENSA</h1>
        <h3>Frame Your Life</h3>

        <form action="" method="post" enctype="multipart/form-data" onsubmit="return validasi();">
          <input type="file" name="foto" id="file" onchange="return fileValidation()" required /><br><br>
          <input type="text" name="nama" placeholder="judul foto" id="nama" ><br><br>
          <input type="submit"class="btn btn-dark" name= "simpan" value="Simpan File" />
        </form>
          
        
    
      </div>
    </div>
    <!-- Akhir Home -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <?php
    if(isset($_POST['simpan'])){
      $folder = './gambar/';
      $nama_p = $_FILES['foto']['name'];
      $sumber_p = $_FILES['foto']['tmp_name'];
      move_uploaded_file( $sumber_p, $folder.$nama_p);
      $insert=mysqli_query($conn, "INSERT INTO produk VALUES (NULL,'".$_POST['nama']."','".$nama_p."',NULL)");
      if($insert){
        echo "<script> alert ('data berhasil di simpan') </script>";
      }else{
        echo "<script> alert ('Gagal') </script>";
      }
    }
    ?>
  </body>
</html>