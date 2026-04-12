<?php
    if(isset($_POST['submit'])){

        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        if($day == "" || $month == "" || $year == ""){
            echo "null date of birth!";
        }else{
            echo "Date of Birth: " . $day . "/" . $month . "/" . $year;
        }
    }
?>