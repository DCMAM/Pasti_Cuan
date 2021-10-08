<?php

$conn = mysqli_connect("localhost", "root", "", "pasticuan");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function getStockPrice($stock_symbol){
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://alpha-vantage.p.rapidapi.com/query?function=GLOBAL_QUOTE&symbol=$stock_symbol",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: alpha-vantage.p.rapidapi.com",
            "x-rapidapi-key: 8f53672fc3msh96e255642a2281dp144e8ajsn54b6f402dda6"
        ],
    ]);

    $response = json_decode(curl_exec($curl), true);
    // $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        return $response['Global Quote']['05. price'];
    }
}

function getStockPercentage($stock_symbol){
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://alpha-vantage.p.rapidapi.com/query?function=GLOBAL_QUOTE&symbol=$stock_symbol",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: alpha-vantage.p.rapidapi.com",
            "x-rapidapi-key: 6cbc02d836msh2fea5d0cbe1fbe0p11a86djsn7b325f6747d8"
        ],
    ]);

    $response = json_decode(curl_exec($curl), true);
    // $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        return $response['Global Quote']['10. change percent'];
    }
}



function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes( $data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $cpassword = mysqli_real_escape_string($conn, $data["cpassword"]);
    
    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE UserID = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username already exist');
            </script>";
        return false;
    }

    // cek password
    if($password !== $cpassword) {
        echo "<script>
                alert('Confirmatin password invalid!');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // var_dump($password); die;

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

    // untuk return 1 jika berhasil dan return 0 jika gagal
    return mysqli_affected_rows($conn);

    // return true;
}



?>