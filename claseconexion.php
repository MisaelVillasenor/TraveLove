


<?php
    $server = '10.209.81.2';
    $username = '1006416_nm87030';
    $password = 'Utd_2020';
    $database = '1006416-66';
 
    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
    } catch (PDOException $e) {
        
        die('Conexión fallida: '.$e->getMessage());
    }

?>