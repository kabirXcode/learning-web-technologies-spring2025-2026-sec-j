<?php
session_start();

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Demo user
    if($username == "admin" && $password == "1234"){

        $_SESSION['username'] = $username;

        // Cookie set
        if(isset($_POST['remember'])){
            setcookie('status', 'true', time()+3600, '/'); // 1 hour
        } else {
            setcookie('status', 'true', 0, '/'); // session cookie
        }

        header('location: public_home.php');

    } else {
        echo "Invalid username or password!";
    }
}
?>