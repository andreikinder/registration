<?php
$uploaddir  = __DIR__ . "\avatars\ ";
$uploaddir = trim($uploaddir);
$uploadfile = $uploaddir . basename($_FILES['avatar']['name']);

$user = (unserialize($_COOKIE['user']));
$id =  $user['id'];


if (move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile)) {
    require_once( __DIR__ .'/block/connect.php');
    $avatar_path = '/avatars/'.basename($_FILES['avatar']['name']);


    $data = [
        'avatar' => $avatar_path,
        'id' => $id,
    ];
    $sql = "UPDATE users SET avatar=:avatar  WHERE id=:id";
    $stmt= $pdo->prepare($sql);
    $stmt->execute($data);

//    $sql = "UPDATE users SET avatar='$uploadfile'    WHERE id='$id'";

//    UPDATE Laptop
//    SET code = 5
//    WHERE code = 4;

//    $sth = $pdo->prepare($sql );
//    $sth->execute();
    $user['avatar'] = $avatar_path;


    setcookie('user', serialize($user), time() + 3600, "/");

    header('Location:  / ');



} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}


