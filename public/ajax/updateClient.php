<?php 
    namespace app\models;
    require '../../config.php';

    $id = (isset($_GET['id']) && $_GET['id'] != '' && $_GET['id'] != NULL ) ? $_GET['id'] : NULL;
    $name = (isset($_GET['name']) && $_GET['name'] != '') ? $_GET['name'] : '';
    $registerCode = (isset($_GET['registerCode']) && $_GET['registerCode'] != '') ? $_GET['name'] : '';
    $age = (isset($_GET['age']) && $_GET['age'] != '') ? $_GET['age'] : '';
    $active = (isset($_GET['active']) && $_GET['active'] != '') ? $_GET['active'] : '';
    $kind_person = (isset($_GET['kind_person']) && $_GET['kind_person'] != '') ? $_GET['kind_person'] : '';
    $client_at = (isset($_GET['client_at']) && $_GET['client_at'] != '') ? $_GET['client_at'] : '';
    $updated_at = (isset($_GET['updated_at']) && $_GET['updated_at'] != '') ? $_GET['updated_at'] : NULL;
    $user = new Client();

    $result = $user->update($name, $age, $kind_person, $active, $client_at, $registerCode, $updated_at,$id );
    if($result){
        echo 'sucesso';
    }else{
        echo 'nda';
    }
?>