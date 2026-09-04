<?php
require_once('../includes/config.php');
require_once('../includes/database.php');

header('Content-Type: application/json');

$response = array();

if(isset($_POST['action'])){

    if($_POST['action'] == "create_invoice"){

        $response['status'] = "success";
        $response['message'] = "Invoice created successfully";

        echo json_encode($response);
        exit;
    }

}

$response['status'] = "error";
$response['message'] = "Invalid request";

echo json_encode($response);
?>