<?php

class Menu {
    private $ID_Menu;
    private $namaMenu;
    private $harga;
    private $statusTersedia;

    function setNamaMenu($name){
        $this->namaMenu = $name;
    }

    function getNamaMenu($id_Menu){
        // $sql = "SELECT namamenu FROM menu WHERE id_menu=?";
        // $stmt = $this->pdo->prepare($sql);
        // $stmt->execute([$id_menu]);
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // return $result;
    
    }

    function setHarga($Harga){
        $this->harga = $Harga;
    }

    function getHarga(){
        // $sql = "SELECT * FROM menu WHERE harga=?";
        // $stmt = $this->pdo->prepare($sql);
        // $stmt->execute([$this->harga]);
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // return $result;
    }

    function setStatus($Status){
        $this->statusTersedia = $Status;
    }

    function getStatus(){
        // $sql = "SELECT * FROM menu WHERE status=?";
        // $stmt = $this->pdo->prepare($sql);
        // $stmt->execute([$this->statusTersedia]);
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // return $result;
    }

    
}
?>
