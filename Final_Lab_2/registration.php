<?php
session_start();

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if($name != "" && $email != "" && $username != "" && $password != "" && $confirm != "" && $password == $confirm){
        
        header('location: login.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <table border="1" width="100%" cellspacing="0" cellpadding="10">

        <tr>
            <td style="border-right: none;">
                <h1 style="display: inline; color: green;">X</h1>
                <h2 style="display: inline;">Company</h2>
            </td>

            <td align="right" style="border-left: none;">
                <a href="public_home.php">Home</a> | 
                <a href="login.php">Login</a> | 
                <a href="registration.php">Registration</a>
            </td>
        </tr>

        <tr height="350px">
            <td colspan="2" align="center">

                <!-- 🔥 same page e submit -->
                <form method="post" action="">
                    <fieldset style="width: 350px; text-align: left;">
                        <legend><b>REGISTRATION</b></legend>

                        Name: <br>
                        <input type="text" name="name"><br><br>

                        Email: <br>
                        <input type="email" name="email"><br><br>

                        User Name: <br>
                        <input type="text" name="username"><br><br>

                        Password: <br>
                        <input type="password" name="password"><br><br>

                        Confirm Password: <br>
                        <input type="password" name="confirm_password"><br><br>

                        <hr>

                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </fieldset>
                </form>

            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                Copyright © 2017
            </td>
        </tr>

    </table>
</body>
</html>