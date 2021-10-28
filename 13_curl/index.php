<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// // Sample example to get data.

// $resource = curl_init($url);

// curl_setopt($resource, CURLOPT_RETURNTRANSFER, TRUE);

// $result = curl_exec($resource);
// $info = curl_getinfo($resource, CURLINFO_HTTP_CODE);

// echo ($info);

// echo ($result);

// Get response status code

// set_opt_array

// Post request

$user = [
    'name' => 'Saif',
    'username' => 'saif',
    'email' => 'thesa@gmail.con'
];

$resource = curl_init();
curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resource);
curl_close($resource);
echo $result;
