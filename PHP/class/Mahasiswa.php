<?php

class Mahasiswa{
    private $nrp;
    private $nama;
    private $email;
    private $password;

    function setNama($name){
        $this->nama = $name;
    }

    function getNama($nama){
        // $sql = "SELECT * FROM mahasiswa WHERE email=?";
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

}

?>