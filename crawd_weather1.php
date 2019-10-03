
<?php
include('simple_html_dom.php');

$html=file_get_html('https://www.weather-forecast.com/locations/Hanoi/forecasts/latest');


$t= $html->find('td.temp-color1',0);
$t1= $t->innertext();
$t2=preg_replace('/\D/',"",$t1 );


$w=$html->find('text.wind-icon-val',0);
$w1=preg_replace('/\D/',"",$w);
$w2=substr($w1,0,2);

$h=$html->find('tr.b-forecast__table-humidity',0);
$h1=$h->find('span.b-forecast__table-value',0);
$h2=preg_replace('/\D/',"",$h1);


