<?php
    namespace app\models;
    require '../../config.php';

    $username =  (isset($_POST["username"]) && $_POST["username"]!= NULL ? $_POST["username"] : '');
    $password =  (isset($_POST["password"]) && $_POST["password"]!= NULL ? $_POST["password"] : '');
    $user = new User();


    $result = $user->login($username,$password);
    if($result){
        echo json_encode($result);
    }else{
        echo 'naoachado';
    }

?>