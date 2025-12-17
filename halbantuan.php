<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Ponadi</title>
    <link rel="icon" href="/ASET FOTO/LOGO.png" style="width: 20px; height: 30px;">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Puppies+Play&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="LP.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .hero {
            background: linear-gradient(to right, #ff6347, #ffa07a);
            color: white;
            padding: 70px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.25rem;
            margin-top: 15px;
        }

        .search-bar {
            margin-top: -60px;
            display: flex;
            justify-content: center;
            padding: 30px;
        }

        .search-bar input {
            width: 60%;
            padding: 15px;
            border-radius: 30px;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
        }

        .help-content {
            padding: 60px 0;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .help-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 20px;
            flex: 1 1 30%;
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .help-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .help-card i {
            font-size: 3rem;
            color: #ff6347;
            margin-bottom: 20px;
        }

        .help-card h3 {
            font-size: 1.75rem;
            margin-bottom: 15px;
            color: #ff6347;
        }

        .help-card p {
            font-size: 1rem;
            color: #6c757d;
        }

        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }

        .footer p {
            margin: 0;
            font-size: 1rem;
        }
    </style>
<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(255, 255, 255); box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            <div class="container" style="font-family: Poppins, sans-serif;">
            <a class="navbar-brand d-flex align-items-center me-0" href="Landingpage.php">
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
                        <li> <a href="katmknn.html"><button class="dropdown-item" type="button">Makanan</button></a></li>
                        <li> <a href="katminum.html"><button class="dropdown-item" type="button">Minuman</button></a></li>
                        
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="halbantuan.php">Bantuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#5">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="halpmsanan.php">Pesanan</a>
                </li>
                </li>
                <a href="frmlogn.php" class="btn btn-warning rounded-5 p-1 ps-3 pe-3 btn-sm m-1 ">Masuk</a>
                <a href="frmdftr.php" class="btn btn-warning rounded-5 p-1 ps-3 pe-3 btn-sm m-1  ">Daftar</a>
                </ul>
            </div>
            </div>
    </nav>

    <section class="hero" style="margin-top: 105px;">
        <div class="container">
            <h1>Pusat Bantuan</h1>
            <p>Temukan solusi untuk pertanyaan Anda seputar makanan dan pesanan.</p>
        </div>
    </section>

    <div class="search-bar">
        <input type="text" class="form-control" placeholder="Cari pertanyaan atau masalah...">
    </div>

    <div class="help-content container">
        <div class="help-card">
            <i class="fas fa-box-open"></i>
            <h3>Pelacakan Pesanan</h3>
            <p>Pelajari cara melacak status pesanan makanan Anda dan mengetahui kapan akan sampai.</p>
        </div>
        <div class="help-card">
            <i class="fas fa-undo-alt"></i>
            <h3>Pengembalian Produk</h3>
            <p>Cari tahu bagaimana cara mengembalikan produk makanan yang telah Anda beli.</p>
        </div>
        <div class="help-card">
            <i class="fas fa-credit-card"></i>
            <h3>Pembayaran & Tagihan</h3>
            <p>Informasi tentang metode pembayaran untuk pembelian makanan dan cara mengelola tagihan Anda.</p>
        </div>
        <div class="help-card">
            <i class="fas fa-user-cog"></i>
            <h3>Pengaturan Akun</h3>
            <p>Ketahui cara memperbarui informasi akun Anda dan menjaga keamanan.</p>
        </div>
        <div class="help-card">
            <i class="fas fa-phone-alt"></i>
            <h3>Hubungi Kami</h3>
            <p>Jika Anda memerlukan bantuan lebih lanjut, jangan ragu untuk menghubungi kami.</p>
        </div>
        <div class="help-card">
            <i class="fas fa-utensils"></i>
            <h3>Menu dan Pilihan</h3>
            <p>Jelajahi berbagai menu makanan yang tersedia dan pilih yang paling sesuai dengan selera Anda.</p>
        </div>
    </div>

    <section id="5">     
        </div>
        <footer style="margin-top: 300px;">
            <div class="container" style="font-family: poppins;">
                <div class="row">

                    <div class="col-md-4 footer-address">
                        <h5>Alamat</h5>
                        <p>Jl.Patimura No. 12, Surabaya, Indonesia</p>
                    </div>
                    
                    <div class="col-md-4 footer-contact">
                        <h5>Kontak</h5>
                        <p>Email: warunkponadi@gmail.com</p>
                        <p>Telepon: +621 0445 6789</p>
                    </div>
        
                    <div class="col-md-4">
                        <h5>Ikuti Kami</h5>
                        <div class="social-icons">
                            <a href="#" class="fab fa-facebook-f" aria-label="Facebook"></a>
                            <a href="#" class="fab fa-twitter" aria-label="Twitter"></a>
                            <a href="#" class="fab fa-instagram" aria-label="Instagram"></a>
                        </div>
                    </div>
                </div>
                <hr class="my-4" style="border-color: rgba(255, 255, 255, 0.3);">
                <p>&copy; 2024 Perusahaan Kami. All Rights Reserved.</p>
            </div>
        </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>

    


    
    

