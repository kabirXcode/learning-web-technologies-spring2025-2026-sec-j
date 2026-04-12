<?php
    $day = "";
    $month = "";
    $year = "";

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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Date of Birth</title>
</head>
<body>

    <form method="post" action="" enctype="multipart/form-data">
        <fieldset style="width: 450px;">
            <legend><b>DATE OF BIRTH</b></legend>

            dd
            <input type="text" name="day" 
            value="<?php echo $day; ?>" size="2"/> /

            mm
            <input type="text" name="month" 
            value="<?php echo $month; ?>" size="2"/> /

            yyyy
            <input type="text" name="year" 
            value="<?php echo $year; ?>" size="4"/> 
            <br><br>

            <hr>
            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>

</body>
</html>