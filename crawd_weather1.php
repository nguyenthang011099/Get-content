
<?php
include('simple_html_dom.php');
$html=file_get_html('https://www.weather-forecast.com/locations/Hanoi/forecasts/latest');
$t= $html->find('td.temp-color1',0);
$t1= $t->innertext();
$t2=preg_replace('/\D/',"",$t1 );
