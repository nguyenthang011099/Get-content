
<?php
include('simple_html_dom.php');

$html=file_get_html('https://www.weather-forecast.com/locations/Hanoi/forecasts/latest');


$t= $html->find('td.temp-color1',0);
$t1= $t->innertext();
$t2=preg_replace('/\D/',"",$t1 );


$w=$html->find('text.wind-icon-val',0);
$w1=preg_replace('/\D/',"",$w);
$w2=substr($w1,0,2);


