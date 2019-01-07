<?php  

namespace app\models;
require '../../config.php';
$client = new Client();
foreach ($_POST as $key => $value) {
    echo $value . " in " . $key . ", ";
    $id = (isset($key) && $key != '' ) ?  $key: ''; 
    
    $result = $client->_delete($id);
    if($client){
        echo 'apagado';
    }else {
        echo 'nda';
    }
    
}
?>