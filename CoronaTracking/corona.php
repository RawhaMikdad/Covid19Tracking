<?php

$data = file_get_contents('https://covid-19-brasil.p.rapidapi.com/covid-19/20200402/Norte');
$coronadata = json_decode($data,True);

echo "<pre>";

print_r($coronadata);


?>
