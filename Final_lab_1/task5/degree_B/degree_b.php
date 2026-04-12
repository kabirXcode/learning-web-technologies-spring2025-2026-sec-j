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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Degree</title>
</head>
<body>

    <form method="post" action="" enctype="multipart/form-data">
        <fieldset style="width: 400px;">
            <legend><b>DEGREE</b></legend>

            <input type="checkbox" name="degree[]" value="SSC"/> SSC
            <input type="checkbox" name="degree[]" value="HSC"/> HSC
            <input type="checkbox" name="degree[]" value="BSc"/> BSc
            <input type="checkbox" name="degree[]" value="MSc"/> MSc
            <br><br>

            <hr>
            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>

</body>
</html>