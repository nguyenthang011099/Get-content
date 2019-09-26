<?php

    $dbServername="carexp.net";
    $dbUsername="nguyenminhthang";
    $dbPassword="I1yYEfSC4HGTN9Vn";
    $dbName="dev_meteorology3";
$conn = new mysqli( $dbServername, $dbUsername, $dbPassword, $dbName );
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully"."\n";
?>
