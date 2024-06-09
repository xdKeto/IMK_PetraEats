<<<<<<< Updated upstream
<?php
require_once "../../connect.php";


class Transaksi
{
    private $ID_Transaksi;
    private $totalHarga;
    private $statusPesanan;
    private $buktiBayar;
    private $tanggal;
    private $ID_Toko;
    private $catatan;

    function setStatusPesanan($msg, $id_transaksi)
    {
        $this->statusPesanan = $msg;

        // $this->statusPesanan = 0;
        // if($msg == 'Konfirmasi') {
        //     $this->statusPesanan = 1;
        // } else if($msg == 'Menunggu Bayar') {
        //     $this->statusPesanan = 2;
        // } else if($msg == 'Ditolak') {
        //     $this->statusPesanan = 3;
        // } else if($msg == 'Proses') {
        //     $this->statusPesanan = 4;
        // } else if($msg == 'Selesai') {
        //     $this->statusPesanan = 5;
        // }


        // $sql = "UPDATE transaksi SET ID_StatusPesanan = $this->statusPesanan WHERE id_transaksi =?"
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_transaksi]);

    }

    function getCatatan($id_transakasi) {
        // $sql = "SELECT catatan FROM transaksi WHERE id_transaksi=?";  
        // $stmt = $this->pdo->prepare($sql);
        // $stmt->execute([$id_transakasi]);
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // return $result;
    }

    function getStatusPesanan($id_transaksi)
    {
    
        // $sql = "SELECT ID_StatusPesanan FROM transaksi WHERE id_transaksi = :id_transaksi";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([':id_transaksi' => $id_transaksi]);

        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if ($result) {
        //     return $result['ID_StatusPesanan'];
        // } else {
        //     return false;
        // }
    }

    function setTransaksi($cart) {
    
        // $sql = "INSERT INTO detail_transaksi (kuantitas, subtotalharga, id_transaksi, menu_id ) VALUES (?, ?, ?, ?)";
        // $stmt = $pdo->prepare($sql);
    
        // $stmt->execute([
        //     'menu_id' => $cart['menu_id'],
        //     'kuantitas' => $cart['quantity'],
        //     'harga' => $cart['price']
        // ]);
    
        // if ($stmt->rowCount() > 0) {
        //     return true; 
        // } else {
        //     return false; 
        // }
    }

    function getListTransaksi($id_toko){
        // $sql = "SELECT * FROM transaksi WHERE list_toko_id_toko=?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko]);
        // $rowCount = $stmt->rowCount();
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if ($rowCount > 0) {
        //     return $result;
        // }
    }

    function getTransaksi($id_transaksi)
    {
        // $sql = "SELECT * FROM transaksi WHERE id_transaksi=?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko]);
        // $rowCount = $stmt->rowCount();
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if ($rowCount > 0) {
        //     return $result;
        // }
    }

    // Mengambil data transaksi dalam sebulan
    function getTransaksiThisMonth($id_toko)
    {
        // $sql = "SELECT SUM(totalHarga) as totalSum FROM Transaksi WHERE MONTH(tanggal) = MONTH(CURDATE()) AND YEAR(tanggal) = YEAR(CURDATE()) WHERE id_toko = ?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko]);
        // $rowCount = $stmt->rowCount();
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if ($rowCount > 0) {
        //     return $result;
        // }
    }

    function getTransaksiThisDay($id_toko, $today)
    {
        // $sql = "SELECT SUM(totalHarga) as totalSum FROM Transaksi WHERE id_toko = ? AND DATE(transaction_date) = ?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko, $today]);
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if ($rowCount > 0) {
        //     return $result;
        // }

    }

    function getDataGraphYear($id_toko)
    {
        // $sql = "SELECT MONTH(tanggal) as month, YEAR(tanggal) as year, SUM(totalHarga) as totalSum 
        // FROM Transaksi 
        // WHERE YEAR(tanggal) = YEAR(CURDATE()) AND id_toko = ? 
        // GROUP BY YEAR(tanggal), MONTH(tanggal)";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko]);
        // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


        // if ($rowCount > 0) {
        //     return $result;
        // }

    }

    function getDataGraphWeek($id_toko)
    {
        // $sql = "SELECT DATE(tanggal) as transactionDate, SUM(totalHarga) as totalSum 
        // FROM Transaksi 
        // WHERE tanggal >= DATE_SUB(CURDATE(), INTERVAL 1 WEEK) AND tanggal < CURDATE() AND id_toko = ?
        // GROUP BY DATE(tanggal)";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko]);
        // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // if ($rowCount > 0) {
        //     return $result;
        // }

    }

    function getTransaksiTotal($id_toko)
    {
        // $sql = "SELECT SUM(totalHarga) as totalSum FROM Transaksi WHERE id_toko = ?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko]);
        // $rowCount = $stmt->rowCount();
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if ($rowCount > 0) {
        //     return $result;
        // }
    }

    function cekTransaksi($id)
    {
        // // Retrieve the transaction
        // $transaction = $this->getTransaksi($id);

        // if ($transaction) {
        //     if ($transaction['statusPesanan'] !== 'Paid') {
        //         return true;
        //     } else {
        //         return false; 
        //     }
        // } else {
        //     return false;
        // }
    }

    function newBukti($msg)
    {
        // $sql = "UPDATE Pesanan SET buktiBayar=? WHERE id_pesanan=?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$buktiBayar, $id]);
        // $rowCount = $stmt->rowCount();
        // return $rowCount > 0;
    }

    function Bayar($id)
    {
        // // Check if the transaction is valid
        // if ($this->cekTransaksi($id)) {
        //     // Retrieve the transaction
        //     $transaction = $this->getTransaksi($id);

        //     $transaction->setStatusPesanan('Proses', $id);
        // }
    }

    function createPesanan()
    {
        // $sql = "INSERT INTO detail_transaksi (id_transaksi, kuantitas, subtotalharga, id_menu) VALUES (?, ?, ?, ?)";
        // $stmt = $this->pdo->prepare($sql);
        // $stmt->execute([$this->nrp, $msg]);

        // if ($rowCount > 0) {
        //     return $result;
        // }
    }

    function confirmTransaksi(){
        
    }
}
=======
<?php
require_once "../../connect.php";


class Transaksi
{
    private $ID_Transaksi;
    private $totalHarga;
    private $statusPesanan;
    private $buktiBayar;
    private $tanggal;
    private $ID_Toko;
    private $catatan;

    function setStatusPesanan($msg, $id_transaksi)
    {
        $this->statusPesanan = $msg;

        // $this->statusPesanan = 0;
        // if($msg == 'Konfirmasi') {
        //     $this->statusPesanan = 1;
        // } else if($msg == 'Menunggu Bayar') {
        //     $this->statusPesanan = 2;
        // } else if($msg == 'Ditolak') {
        //     $this->statusPesanan = 3;
        // } else if($msg == 'Proses') {
        //     $this->statusPesanan = 4;
        // } else if($msg == 'Selesai') {
        //     $this->statusPesanan = 5;
        // }


        // $sql = "UPDATE transaksi SET ID_StatusPesanan = $this->statusPesanan WHERE id_transaksi =?"
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_transaksi]);

    }

    function getCatatan($id_transakasi) {
        // $sql = "SELECT catatan FROM transaksi WHERE id_transaksi=?";  
        // $stmt = $this->pdo->prepare($sql);
        // $stmt->execute([$id_transakasi]);
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // return $result;
    }

    function getStatusPesanan($id_transaksi)
    {
    
        // $sql = "SELECT ID_StatusPesanan FROM transaksi WHERE id_transaksi = :id_transaksi";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([':id_transaksi' => $id_transaksi]);

        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if ($result) {
        //     return $result['ID_StatusPesanan'];
        // } else {
        //     return false;
        // }
    }

    function setTransaksi($cart) {
    
        // $sql = "INSERT INTO detail_transaksi (kuantitas, subtotalharga, id_transaksi, menu_id ) VALUES (?, ?, ?, ?)";
        // $stmt = $pdo->prepare($sql);
    
        // $stmt->execute([
        //     'menu_id' => $cart['menu_id'],
        //     'kuantitas' => $cart['quantity'],
        //     'harga' => $cart['price']
        // ]);
    
        // if ($stmt->rowCount() > 0) {
        //     return true; 
        // } else {
        //     return false; 
        // }
    }

    function getListTransaksi($id_toko){
        // $sql = "SELECT * FROM transaksi WHERE list_toko_id_toko=?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko]);
        // $rowCount = $stmt->rowCount();
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if ($rowCount > 0) {
        //     return $result;
        // }
    }

    function getTransaksi($id_transaksi)
    {
        // $sql = "SELECT * FROM transaksi WHERE id_transaksi=?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko]);
        // $rowCount = $stmt->rowCount();
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if ($rowCount > 0) {
        //     return $result;
        // }
    }

    // Mengambil data transaksi dalam sebulan
    function getTransaksiThisMonth($id_toko)
    {
        // $sql = "SELECT SUM(totalHarga) as totalSum FROM Transaksi WHERE MONTH(tanggal) = MONTH(CURDATE()) AND YEAR(tanggal) = YEAR(CURDATE()) WHERE id_toko = ?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko]);
        // $rowCount = $stmt->rowCount();
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if ($rowCount > 0) {
        //     return $result;
        // }
    }

    function getTransaksiThisDay($id_toko, $today)
    {
        // $sql = "SELECT SUM(totalHarga) as totalSum FROM Transaksi WHERE id_toko = ? AND DATE(transaction_date) = ?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko, $today]);
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if ($rowCount > 0) {
        //     return $result;
        // }

    }

    function getDataGraphYear($id_toko)
    {
        // $sql = "SELECT MONTH(tanggal) as month, YEAR(tanggal) as year, SUM(totalHarga) as totalSum 
        // FROM Transaksi 
        // WHERE YEAR(tanggal) = YEAR(CURDATE()) AND id_toko = ? 
        // GROUP BY YEAR(tanggal), MONTH(tanggal)";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko]);
        // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


        // if ($rowCount > 0) {
        //     return $result;
        // }

    }

    function getDataGraphWeek($id_toko)
    {
        // $sql = "SELECT DATE(tanggal) as transactionDate, SUM(totalHarga) as totalSum 
        // FROM Transaksi 
        // WHERE tanggal >= DATE_SUB(CURDATE(), INTERVAL 1 WEEK) AND tanggal < CURDATE() AND id_toko = ?
        // GROUP BY DATE(tanggal)";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko]);
        // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // if ($rowCount > 0) {
        //     return $result;
        // }

    }

    function getTransaksiTotal($id_toko)
    {
        // $sql = "SELECT SUM(totalHarga) as totalSum FROM Transaksi WHERE id_toko = ?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id_toko]);
        // $rowCount = $stmt->rowCount();
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if ($rowCount > 0) {
        //     return $result;
        // }
    }

    function cekTransaksi($id)
    {
        // // Retrieve the transaction
        // $transaction = $this->getTransaksi($id);

        // if ($transaction) {
        //     if ($transaction['statusPesanan'] !== 'Paid') {
        //         return true;
        //     } else {
        //         return false; 
        //     }
        // } else {
        //     return false;
        // }
    }

    function newBukti($msg)
    {
        // $sql = "UPDATE Pesanan SET buktiBayar=? WHERE id_pesanan=?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$buktiBayar, $id]);
        // $rowCount = $stmt->rowCount();
        // return $rowCount > 0;
    }

    function Bayar($id)
    {
        // // Check if the transaction is valid
        // if ($this->cekTransaksi($id)) {
        //     // Retrieve the transaction
        //     $transaction = $this->getTransaksi($id);

        //     $transaction->setStatusPesanan('Proses', $id);
        // }
    }

    function createPesanan()
    {
        // $sql = "INSERT INTO detail_transaksi (id_transaksi, kuantitas, subtotalharga, id_menu) VALUES (?, ?, ?, ?)";
        // $stmt = $this->pdo->prepare($sql);
        // $stmt->execute([$this->nrp, $msg]);

        // if ($rowCount > 0) {
        //     return $result;
        // }
    }

    function setCart() {
        // if (isset($_SESSION['cart'])) {
        //     return $_SESSION['cart'];
        // }
        // return [];
    }

    function confirmTransaksi(){
        
    }
}
>>>>>>> Stashed changes
