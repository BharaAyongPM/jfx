<?php
$target = '082226462723';
$token = '9kFkx#5E+b#vSNbzBd1g';
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.fonnte.com/send',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array(
        'target' => $target,
        'message' => 'Terima kasih, '

    ),
    CURLOPT_HTTPHEADER => array(
        "Authorization: $token"
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
