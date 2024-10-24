<?php
class Customer {
    public $idCustomer;
    public $namaCustomer;
    public $alamat;
    public $noTelepon;
    public $tanggalBergabung;

    public function __construct($idCustomer, $namaCustomer, $alamat, $noTelepon, $tanggalBergabung) {
        $this->idCustomer = $idCustomer;
        $this->namaCustomer = $namaCustomer;
        $this->alamat = $alamat;
        $this->noTelepon = $noTelepon;
        $this->tanggalBergabung = $tanggalBergabung;
    }

    public function tampilkanInfo() {
        echo "ID Customer: " . $this->idCustomer . "<br>";
        echo "Nama: " . $this->namaCustomer . "<br>";
        echo "Alamat: " . $this->alamat . "<br>";
        echo "No Telepon: " . $this->noTelepon . "<br>";
        echo "Tanggal Bergabung: " . $this->tanggalBergabung . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah semua input sudah diisi
    if (isset($_POST['idCostumer'], $_POST['namaCostumer'], $_POST['alamat'], $_POST['noTelepon'], $_POST['tanggalBergabung'])) {
        $customer = new Customer(
            $_POST['idCostumer'],
            $_POST['namaCostumer'],
            $_POST['alamat'],
            $_POST['noTelepon'],
            $_POST['tanggalBergabung']
        );
        echo "<h2>Informasi Customer</h2>";
        $customer->tampilkanInfo();
    } else {
        echo "<p>Mohon isi semua data customer dengan benar.</p>";
    }
}
?>
