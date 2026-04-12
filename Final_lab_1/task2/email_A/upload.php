<?php
    if(isset($_POST['submit'])){

        $email = $_POST['email'];

        if($email == ""){
            echo "null email!";
        }else{
            echo "Your email is: " . $email;
        }
    }
?>