<?php
require_once "../../connect.php";


class Transaksi
{
    private $ID_Transaksi;
    private $totalHarga;
    private $statusPesanan;


    function setStatusPesanan($msg)
    {
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

    function Bayar()
    {
    }
}
