<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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

        <tr height="300px">
            <td colspan="2" align="center">

                <form method="post" action="loginCheck.php">
                    <fieldset style="width: 300px; text-align: left;">
                        <legend><b>LOGIN</b></legend>

                        User Name : <br>
                        <input type="text" name="username"><br><br>

                        Password : <br>
                        <input type="password" name="password"><br><br>

                        <hr>

                        <input type="checkbox" name="remember"> Remember Me <br><br>

                        <input type="submit" name="submit" value="Submit">
                        <a href="#">Forgot Password?</a>
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