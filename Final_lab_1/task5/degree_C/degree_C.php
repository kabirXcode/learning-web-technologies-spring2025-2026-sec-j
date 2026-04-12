<?php
    $degrees = array();

    if(isset($_REQUEST['submit'])){

        if(isset($_REQUEST['degree'])){
            $degrees = $_REQUEST['degree'];

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

            <input type="checkbox" name="degree[]" value="SSC"
            <?php if(in_array("SSC", $degrees)) echo "checked"; ?>/> SSC

            <input type="checkbox" name="degree[]" value="HSC"
            <?php if(in_array("HSC", $degrees)) echo "checked"; ?>/> HSC

            <input type="checkbox" name="degree[]" value="BSc"
            <?php if(in_array("BSc", $degrees)) echo "checked"; ?>/> BSc

            <input type="checkbox" name="degree[]" value="MSc"
            <?php if(in_array("MSc", $degrees)) echo "checked"; ?>/> MSc
            <br><br>

            <hr>
            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>

</body>
</html>