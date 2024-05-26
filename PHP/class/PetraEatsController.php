<?php
require "Transaksi.php";
class PetraEatsController{
    function callSetStatusPesananMakanan($transaksi, $msg){
        $transaksi->setStatusPesanan($msg);
    }

}

?>