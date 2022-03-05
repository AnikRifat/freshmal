<?php
header('Content-Type: JSON');
$response = array();
$i = 0;
$user = $data['users'];
// die(print_r($user));
while ($user) {

    $response[$i]['id'] = $user->id;
    $response[$i]['name'] = $user->name;
    $response[$i]['email'] = $user->email;
    $response[$i]['created_at'] = $user->created_at;
    $i++;
    echo json_encode($response, JSON_PRETTY_PRINT);
}
