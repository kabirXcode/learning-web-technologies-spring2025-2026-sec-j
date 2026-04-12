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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender</title>
</head>
<body>

    <form method="post" action="" enctype="multipart/form-data">
        <fieldset style="width: 400px;">
            <legend><b>GENDER</b></legend>

            <input type="radio" name="gender" value="Male"/> Male
            <input type="radio" name="gender" value="Female"/> Female
            <input type="radio" name="gender" value="Other"/> Other
            <br><br>

            <hr>
            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>

</body>
</html>