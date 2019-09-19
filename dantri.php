<?php
include("simple_html_dom.php");
$html= file_get_html("https://dantri.com.vn/nhip-song-tre.htm");
$h=$html->find("[data-boxtype='timelineposition']");
foreach($h as $t){
    $a= $t->find("a",0);


    $a->attr["title"];

    echo "\n";
}
