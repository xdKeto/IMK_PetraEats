<?php

class ListToko{
    private $ID_Toko;
    private $namaToko;
    private $email;
    private $password;
    private $statusTokoAktif;

    function setNama($name){
        $this->namaToko = $name;
    }

    function getNama($namaToko){
        // $sql = "SELECT * FROM list_toko WHERE namatoko=?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$this->namatoko]);
        // $rowCount = $stmt->rowCount();
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // return $result
    }
    function setEmail($email){
        $this->email = $email;
    }
    function getEmail(){
        // $sql = "SELECT * FROM list_toko WHERE email=?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$this->email]);
        // $rowCount = $stmt->rowCount();
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // return $result
    }
    function setPassword($pass){
        $this->password = password_hash($pass, PASSWORD_DEFAULT);
    }
    function verifyPassword($email) {
        // $sql = "SELECT password FROM mahasiswa WHERE email = ?";
        // $stmt = $this->pdo->prepare($sql);
        // $stmt->execute([$this->email]); 
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // return password_verify($pass, $result['password']);  
    }

    function konfirmPassword($id,$msg){

    }
    function setStatusTokoAktif($StatusTokoAktif){

    }

    function getStatusTokoAktif(){

    }
}

?>