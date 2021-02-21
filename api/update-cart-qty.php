<?php
    include_once('../modules/DBConnectionModule.php');
    include_once('../modules/ProductModule.php');

    if( isset($_REQUEST['id']) && isset($_REQUEST['otoken']) && isset($_REQUEST['uid']) && isset($_REQUEST['qty'])){
        $productModule = new ProductModule();
        header('Content-Type: application/json');
        echo json_encode($productModule->API_updateQty($_REQUEST));
    }
    else{
        header('Content-Type: application/json');
        echo json_encode(["status" => 400, "content" => "Err"]);
    }
?>