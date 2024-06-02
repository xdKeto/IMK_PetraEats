<?php
require_once "../../connect.php";


class Transaksi
{
    private $ID_Transaksi;
    private $totalHarga;
    private $statusPesanan;
    private $buktiBayar;
    private $tanggal;

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

    function getStatusPesanan()
    {
    }
    function getTransaksi($id_toko)
    {
        // $sql = "SELECT * FROM Transaksi WHERE list_toko_id_toko=?";
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
        // $this->buktiBayar = "Proof of payment saved successfully."; // can be other type like file, img, etc.
    }

    function Bayar($id)
    {
        // // Check if the transaction is valid
        // if ($this->cekTransaksi($id)) {
        //     // Retrieve the transaction
        //     $transaction = $this->getTransaksi($id);

        //     $transaction->setStatusPesanan('Proses');
        // }
    }

    function createPesanan() {
        // $sql = "INSERT INTO detail_transaksi (id_transaksi, kuantitas, subtotalharga, id_menu) VALUES (?, ?, ?, ?)";
        // $stmt = $this->pdo->prepare($sql);
        // $stmt->execute([$this->nrp, $msg]);

         // if ($rowCount > 0) {
        //     return $result;
        // }
    }
}