<?php

$z = $_GET["zip"];

$url = "http://api.openweathermap.org/data/2.5/weather?zip=$z,us&units=metric&appid=9edb78e7b7c5a690f79dd97bcfc87991"; 

$fp = fopen ( $url , "r" ); 
$contents = "";

while ( $more = fread ( $fp, 1000  ) ) {
   $contents .=  $more ;
} 

echo $contents ; 

?>