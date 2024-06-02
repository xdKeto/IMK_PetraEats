<?php
require_once "../../connect.php";


class Transaksi
{
    private $ID_Transaksi;
    private $totalHarga;
    private $statusPesanan;
    private $buktiBayar;

    function setStatusPesanan($msg)
    {
        $this->statusPesanan = $msg;
    }

    function getStatusPesanan()
    {
    }
    function getTransaksi($id)
    {
        // $sql = "SELECT * FROM Transaksi WHERE id_transaksi=?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id]);
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