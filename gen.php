<?php

$data = $_POST["playlist"];
$file = generateRandomString();
file_put_contents($file.".txt", $data);
$output = ["data" => "https://logdown-1.herokuapp.com/63999c81aabe1.txt", "ok" => true];
echo json_encode($output);

function generateRandomString($length = 13) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
