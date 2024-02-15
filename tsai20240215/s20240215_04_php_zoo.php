<?php
    header('Access-Conterol-Allow-Origin: *');

    $ch = curl_init();

    curl_setopt($ch , CURLOPT_URL , "https://data.taipei/api/v1/dataset/5048d475-7642-43ee-ac6f-af0a368d63bf?scope=resourceAquire");

    $result = curl_exec($ch);

    curl_close($ch);
?>