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

    button {
      width: 100%;
      padding: 12px;
      background: #007bff; /* Warna latar tombol */
      border: none; /* Menghilangkan garis tepi */
      border-radius: 8px;
      color: white; /* Warna teks tombol */
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease; /* Efek transisi warna saat kursor di atasnya */
    }
    button:hover {
      background: #0056b3; /* Menggelapkan warna latar tombol */
    }
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
    <button type="submit" href="/home.php">Home</button>
  </div>
</body>
</html>
