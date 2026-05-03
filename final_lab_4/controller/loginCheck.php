<?php
session_start();

$users = [
    ['id'=> 1, 'username'=>'alamin', 'password'=>'123', 'email'=> 'alamin@aiub.edu'],
    ['id'=> 2, 'username'=>'xyz', 'password'=>'123', 'email'=> 'xyz@aiub.edu'],
    ['id'=> 3, 'username'=>'abc', 'password'=>'123', 'email'=> 'abc@aiub.edu'],
    ['id'=> 4, 'username'=>'pqr', 'password'=>'123', 'email'=> 'pqr@aiub.edu'],
    ['id'=> 5, 'username'=>'test', 'password'=>'123', 'email'=> 'test@aiub.edu'],
];

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$response = ["status" => "error", "message" => "Invalid username or password"];

foreach($users as $user){
    if($user['username'] === $username && $user['password'] === $password){
        $_SESSION['user'] = $user;
        $_SESSION['users'] = $users;
        $response = [
            "status" => "success",
            "user" => $user
        ];
        break;
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>
