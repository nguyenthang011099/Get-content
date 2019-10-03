<?php

include("simple_html_dom.php");
require_once "dbCon.php";
//if (isset($argc)) {
//    for ($i = 2; $i < $argc; $i++) {
//        echo "Get content successfully in "  . $argv[$i] . "\n";
//

   $html=file_get_html("http://www.nchmf.gov.vn/web/vi-VN/62/19/58/map/Default.aspx");

    //get temprature
    $t1=$html->find("td.forecast_detail",0);
    $t2=$t1->find("strong",0);
    $t3=$t2->innertext;
    // t4 is temprature
    $t4=preg_replace('/\D/',"",$t3 );



    //get description
    $d1=$html->find("td.forecast_detail",1);
    $d2=$d1->find("strong",0);
    $d3=$d2->innertext;


    //get humid
    $h1=$html->find("td.forecast_detail",2);
    $h2=$h1->find("strong",0);
    $h3=$h2->innertext;
    $h4=preg_replace('/\D/',"",$h3 );


    // get V of wind
    $w1=$html->find("td.forecast_detail",3);
    $w2=$w1->find("strong",0);
    $w3= $w2->innertext;
    $w4=preg_replace('/\D/',"",$w3 );

    echo $d3;
    $qr= "INSERT INTO hanoi (Temperature, Humid, Wind, Description )
    VALUES ('$t4','$h4','$w4','$d3')";


    if ($conn->query($qr) === TRUE) {
        echo "New record created successfully"."\n";
    } else {
        echo "Error: " . $qr . "<br>" . $conn->error;
    }

    $conn->close();

//    }
//}
//else {
//    echo "argc and argv disabled\n";
//}





