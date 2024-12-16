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
    $ch = curl_init('https://www.multitexter.com/dashboard/buy-sms-online'); 
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string))); 
    $result = curl_exec($ch); 
    $res_array = json_decode($result); 
    print_r($res_array);

    // foreach ($res_array as $x => $y) {
    //     if ($x == "amount") {
    //         echo '<div style="background-color: rgb(216, 127, 26);>';
    //         echo '<h1 style="margin-top: 20px; margin-left: 20px; padding: 20px; font-size: large; font-weight: 600; color: white;">' . "Your balance is:" . '</h1>';
    //         echo '<h1 style="margin-left: 20px; padding: 10px; color: white;">' . "Amount : $y" . '</h1>';
    //         echo '</div>';
    //     }
    // }
    ?>
</body>
</html>