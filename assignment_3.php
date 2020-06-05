<?php

$zip = $_GET["zip"];

sleep(2);
$url = "http://api.openweathermap.org/data/2.5/weather?zip=$zip,us&units=metric&appid=e33eb1817c7243e0c3ba7baa996d9ac2";

$fp = fopen($url, "r");
$contents = "";

while($more = fread($fp,3000)){
    $contents .= $more;
}
// sleep(2);
echo $contents;

?>