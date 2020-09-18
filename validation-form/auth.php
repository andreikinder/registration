<?php



$login = emptyCheck( $_POST['login'] , 'Fill the email');
$pass = emptyCheck($_POST['pass'], 'Fill the password');

$pass = md5( $pass .'qwO5Pl23' );


require_once('../block/connect.php');

$sql = "SELECT * FROM users   WHERE login='$login' AND password='$pass'";

$sth = $pdo->prepare($sql );
$sth->execute();



$result = $sth->fetchAll(PDO::FETCH_ASSOC);


if (count($result) == 0){
    echo 'This user not found';
    exit();
}
setcookie('user', serialize($result[0]), time() + 3600, "/");

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


