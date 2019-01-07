<?php
    namespace app\models;
    require '../../config.php';
    $client = new Client();

    $result = $client->allClient();

    $result = json_encode($result);
    echo $result;


?>