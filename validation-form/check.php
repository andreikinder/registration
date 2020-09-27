<?php



$login = emptyCheck( $_POST['login'] , 'Fill the email');
$name = emptyCheck($_POST['name'], 'Fill the name');
$pass = emptyCheck($_POST['pass'], 'Fill the password');

$pass = md5( $pass .'qwO5Pl23' );

require_once('../block/connect.php');



$data = [
    'login' => $login,
    'password' => $pass,
    'name' => $name
];
$sql = "INSERT INTO users (login, password, name) VALUES (:login, :password, :name)";
$pdo= $pdo->prepare($sql);
$pdo->execute($data);

header('Location:  / ');



function emptyCheck($data, $message){
    if (!empty($data))  {
        return  filter_var($data, FILTER_SANITIZE_STRING);
        }
    else{
        echo $message;
        die();
    }
}






