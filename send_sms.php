<?php

$email = "kizzyneo@gmail.com"; $password = "Champion.12"; 
$message = $_REQUEST['message']; 
$sender_name = $_REQUEST['sender']; 
$recipients = $_REQUEST['recipients']; 
$forcednd = "1"; 
$data = array("email" => $email, "password" => $password,"message"=>$message, "sender_name"=>$sender_name,"recipients"=>$recipients,"forcednd"=>$forcednd); 
$data_string = json_encode($data); 
$ch = curl_init('https://app.multitexter.com/v2/app/sms'); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string))); 
$result = curl_exec($ch); 
$res_array = json_decode($result); 
// print_r($res_array);
foreach ($res_array as $obj) {
    if ($obj == '1') {
        echo '<h1 style="margin-top: 200px; text-align: center;">' . "Message sent successfully" . '</h1>';
    } elseif ($obj == '-2') {
        echo '<h1 style="margin-top: 200px; text-align: center;">' . "The sender's name or the recipient's field is containing an unaccepted word. Please try again." . '</h1>';
    } elseif ($obj == '-3') {
        echo '<h1 style="margin-top: 200px; text-align: center;">' . "Your account has been suspended due to fradulent message." . '</h1>';
    } elseif ($obj == '-4') {
        echo '<h1 style="margin-top: 200px; text-align: center;">' . "Please use another display name." . '</h1>';
    } elseif ($obj == '-5') {
        echo '<h1 style="margin-top: 200px; text-align: center;">' . "The message content is invalid. Please reconstruct and try again." . '</h1>';
    } elseif ($obj == '-6') {
        echo '<h1 style="margin-top: 200px; text-align: center;">' . "Recipient is invalid. Please cross-check and try again." . '</h1>';
    } elseif ($obj == '-7') {
        echo '<h1 style="margin-top: 200px; text-align: center;">' . "You don't have sufficient fund to send this message. Please recharge and try again." . '</h1>';
    } elseif ($obj == '-10') {
        echo '<h1 style="margin-top: 200px; text-align: center;">' . "Please try again." . '</h1>';
    } elseif ($obj == '401') {
        echo '<h1 style="margin-top: 200px; text-align: center;">' . "Connection unauthenticated. Please contact developer." . '</h1>';
    }
}

?>