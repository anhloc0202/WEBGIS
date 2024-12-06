<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'taikhoan';

   $conn = new mysqli(hostname: $server, username: $username, password: $password, database: $database);
   if ($conn) {
    mysqli_query(mysql: $conn,query: 'SET NAMES "utf8"');
    echo'';
    } else {
         echo 'Kết nối thất bại';
   }
?>