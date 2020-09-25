<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36");

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelStay.aspx
curl_setopt($curl, CURLOPT_URL, "https://gis.taiwan.net.tw/XMLReleaseALL_public/activity_C_f.json");

$result = curl_exec($curl);

curl_close($curl);


// echo $result;

?>