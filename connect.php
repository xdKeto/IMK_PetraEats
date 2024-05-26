<?php
//$host = "127.0.0.1"; // IP MySQL nya dimana
$host = "localhost";
$user = "root";
$pass = "";
$db = "petraeats";

$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    //throw new \PDOExeption($e->getMessage(), (int)$e->getCode());
    echo "Error Connect to Database Msg: " . $e->getMessage();
}

/*

Ambil Data
    $sql = "SELECT * FROM TABLE WHERE nrp=? AND nrp2=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nrp1, $nrp2]);
    $rowCount = $stmt->rowCount();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($rowCount > 0) {
        
    }

Update Data
    $sql = "UPDATE TABLE SET nrp1 = ? WHERE nrp2 = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nrp1, $nrp2]);

Delete Data
    $sql = "DELETE FROM TABLE WHERE nrp1 = ? AND nrp2 = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nrp1, $nrp2]);
    
Insert Data
    $sql = "INSERT INTO TABLE VALUES (?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nrp1, $nrp2]);

*/