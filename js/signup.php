<?php

$api_key = 'dd82f1f10e95b4c80d9ee79db78f1608';
$datacenter = 'us9';
$list_id = '5763a107da';

$email = $_POST['email'];
$status = 'pending';


if(!empty($_POST['status'])){
    $status = $_POST['status'];
}

$url = 'http://'.$datacenter.'.api.mailchimp.com/3.0/lists/'.$list_id.'/members/';

$username = 'apikey';
$password = $api_key;
$data = array("email_address" => $email,"status" => $status);
$data_string = json_encode($data);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$api_key");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
$result=curl_exec ($ch);
curl_close ($ch);
echo $result;		
?>