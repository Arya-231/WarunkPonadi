<?php
session_start();
require_once __DIR__.'/../config/koneksi.php';

// sudah login
if (isset($_SESSION['user'])) {
    header('Location: timeline.php'); exit;
}

// funsion helper flash message
function flash(string $key = '', string $value = '') {
    if ($key === '') return $_SESSION['flash'] ?? [];
    if ($value === '') {
        $msg = $_SESSION['flash'][$key] ?? '';
        unset($_SESSION['flash'][$key]);
        return $msg;
    }
    $_SESSION['flash'][$key] = $value;
}

// proses POST di file terpisah (mis. auth.php)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validasi CSRF
    if (!hash_equals($_SESSION['csrf'] ?? '', $_POST['csrf'] ?? '')) {
        flash('error', 'Invalid CSRF token');
    } else {
        // ... (kode cek email & password) ...
        $stmt = $db->prepare('SELECT * FROM users WHERE email = :e OR username = :e LIMIT 1');
        $stmt->execute([':e' => $_POST['email']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['user'] = $user;
            header('Location: timeline.php');   // sukses
            exit;
        }
        flash('error', 'Email / password salah.');
    }
    // selalu redirect kembali → browser akan minta halaman baru + token baru
    // ambil url "next" kalau ada
    $redirect = $_GET['next'] ?? 'timeline.php';
    header("Location: $redirect");
    exit;
}

// bikin token baru UNTUK form yang akan ditampilkan
$csrf = bin2hex(random_bytes(32));
$_SESSION['csrf'] = $csrf;
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <div class="card shadow-sm" style="width:22rem;">
    <div class="card-body">
      <h5 class="card-title text-center mb-4">Login</h5>

      <?php if ($msg = flash('error')): ?>
          <div class="alert alert-danger"><?= htmlspecialchars($msg) ?></div>
      <?php endif; ?>

      <form method="POST" action="">
          <input type="hidden" name="csrf" value="<?= $csrf ?>">
          <div class="mb-3">
              <label class="form-label">Email / Username</label>
              <input type="email" class="form-control" name="email" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required>
          </div>
          <button class="btn btn-success w-100">Masuk</button>
          <div class="text-center mt-3">
              Belum punya akun? <a href="../public/register.php">Daftar</a>
          </div>
      </form>
    </div>
  </div>
</body>
</html>