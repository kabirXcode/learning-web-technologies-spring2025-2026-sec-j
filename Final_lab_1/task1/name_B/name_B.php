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

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name Input</title>
</head>
<body>

    <form method="post" action="" enctype="multipart/form-data">
        <fieldset style="width: 400px;">
            <legend><b>NAME</b></legend>

            Name: <input type="text" name="name" value=""/> <br><br>
            <hr>
            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>

</body>
</html>