<?php

    $dbServername="carexp.net";
    $dbUsername="nguyenminhthang";
    $dbPassword="I1yYEfSC4HGTN9Vn";
    $dbName="dev_meteorology3";


$conn = new mysqli( $dbServername, $dbUsername, $dbPassword, $dbName );
//mysqli_set_charset($conn,'UTF8');

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully"."\n";
?>
