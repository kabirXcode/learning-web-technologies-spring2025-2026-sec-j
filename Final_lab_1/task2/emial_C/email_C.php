<?php
    $email = "";

    if(isset($_POST['submit'])){

        $email = $_POST['email'];

        if($email == ""){
            echo "null email!";
        }else{
            echo "Your email is: " . $email;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email Input</title>
</head>
<body>

    <form method="post" action="" enctype="multipart/form-data">
        <fieldset style="width: 400px;">
            <legend><b>EMAIL</b></legend>

            Email: 
            <input type="email" name="email" 
            value="<?php echo $email; ?>"/> <br><br>

            <hr>
            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>

</body>
</html>