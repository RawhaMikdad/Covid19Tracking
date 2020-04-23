<?php


$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/country/all?format=json",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: covid-19-data.p.rapidapi.com",
		"x-rapidapi-key: 1b42dc53e2msh0ed64461be9f32fp19c3bfjsndeb9e90516bd"
	),
));

$response = curl_exec($curl);


curl_close($curl);
$coronadata = json_decode($response,True);
echo "<pre>";

print_r($coronadata);
