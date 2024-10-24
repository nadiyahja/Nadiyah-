<?php require 'costumer.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costumer</title>
</head>
<body>
    
    <h1>Costumer</h1>

    <form method="POST" action="">
        <label for="idCostumer">ID Costumer :</label>
        <input type="number" id="idCostumer" name="idCostumer" required>
        <br><br>
        <label for="namaCostumer">Nama :</label>
        <input type="teks" id="namaCostumer" name="namaCostumer">
        <br><br>
        <label for="alamat">Alamat :</label>
        <input type="teks" id="alamat" name="alamat">
        <br><br>
        <label for="noTelepon">No.Telepon:</label>
        <input type="tel" id="noTelepon" name="noTelepon">
        <br><br>
        <label for="tanggalBergabung">Tanggal Bergabung:</label>
        <input type="date" id="taggalBergabung" name="tanggalBergabung">
        <br><br>
        <input type="submit" value="Simpan data">
        </form>
</body>
</html>