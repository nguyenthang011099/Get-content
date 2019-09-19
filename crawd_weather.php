<?php
include("simple_html_dom.php");
$html= file_get_html("http://www.nchmf.gov.vn/Web/vi-VN/62/19/58/map/Default.aspx");
foreach ($html->find(".tieude_dubao") as $h){

    $a=$h->find("td");

   print_r($a->text());
}

