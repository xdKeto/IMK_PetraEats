<?php

class Menu {
    private $ID_Menu;
    private $namaMenu;
    private $harga;
    private $statusTersedia;

    function setNamaMenu($name){
        $this->namaMenu = $name;
    }

    function getNamaMenu(){
<<<<<<< Updated upstream
        // $sql = "SELECT * FROM menu WHERE namamenu=?";
        // $stmt = $this->pdo->prepare($sql);
        // $stmt->execute([$this->namaMenu]);
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // return $result;
=======
    
>>>>>>> Stashed changes
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

    // $cart= []
    function addToCart($menu_id, $quantity, $price){
        // global $cart;
    
        // $found = false;
        // for ($i = 0; $i < count($cart); $i++) {
        //     if ($cart[$i]['menu_id'] == $menu_id) {
        //         $cart[$i]['quantity'] += $quantity;
        //         $cart[$i]['price'] += $price;
        //         $found = true;
        //         break;
        //     }
        // }
        // if (!$found) {
        //     $cart[] = [
        //         'menu_id' => $menu_id,
        //         'quantity' => $quantity
        //         'price' => $price
        //     ];
    }


    function checkCart(){
        // global $cart;
    
        // if (!empty($cart)) {
        //     return true;
        // } else {
        //     return false;
        // }
    }

    function getCart(){
    //    return $cart
    }

    function getMenu($id_toko) {
        // $sql = "SELECT * FROM menu WHERE list_toko_id_toko=?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id]);
        // $rowCount = $stmt->rowCount();
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // if ($rowCount > 0) {
        //     return $result;
        // }
    }
}
?>
