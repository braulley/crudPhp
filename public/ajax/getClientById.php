<?php
    namespace app\models;
    require '../../config.php';
    $client = new Client();

    $id = $_POST;
    $id = (int)$id;
    $result = $client->find('id',$id);
    $result = json_encode($result);
    echo $result;


?>