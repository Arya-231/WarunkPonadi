<?php

require_once "../function.php";

$produk = view("SELECT * FROM produk WHERE kategori_produk='minuman'");

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
    <link rel="stylesheet" href="../LP.css">
    <style>
    .btn-buy {
        background-color: #ff5733;
        color: #fff;
        border-radius: 20px;
        padding: 10px 20px;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-buy:hover {
        background-color: #ff5733;
    }

    .product-card img {
      width: 100%;
      border-radius: 10px;
    }

    .product-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 10px;
      margin-bottom: 20px;
      background-color: #fff;
    }

    .price-tag {
      color: #ff6347;
      font-size: 1.2em;
      font-weight: bold;
    }

    .product-card {
            border: 1px solid #eee;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
        }

        .product-card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #eee;
        }

        .product-card h6 {
            font-size: 1.2rem;
            margin: 15px 0;
        }

        .btn-buy {
            background-color: #FF5733;
            color: white;
            border-radius: 25px;
            padding: 8px 20px;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-buy:hover {
            background-color: #ff763f;
        }

    </style>
<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(255, 255, 255); box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            <div class="container" style="font-family: Poppins, sans-serif;">
            <a class="navbar-brand d-flex align-items-center me-0" href="Landingpage.html">
                <img src="../IMG/LOGO.png" class="d-inline-block align-top" alt="Logo">
            </a>
            <a class="navbar-brand d-flex mt-3 pe-3 ms-0 " href="../Landingpage.php">
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
                <div class="d-flex align-items-center">
                    <a href="#" class="nav-link" style="font-size: 1.9rem; color: black; transition: color 0.3s ease;">
                        <i class="fas fa-user-circle" 
                           style="font-size: inherit; color: inherit; transition: inherit;"></i>
                    </a>
                </div>
            </div>
            </div>
    </nav>

    <div class="container " style="margin-top: 150px;">
        <div class="row">
        <?php
        $id = 1;
        foreach ($produk as $minuman):
        ?>
            <div class="col-md-4 ">
                <div class="product-card">
                    <img src="../IMG/<?= $minuman['gambar_produk'];?>" alt="Product" class="img-fluid">
                    <h6 class="mt-2"><?= $minuman['nama_produk'];?></h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="price-tag">Rp.<?= $minuman['harga_produk'];?></p>
                        <a href="descproduk.php?id=<?= $minuman["id_produk"]; ?>"><button class="btn-buy">Beli Sekarang</button></a>
                    </div>
                </div>
            </div>
            <?php
        $id++; endforeach;
    ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>

    


    