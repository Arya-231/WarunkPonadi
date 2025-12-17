<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk Baru</title>
    <style>
        /* Reset default margin & padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            color: #333;
        }

        form {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 16px;
            color: #555;
            margin-bottom: 8px;
        }

        input[type="text"], input[type="number"], input[type="file"] {
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, input[type="number"]:focus, input[type="file"]:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            padding: 12px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-footer {
            text-align: center;
        }

        /* Responsive layout */
        @media (min-width: 768px) {
            form {
                grid-template-columns: 1fr 1fr;
                gap: 20px 40px;
            }

            .form-group.full-width {
                grid-column: span 2;
            }

            input[type="submit"] {
                grid-column: span 2;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Tambah Produk Baru</h1>
    <form action="proses_tambah_produk.php" method="POST" enctype="multipart/form-data">
        <!-- Nama Produk -->
        <div class="form-group">
            <label for="name">Nama Produk:</label>
            <input type="text" name="name" id="name" required placeholder="Masukkan nama produk">
        </div>

        <!-- Kategori Produk -->
        <div class="form-group">
            <label for="category">Kategori:</label>
            <input type="text" name="category" id="category" required placeholder="Masukkan kategori produk">
        </div>

        <!-- Harga Produk -->
        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="number" name="price" id="price" required placeholder="Masukkan harga produk">
        </div>

        <!-- Gambar Produk -->
        <div class="form-group full-width">
            <label for="image">Gambar Produk:</label>
            <input type="file" name="image" id="image" required>
        </div>

        <!-- Submit Button -->
        <input type="submit" value="Tambah Produk">
    </form>

    <div class="form-footer">
        <p><a href="daftar_produk.php">Lihat Semua Produk</a></p>
    </div>
</div>

</body>
</html>
