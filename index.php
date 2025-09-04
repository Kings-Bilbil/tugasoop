<?php
// index.php — Halaman utama
$page = $_GET['page'] ?? '';
if ($page === 'home') {
    header('Location: /home.php');
    exit;
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Index PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{font-family:system-ui,Segoe UI,Arial,sans-serif;max-width:720px;margin:40px auto;padding:0 16px}
    a{text-decoration:none}
    .card{border:1px solid #ddd;border-radius:12px;padding:16px}
  </style>
</head>
<body>
  <h1>Halo, selamat datang di index! 👋</h1>
  <div class="card">
    <p>Berikut merupakan halaman index sederhana:</p>
    <ul>
      <li><a href="/home.php">Home</a></li>
      <li><a href="/Hasil1.php">Tugas 1</a><li>
    </ul>
  </div>
</body>
</html>
