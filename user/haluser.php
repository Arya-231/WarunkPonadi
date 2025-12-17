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
    
<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(255, 255, 255); box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            <div class="container" style="font-family: Poppins, sans-serif;">
            <a class="navbar-brand d-flex align-items-center me-0" href="#">
                <img src="../IMG/LOGO.png" class="d-inline-block align-top" alt="Logo">
            </a>
            <a class="navbar-brand d-flex mt-3 pe-3 ms-0 " href="#">
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
                    <a class="nav-link active" aria-current="page" href="halbantuan.php">Bantuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#5">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="halpmsanan.php">Pesanan</a>
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

    <div id="carouselExampleInterval" class="carousel slide" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); margin-top: 100px;" data-bs-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                <img src="../IMG/G-1.jpg" class="d-block w-100" alt="1" style="box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5), inset 0 0 20px rgba(255, 255, 255, 0.5);;">
                <div class="position-absolute bottom-0 start-0 m-5" style="color: aliceblue; font-family: poppins,sans-serif;">
                    <h5 style="font-size: 55px;">Selamat Datang Di Warung Ponadi </h5>
                    <P style="font-size: 20px;" >Temukan dan Nikmati Berbagai<br>
                        Makanan dan Minuman dari Resep Rahasia Ponadi!</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../IMG/G-2.png" class="d-block w-100" alt="2">
                <div class="position-absolute top-50 start-50 translate-middle" style="color: aliceblue;" >
                    <h5 style="font-family: Lobster,sans-serif; height: 100px; line-height: 100px; text-align: center; font-size: 75px; text-shadow: 1px 8px 4px rgba(0, 0, 0, 0.5); ">Promo Spesial!</h5></a>
                    <p style="margin: 20px;margin-bottom: 50px; margin-top: 20px; font-size: 20px;">Nikmati diskon hingga 50% untuk berbagai makanan dan minuman favorit Anda!</p>
                    <a href="produk.php"><button type="button" class="btn btn-success position-absolute top-10 start-50 translate-middle rounded-5 p-1 ps-5 pe-5 btn-sm" style="font-size: 20px; font-family: poppins;">Belanja Sekarang</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../IMG/G-3.png" class="d-block w-100" alt="3">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    <h1 class="text-center m-5 " style="font-family: Lobster,sans-serif; font-size: 45px; text-shadow: 1px 3px 4px rgba(0, 0, 0, 0.5);">Hidangan Spesial</h1>
    <div class="product-grid position-relative bottom 50 start-50 translate-middle-x" style="font-family: poppins,sans-serif;">
        <div class="product">
            <img src="../IMG/p-1.png" class="card-img-top" alt="Product Image 1">
            <div class="product-info">
                <h3>Pecel</h3>
                <p style="font-size: 12px;">Pecel khas Ponadi adalah sajian tradisional Indonesia yang penuh cita rasa. Hidangan ini terdiri dari sayuran segar yang direbus, seperti kacang panjang, tauge, dan bayam, disajikan dengan bumbu pecel yang kental dan kaya rasa.</p>
                <a href="#" class="buy-button">Beli Sekarang</a>
            </div>
        </div>
        <div class="product">
            <img src="../IMG/p-2.png" class="card-img-top" alt="Product Image 2">
            <div class="product-info">
                <h3>Sate Ayam</h3>
                <p style="font-size: 12px;">Sate ayam adalah potongan daging ayam yang ditusuk lalu dipanggang, disajikan dengan saus kacang yang gurih dan manis. Biasanya dilengkapi dengan lontong, bawang goreng, dan acar.</p>
                <a href="#" class="buy-button">Beli Sekarang</a>
            </div>
        </div>
        <div class="product">
            <img src="../IMG/p-3.png" alt="Product Image 3">
            <div class="product-info">
                <h3>Nasi Kuning</h3>
                <p style="font-size: 12px;">Nasi Kuning khas Ponadi adalah nasi harum berwarna kuning cerah, dimasak dengan santan dan rempah-rempah. Disajikan dengan lauk-pauk seperti ayam goreng, telur dadar, dan sambal, serta pelengkap seperti kerupuk dan sayur. Rasanya gurih dan nikmat.</p>
                <a href="#" class="buy-button">Beli Sekarang</a>
            </div>
        </div>
    </div>

    <h1 class="text-center mt-5 " style="font-family: Lobster,sans-serif; font-size: 45px; text-shadow: 1px 3px 4px rgba(0, 0, 0, 0.5);">Penyegar Tenggorokan</h1>

    <div class="product-grid position-relative bottom 50 start-50 translate-middle-x" style="font-family: poppins,sans-serif; margin-top: 60px;">
        <div class="product">
            <img src="../IMG/EsCendoL.jpg" alt="Product Image 1">
            <div class="product-info">
                <h3>Es Dawet</h3>
                <p style="font-size: 12px;">Minuman ini terbuat dari campuran santan, gula kelapa atau gula merah cair, dan cendol—buliran kecil dari tepung beras atau tepung tapioka yang biasanya berwarna hijau. </p>
                <a href="#" class="buy-button">Beli Sekarang</a>
            </div>
        </div>
        <div class="product">
            <img src="../IMG/redbull.jpg" alt="Product Image 2">
            <div class="product-info">
                <h3>Es Strong</h3>
                <p style="font-size: 12px;">Es Red Bull campur sirup adalah perpaduan menyegarkan antara minuman berenergi Red Bull dan sirup rasa pilihan. Minuman ini menawarkan sensasi energi yang menyegarkan dari Red Bull dengan tambahan rasa manis dan beragam cita rasa dari sirup, menciptakan pengalaman yang menyenangkan dan memuaskan.</p>
                <a href="#" class="buy-button">Beli Sekarang</a>
            </div>
        </div>
        <div class="product">
            <img src="../IMG/sc.jpg" alt="Product Image 3">
            <div class="product-info">
                <h3>Es Oyen</h3>
                <p style="font-size: 12px;">Es Oyen adalah minuman es campur yang memadukan berbagai bahan segar dalam satu gelas. Minuman ini terkenal karena kombinasi bahan-bahan yang beragam, seperti buah-buahan, jeli, dan sirup, yang menciptakan pengalaman rasa yang menyegarkan dan memuaskan.</p>
                <a href="#" class="buy-button">Beli Sekarang</a>
            </div>
        </div>
    </div>

    <h1 class="text-center mt-5 " style="font-family: Lobster,sans-serif; font-size: 45px; text-shadow: 1px 3px 4px rgba(0, 0, 0, 0.5);">Order Sekarang</h1>
    <p class="text-center " style="font-family: 'poppins';">Pilih metode pemesanan Anda</p>

    <!-- Order Cards -->
    <div class="card-container">
        <!-- Online Order Card -->
        <a href="https://web.whatsapp.com/">
            <div class="order-card order-card-online">
            <i class="fas fa-shopping-cart"></i>
            <h3>Order Online</h3>
            <p>Mudah dan cepat, pesan produk kami secara online dan kami akan mengirimkannya ke tempat Anda.</p>
            </div>
        </a> 

        <!-- Offline Order Card -->
        <a href="http://g.co/kgs/W1nkpnC">
            <div class="order-card order-card-offline">
            <i class="fas fa-store"></i>
            <h3>Order Offline</h3>
            <p>Kunjungi toko kami secara langsung untuk pengalaman berbelanja yang personal dan mendalam.</p>
            </div>
        </a>

        <!-- Other Options Order Card -->
            <div class="order-card order-card-others">
                <i class="fas fa-cogs"></i>
                <h3>Opsi Lainnya</h3>
            <p>Pilih dari berbagai opsi pemesanan lainnya yang sesuai dengan kebutuhan unik Anda.</p>
             </div> 
    </div>

    <section id="5">
        <div class="container">
           <header>
            <h1 style="text-align: center;">Tentang Kami</h1>
           </header>     
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