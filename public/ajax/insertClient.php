<?php
    namespace app\models;
    require '../../config.php';

    $name = (isset($_POST['name']) && $_POST['name'] !=NULL ) ? $_POST['name'] : '' ;
    $registerCode = (isset($_POST['registerCode']) && $_POST['registerCode'] !=NULL ) ? $_POST['registerCode'] : '' ;
    $age = (isset($_POST['age']) && $_POST['age'] !=NULL ) ? $_POST['age'] : '' ;
    $kind_person = (isset($_POST['kind_person']) && $_POST['kind_person'] !=NULL ) ? $_POST['kind_person'] : '' ;
    $active = (isset($_POST['active']) && $_POST['active'] !=NULL ) ? $_POST['active'] : '' ;
    $client_at = (isset($_POST['client_at']) && $_POST['client_at'] !=NULL ) ? $_POST['client_at'] : '' ;
    $id_user = (isset($_POST['id_user']) && $_POST['id_user'] !=NULL ) ? $_POST['id_user'] : NULL ;
    $user = new Client();
    
    $cadastrado = $user->create($name, $age, $kind_person, $active, $client_at , $registerCode,$id_user);

    if($cadastrado){
        echo 'sucesso';
    }else {
        echo 'erro';
    }
?>