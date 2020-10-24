<?php
include 'koneksi.php';
$koneksi = new database();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- Main Css -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>HomePage@DesignByRudy</title>
</head>
<body>
 
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand logo__icon" href="#">Aerglo <img class="burger__icon" src="../assets/image/Icons/cheese-burger.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul id="navbar" class="navbar-nav mr-auto mb-2 mr-auto ml-auto mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#product">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
          </ul>
           <button type="button" class="btn btn_signin">Sign in</button>
          <a type="button" class="btn btn-outline-primary">Sign up</a>
        </div>
      </div>
    </nav>
    <header class="container">
      <div class="row">
        <div class="col banner__title">
          <div class="title">
            <h1>Aerglo Burger Cheese</h1>
          </div>
          <div class="sub_title">
            <h2>Number 1 in Galaxy</h2>
          </div>
          <div class="sub_text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam delectus quaerat veniam recusandae quasi adipisci enim
              animi voluptatibus vero. Non, sit! Nisi hic accusantium corporis deleniti itaque voluptatem assumenda vel?</p>
          </div>
        </div>
        <div class="col">
          <img class="image__banner" src="../assets/image/Vektor_BurgerBanner.png" alt="">
        </div>
      </div>
    </header>
    <main class="container">
      <div class="row">
        <div class="col">
         <div class="text-center title underline">
           <h1>All Product</h1>
         </div>
    <div class="row row-cols-3 justify-content-center g-5 ml-5 mr-5 product__image">
   <?php 
   foreach($koneksi->tampil_data() as $items){
     ?>
    <div class="d-flex bd-highlight">
    <div class="card product__card"">
      <img src="
      https://images.unsplash.com/photo-1550547660-d9450f859349?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=701&q=80"
      class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title title-one"><?php echo $items['nama_product']; ?></h5>
        <div class="d-flex justify-content-between">
        <h5 class="card-title title-two">Rp. <?php echo $items['harga']; ?></h5>
        <h5 class="cara-title title-three"><?php echo $items['jumlah']; ?> Stock</h5>
        </div>
        
        <p class="card-text"><?php echo $items['keterangan']; ?></p>
        <!-- Button trigger modal -->
        <a type="button" class="btn btn_edit" data-toggle="modal" data-target="#staticBackdrop<?php echo $items['id']; ?>">
          Edit Product
        </a>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop<?php echo $items['id']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="proses.php?action=update" method="post">
                  <div class="input-group mb-3">
                    <input type="hidden" name="id_product" value="<?php echo $items['id']; ?>">
                    <span class="input-group-text" id="basic-addon1">Nama Product</span>
                    <input type="text" class="form-control" name="nama_product" placeholder="Product Name" aria-label="Product Name" value="<?php echo $items['nama_product']; ?>" required aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Jumlah Product</span>
                    <input type="number" min="0" name="jumlah" class="form-control" placeholder="Jumlah Product" aria-label="Jumlah Product" value="<?php echo $items['jumlah']; ?>" required aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">IDR</span>
                    <input type="text" id="rupiah" name="harga" class="form-control" value="<?php echo $items['harga']; ?>" required aria-label="Rupiah">
                  </div>
                  <div class="input-group">
                    <span class="input-group-text">Keterangan Product</span>
                    <textarea class="form-control" name="keterangan"  required aria-label="With textarea" ><?php echo $items['keterangan']; ?></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit_newproduk" class="btn btn-primary">Confirm</button>
                  </div>
                </form>
              </div>      
            </div>
          </div>
        </div>
        <a href="proses.php?action=delete&id=<?php echo $items['id']; ?>" onclick="return confirm ('Apakah Product <?php echo $items['nama_product']; ?> ingin dihapus ?')" class="btn btn_delete">Delete Food</a>
      </div>
    </div>
  </div>  
  <?php } ?>
  
    </div>
        </div>
      </div>
    </main>   
    <section class="form_section">
     <div class="container">
       <div class="text-center mb-4">
         <h1>Form Add Product</h1>
       </div>
       <form action="proses.php?action=add" method="POST">
        <div class="form-group w-75">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nama Product</span>
            <input type="text" class="form-control" name="nama_product" placeholder="Product Name" aria-label="Product Name" required
              aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Jumlah Product</span>
            <input type="number" class="form-control" name="jumlah" placeholder="Jumlah Product" aria-label="Jumlah Product" required
              aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">IDR</span>
            <input type="text" id="rupiah" name="harga" class="form-control" placeholder="Harga Product" required aria-label="Rupiah">
          </div>
          <div class="input-group">
            <span class="input-group-text">Keterangan Product</span>
            <textarea class="form-control" name="keterangan" required aria-label="With textarea"></textarea>
          </div>
          <button type="submit" name="tombol" class="btn btn_edit mt-3">Submit Product</button>
        </div> 
      </form>
    </section>
    
    <footer>
      <hr>
        <div class="footer text-center">
          <p>Rudy Galih@Balikpapan2020</p>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
        integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD"
        crossorigin="anonymous"></script>
        <script>
      let navbar = document.getElementById("navbar");
      let nav_item = navbar.getElementsByClassName("nav-link");
        for (let i = 0; i < nav_item.length; i++) {
          nav_item[i].addEventListener("click", function () {
            let current = document.getElementsByClassName("active");       
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
          });
        }
        </script>
    
    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
</body>

</html>