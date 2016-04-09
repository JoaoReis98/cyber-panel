<?php
    $url='http://api.minetools.eu/query/london1.cyber-gsp.com/25565';
    $ch=curl_init();
    $timeout=0.5;

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

    $obj=curl_exec($ch);
    curl_close($ch);
    print_r($obj);