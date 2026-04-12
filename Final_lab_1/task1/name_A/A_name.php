<?php
    if(isset($_POST['submit'])){

        $name = $_POST['name'];

        if($name == ""){
            echo "null name!";
        }else{
            echo "Your name is: " . $name;
        }
    }
?>