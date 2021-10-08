<?php

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://alpha-vantage.p.rapidapi.com/query?function=GLOBAL_QUOTE&symbol=TSLA",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: alpha-vantage.p.rapidapi.com",
            "x-rapidapi-key: 5a3404f7a8mshd2cbc50db1c391ap1c24efjsneb9a82cb216d"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $data = json_decode($response);

    $data2 = $data->{'Global Quote'};

    $data3 = $data2->{'05. price'};
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $data3;
        // echo $data2->{"05. price"};
        // echo $data->{"Global Quote"};
    }

?>