<?php
session_start();

if(!isset($_SESSION['users'])){
    echo json_encode(["status"=>"error","message"=>"No users found"]);
    exit;
}

echo json_encode([
    "status"=>"success",
    "users"=>$_SESSION['users']
]);
?>
