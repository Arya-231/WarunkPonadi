<?php

require_once "function.php";
$id = $_GET["id"];

$produk = view("SELECT * FROM produk WHERE id_produk=$id")[0];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Ponadi</title>
    <link rel="icon" href="IMG/LOGO.png" style="width: 20px; height: 30px;">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Puppies+Play&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="">

    <style>
    .product-image {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .product-details {
      background-color: #f9f9f9;
      border-radius: 10px;
      padding: 20px;
    }

    .product-description {
      margin-top: 20px;
    }

    .rating-stars {
      color: #FFD700;
    }

    .add-to-cart-btn {
      background-color: #ff6347;
      color: white;
    }

    .add-to-cart-btn:hover {
      background-color: #e5533d;
    }

    .related-products img {
      border-radius: 10px;
    }

    .price-tag {
      color: #ff6347;
      font-size: 1.5em;
      font-weight: bold;
    }
  </style>
</head>
    
<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(255, 255, 255); box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            <div class="container" style="font-family: Poppins, sans-serif;">
            <a class="navbar-brand d-flex align-items-center me-0" href="#">
                <img src="IMG/LOGO.png" class="d-inline-block align-top" alt="Logo">
            </a>
            <a class="navbar-brand d-flex mt-3 pe-3 ms-0 " href="Landingpage.php">
                <span style="font-family: Puppies Play, cursive; font-size: 30px;" class="mt-3">Warunk Ponadi</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false  data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                    Kategori
                    </a>
                    <ul class="dropdown-menu">
                        <li> <a href="katmknn.php"><button class="dropdown-item" type="button">Makanan</button></a></li>
                        <li> <a href="katminum.php"><button class="dropdown-item" type="button">Minuman</button></a></li>
                        
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="halbantuan.html">Bantuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#5">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="halpmsanan.html">Pesanan</a>
                </li>
                </li>
                <a href="frmlogn.html" class="btn btn-warning rounded-5 p-1 ps-3 pe-3 btn-sm m-1 ">Masuk</a>
                <a href="frmdftr.html" class="btn btn-warning rounded-5 p-1 ps-3 pe-3 btn-sm m-1  ">Daftar</a>
                </ul>
            </div>
            </div>
    </nav>

  <div class="container" style="margin-top: 180px;">
    <div class="row">
      <!-- Product Image Section -->
      <div class="col-md-6">
        <img src="IMG/<?= $produk['gambar_produk'];?>" alt="Product Image" class="product-image">
      </div>

      <!-- Product Details Section -->
      <div class="col-md-6 product-details">
        <h2><?= $produk['nama_produk'];?></h2>
        <div class="rating">
          <span class="rating-stars">★★★★☆</span> <span>(120 reviews)</span>
        </div>
        <p class="price-tag">Rp.<?= $produk['harga_produk'];?></p>
        <p class="product-description">
        <?= $produk['deskripsi'];?>
        </p>

        <div class="mb-3">
          <label for="quantity" class="form-label">Jumlah</label>
          <input type="number" min="1" class="form-control w-25" id="quantity" value="1">
        </div>

        <button class="btn add-to-cart-btn btn-lg w-100">Tambahkan ke Keranjang</button>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
