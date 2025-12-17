<?php
session_start();                       // 1. siap-siap cek login
include '../includes/header.php';
include '../includes/nav.php';
?>

<div class="container mt-5">
  <h2 class="mb-4">Kategori Makanan</h2>

  <div class="row">
    <!-- loop produk (bisa dari DB atau hard-code dulu) -->
    <?php
    // contoh hard-code 3 produk
    $foods = [
      ['id'=>1, 'nama'=>'Pecel', 'harga'=>15000, 'gambar'=>'../assets/img/p-1.png'],
      ['id'=>2, 'nama'=>'Sate Ayam', 'harga'=>18000, 'gambar'=>'../assets/img/p-2.png'],
      ['id'=>3, 'nama'=>'Nasi Kuning', 'harga'=>16000, 'gambar'=>'../assets/img/p-3.png']
    ];

    foreach ($foods as $f): ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="<?= $f['gambar'] ?>" class="card-img-top" alt="<?= $f['nama'] ?>">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= $f['nama'] ?></h5>
            <p class="card-text mb-2">Rp <?= number_format($f['harga']) ?></p>

            <!-- Tombol dinamis -->
            <?php if (isset($_SESSION['user'])): ?>
              <a href="beli.php?id=<?= $f['id'] ?>" class="btn btn-success mt-auto">Beli Sekarang</a>
            <?php else: ?>
              <a href="login.php?next=katmknn.php" class="btn btn-outline-warning mt-auto">Login dulu</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php include '../includes/footer.php'; ?>