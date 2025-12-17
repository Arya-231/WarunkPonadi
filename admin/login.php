<?php
    session_start();
    require "../koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f9fb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }
        .btn-primary {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-footer {
            text-align: center;
            margin-top: 20px;
        }
        .form-footer a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login Admin</h2>
    <form action="proses_login.php" method="POST" novalidate>
        <!-- Email Input -->
        <div class="mb-3">
            <label for="email" class="form-label">Username</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Username" required>
            <div class="invalid-feedback">
                Please enter a valid email address.
            </div>
        </div>

        <!-- Password Input -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
            <div class="invalid-feedback">
                Please enter your password.
            </div>
        </div>


        <!-- Login Button -->
        <button type="submit" class="btn btn-primary" name="loginbtn">Login</button>
    </form>

    <div class="mt-3">

    <?php
    
    if(isset($_POST['loginbtn'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $querry = mysqli_querry ($con,"SELECT * FROM user WHERE username='$username'");

    }
    
    ?>

    </div>

    <!-- Form Footer -->
    <div class="form-footer">
        <p>Belum punya akun? <a href="#">Daftar di sini</a></p>
    </div>
</div>
        

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<!-- Form validation script -->
<script>
    // Bootstrap validation for form
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>

</body>
</html>
