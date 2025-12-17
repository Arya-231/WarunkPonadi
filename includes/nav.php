<?php session_start(); // <-- tambahkan ini di baris paling atas file nav.php ?>
<nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(255, 255, 255); box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
    <div class="container" style="font-family: Poppins, sans-serif;">
        <a class="navbar-brand d-flex align-items-center me-0"
            href="<?php echo isset($_SESSION['user']) ? 'timeline.php' : 'index.php'; ?>">
            <img src="../assets/img/LOGO.png" class="d-inline-block align-top" alt="Logo">
        </a>
        <a class="navbar-brand d-flex mt-3 pe-3 ms-0"
            href="<?php echo isset($_SESSION['user']) ? 'timeline.php' : 'index.php'; ?>">
            <span style="font-family: Puppies Play, cursive; font-size: 30px;" class="mt-3">Warunk Ponadi</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="katmknn.php">Makanan</a></li>
                        <li><a class="dropdown-item" href="katminum.php">Minuman</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="halbantuan.php">Bantuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#5">Tentang Kami</a>
                </li>

                <!-- TOMBOL DINAMIS : tanpa merusak tampilan asli -->
                <?php if (isset($_SESSION['user'])): ?>
                    <a href="profile.php"   class="btn btn-warning rounded-5 p-1 ps-3 pe-3 btn-sm m-1">Profil</a>
                    <a href="cart.php"     class="btn btn-warning rounded-5 p-1 ps-3 pe-3 btn-sm m-1">Keranjang</a>
                    <a href="../user/proses-logout.php"   class="btn btn-outline-danger rounded-5 p-1 ps-3 pe-3 btn-sm m-1">Logout</a>
                <?php else: ?>
                    <a href="../public/login.php"    class="btn btn-warning rounded-5 p-1 ps-3 pe-3 btn-sm m-1">Masuk</a>
                    <a href="../public/register.php" class="btn btn-warning rounded-5 p-1 ps-3 pe-3 btn-sm m-1">Daftar</a>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>