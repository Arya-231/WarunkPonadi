<?php

require_once __DIR__ . '/../config/koneksi.php';

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $level = filter_input(INPUT_POST, 'level', FILTER_SANITIZE_STRING);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password, level) 
            VALUES (:name, :username, :email, :password, :level)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email,
        ":level" => $level
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: ../public/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern User Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .registration-container {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .registration-container h2 {
            margin-bottom: 1.5rem;
            text-align: center;
            color: #4a4a4a;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            color: #666;
        }

        .form-group input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #6e8efb;
            outline: none;
        }

        .btn {
            display: inline-block;
            width: 100%;
            padding: 0.8rem;
            background: #6e8efb;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #5a75e4;
        }

        .alternate {
            margin-top: 1rem;
            text-align: center;
            font-size: 0.9rem;
        }

        .alternate a {
            color: #6e8efb;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .alternate a:hover {
            color: #5a75e4;
        }
    </style>
</head>
<body>
    <div class="registration-container">
    <p>&larr; <a href="../public/index.php">Home</a>
        <h2>Buat Akun</h2>
        <form action="register.php" method="POST">
            <input type="hidden" name="level" value="user">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input class="form-control" type="text" name="name" placeholder="Nama kamu" />
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-success btn-block" name="register" value="daftar">Register</button>
            <div class="alternate">
                Sudah Punya Akun? <a href="../public/login.php">Login Di Sini</a>
            </div>
        </form>
    </div>
</body>
</html>
