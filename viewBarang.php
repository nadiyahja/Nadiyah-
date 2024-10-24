<?php require 'barang.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
</head>
<body>
    <h1>BARANG</h1>

    <form method="POST" action="">
        <label for="idBarang">ID Barang:</label>
        <input type="number" id="idBarang" name="idBarang" required>
        <br><br>
        <label for="namaBarang">Nama Barang:</label>
        <input type="teks" id="namaBarang" name="namaBarang">
        <br><br>
        <label for="hargaBarang">Harga Barang:</label>
        <input type="number" id="hargaBarang" name="hargaBarang">
        <br><br>
        <label for="stok">Stok barang:</label>
        <input type="number" id="stok" name="stok" required>
        <br><br>
        <label for="kategoriBarang">Kategori Barang:</label>
        <select id="kategoriBarang" name="kategoriBarang">
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
        <option value="Pakaian">Pakaian</option>
        <option value="Lainnya">Lainnya</option>
        </select>

        <input type="submit" value="Tambah Barang">
    </form>

    <?php
    // Cek apakah form telah disubmit
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ambil data dari form
        $id_barang = $_POST['idBarang'];
        $nama_barang = $_POST['namaBarang'];
        $harga = $_POST['hargaBarang'];
        $stok = $_POST['stok'];
        $kategori = $_POST['kategoriBarang'];

        // Buat objek Barang baru
        $barangBaru = new Barang($id_barang, $nama_barang, $harga, $stok, $kategori);

        // Tambahkan barang ke dalam list
        $listBarang[] = $barangBaru;

        // Hitung stok akhir (akumulasi stok dari semua barang)
        $Stokakhir = 0;
        foreach ($listBarang as $barang) {
            $Stokakhir += $barang->stok;
        }
    }
    ?>

    <?php if (!empty($listBarang)): ?>
        <h2>Stok Akhir: <?php echo $Stokakhir; ?></h2>

        <h2>Daftar Barang</h2>
        <ul>
            <?php foreach ($listBarang as $barang): ?>
                <li>
                    <?php echo "ID: " . $barang->idBarang . ", Nama: " . $barang->namaBarang . ", Stok: " . $barang->stok; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>