<?php
// --- LOGIKA PHP DITEMPATKAN DI SINI ---

// Mendefinisikan kelas untuk Persegi Panjang
class PersegiPanjang {
    // Properti untuk panjang dan lebar
    public $panjang;
    public $lebar;

    /**
     * Metode untuk menghitung luas.
     * @return float|int
     */
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
}

// 1. Buat objek baru dari kelas PersegiPanjang
$persegiPanjang = new PersegiPanjang();

// 2. Atur nilai properti panjang dan lebar
$persegiPanjang->panjang = 4;
$persegiPanjang->lebar = 3;

// 3. Hitung luas dan simpan hasilnya di variabel
$hasilLuas = $persegiPanjang->hitungLuas();

// --- KODE HTML DIMULAI DI BAWAH ---
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Persegi Panjang</title>
    <style>
        body {
            display: flex;
            font-family: sans-serif;
            line-height: 1.6;
            padding: 20px;
            align-items: center;
        }
        .container {
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 5px;
            width: 300px;
            align-items: center;
            
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Hasil Perhitungan</h1>
        
        <!-- Menampilkan hasil dari variabel PHP -->
        <p>Panjang: <?php echo $persegiPanjang->panjang; ?></p>
        <p>Lebar: <?php echo $persegiPanjang->lebar; ?></p>
        <strong>Hasil Luas: <?php echo $persegiPanjang->panjang . " x " . $persegiPanjang->lebar . " = " . $hasilLuas; ?></strong>

    </div>

</body>
</html>

