<?php

$user = (unserialize($_COOKIE['user']));

$login = emptyCheck_1( $_POST['login'] , $user['login']);
$name = emptyCheck_1($_POST['name'], $user['name']);



if (!empty($_POST['pass']))  {
    $pass = md5( $_POST['pass'].'qwO5Pl23');
}
else {
    $pass = $user['password'];
}


require_once('../block/connect.php');



$data = [
    'login' => $login,
    'name' => $name,
    'password' => $pass,
    'id'=> $user['id'],
//    'avatar' => $user['avatar']
];

$sql = "UPDATE users SET login=:login, name=:name, password=:password WHERE id=:id";

$pdo= $pdo->prepare($sql);
$pdo->execute($data);

$data['avatar'] =  $user['avatar'];
setcookie('user', serialize($data), time() + 3600, "/");

header('Location: /');


function emptyCheck_1($data, $old_value){
    if (!empty($data))  {
        return  filter_var($data, FILTER_SANITIZE_STRING);
    }
    else{
        return $old_value;
    }
}