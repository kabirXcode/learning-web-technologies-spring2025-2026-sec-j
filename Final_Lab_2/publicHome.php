<?php
    session_start();

    if (!isset($_SESSION['status']) && isset($_COOKIE['status'])) {
        $_SESSION['status'] = true;

        if (isset($_COOKIE['user_name'])) {
            $_SESSION['user_name'] = $_COOKIE['user_name'];
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Public Home</title>
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

        <tr height="200px">
            <td colspan="2" valign="top">
                <br>
                <b>Welcome to xCompany</b>
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