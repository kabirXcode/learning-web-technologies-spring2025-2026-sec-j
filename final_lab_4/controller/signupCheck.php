<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$email    = $_POST['email'] ?? '';

if($username == "" || $password == "" || $email == ""){
    $response = [
        "status" => "error",
        "message" => "Username, password, and email cannot be empty!"
    ];
} else {
    // Save user in session (in real app, save in DB)
    $user = ['username'=>$username, 'password'=>$password, 'email'=>$email];
    $_SESSION['user'] = $user;

    $response = [
        "status" => "success",
        "user" => $user
    ];
}

header('Content-Type: application/json');
echo json_encode($response);
?>
