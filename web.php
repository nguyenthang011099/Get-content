<?php
include('simple_html_dom.php');
$html=file_get_html("https://www.thegioididong.com/dtdd");
echo $html->find('title',0)->plaintext."\n";

$name=$html->find('.homeproduct li h3');

$price=$html->find('.homeproduct li strong');
$imgs=$html->find('img');
foreach($imgs as $img){
    $s= $img->src;
    $i='hinh/'.basename($s);
    file_put_contents($i,file_get_contents($s));

}
foreach($name as $t){
    echo $t."\n";
}

foreach($price as $t){
    echo $t."\n";
}
