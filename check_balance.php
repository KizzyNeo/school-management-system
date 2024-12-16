<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Balance</title>
</head>
<body>
    <?php

    $email = "kizzyneo@gmail.com"; $password = "Champion.12";  
    $data = array("email" => $email, "password" => $password); 
    $data_string = json_encode($data); 
    $ch = curl_init('https://app.multitexter.com/v2/app/getbalance'); 
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string))); 
    $result = curl_exec($ch); 
    $res_array = json_decode($result); 
    // print_r($res_array);

    foreach ($res_array as $x => $y) {
        if ($x == "amount") {
            echo '<div style="margin-top: 100px;">';
            echo '<h1 style="margin-left: 20px; padding: 20px; font-size: 30px; color: rgb(20, 8, 53); font-weight: 600;">' . "Your balance is:" . '</h1>';
            echo '<h1 style="margin-left: 20px; padding: 10px; font-size: 100px; color: rgb(20, 8, 53); margin-top: -30px; margin-bottom: 20px;">' . "$y" . "units" . '</h1>';
            echo '</div>';
        }
    }
    ?>
</body>
</html>