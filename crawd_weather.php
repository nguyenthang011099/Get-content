<?php
//require"db.php";
include("simple_html_dom.php");
$html=file_get_html("http://www.nchmf.gov.vn/web/vi-VN/62/19/58/map/Default.aspx");


$t3=$html->find("td.forecast_detail",0);
$t4=$t3->find("strong",0);
$t5=$t4->innertext;
$t6=preg_replace('/\D/',"",$t5 );
echo $t6."\n";



