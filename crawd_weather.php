<?php

include("simple_html_dom.php");

//
//$html= file_get_html("https://www.accuweather.com/en/vn/hanoi/353412/hourly-weather-forecast/353412");
//
//echo $html;

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


echo $w4;



