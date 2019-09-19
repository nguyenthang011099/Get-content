<?php
include("simple_html_dom.php");
$html= file_get_html("https://dantri.com.vn/nhip-song-tre.htm");
$h=$html->find("[data-boxtype='timelineposition']");
foreach($h as $t){
    $a= $t->find("a",0);


    $a->attr["title"];


    $a->href;


    $img= $a->find("img",0)->src;
    $u= "dantri/".basename($img);
    file_put_contents($u, file_get_contents($img));



    echo "\n";
}
