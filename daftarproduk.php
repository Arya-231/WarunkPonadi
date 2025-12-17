<?php
include 'koneksi.php';

// Ambil data produk dari database
$query = "SELECT * FROM products";
$stmt = $pdo->prepare($query);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>

<h1>Daftar Produk</h1>

<a href="tambah_produk.php">Tambah Produk Baru</a>

<div class="product-list">
    <?php if (count($products) > 0): ?>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['category']; ?></td>
                <td>Rp <?php echo number_format($product['price'], 0, ',', '.'); ?></td>
                <td><img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" width="100"></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Tidak ada produk yang tersedia.</p>
    <?php endif; ?>
</div>

</body>
</html>
