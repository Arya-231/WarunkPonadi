<?php
include 'Landingpage.php';

// Memeriksa apakah form telah di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    // Mengunggah gambar
    $target_dir = "uploads/";
    $image_name = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $image_name;
    $uploadOk = 1;

    // Memeriksa apakah file adalah gambar
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.";
        $uploadOk = 0;
    }

    // Memeriksa apakah uploadOk bernilai 0 karena error
    if ($uploadOk == 0) {
        echo "Gambar gagal diunggah.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Jika gambar berhasil diunggah, masukkan data produk ke database
            $query = "INSERT INTO products (name, category, price, image) VALUES (:name, :category, :price, :image)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([
                'name' => $name,
                'category' => $category,
                'price' => $price,
                'image' => $target_file
            ]);

            echo "Produk berhasil ditambahkan. <a href='daftar_produk.php'>Lihat Produk</a>";
        } else {
            echo "Terjadi kesalahan saat mengunggah gambar.";
        }
    }
}
?>
