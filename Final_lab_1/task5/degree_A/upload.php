<?php
    if(isset($_POST['submit'])){

        if(isset($_POST['degree'])){
            $degrees = $_POST['degree'];

            echo "Selected Degrees: <br>";

            for($i=0; $i<count($degrees); $i++){
                echo $degrees[$i] . "<br>";
            }

        }else{
            echo "no degree selected!";
        }
    }
?>