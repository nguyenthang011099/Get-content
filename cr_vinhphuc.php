
<?php
include('simple_html_dom.php');
require_once "dbCon.php";

$html=file_get_html('https://www.weather-forecast.com/locations/Vinh-Phuc/forecasts/latest');


$t= $html->find('td.temp-color1',0);
if($t==null){
    $t=$html->find('td.temp-color2',0);
}
$t1= $t->innertext();
$t2=preg_replace('/\D/',"",$t1 );


$w=$html->find('text.wind-icon-val',0);
$w1=preg_replace('/\D/',"",$w);
$w2=substr($w1,0,2);
if($w2>30){
    $w2=substr($w1,0,1);
}

$h=$html->find('tr.b-forecast__table-humidity',0);
$h1=$h->find('span.b-forecast__table-value',0);
$h2=preg_replace('/\D/',"",$h1);


$d=$html->find('tr.b-forecast__table-summary',0);
$d1=$d->find('div.b-forecast__text-limit',0);
$d2=$d1->innertext();




$qr= "INSERT INTO VinhPhuc (Temperature, Humid, Wind, Description )
    VALUES ('$t2','$h2','$w2','$d2')";


if ($conn->query($qr) === TRUE) {
    echo "New record created successfully"."\n";
} else {
    echo "Error: " . $qr . "<br>" . $conn->error;
}

$conn->close();
