<?php
    if(isset($_POST['submit'])){

        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
            echo "Selected Gender: " . $gender;
        }else{
            echo "no gender selected!";
        }
    }
?>