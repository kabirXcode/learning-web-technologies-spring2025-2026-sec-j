<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup (AJAX)</title>
</head>
<body> 
    <h1>Signup</h1>
    <form id="signupForm" onsubmit="return false;">
        Username: <input type="text" id="username" name="username"/> <br>
        Password: <input type="password" id="password" name="password"/> <br>
        Email: <input type="email" id="email" name="email"/> <br>
        <input type="button" value="Submit" onclick="signupUser()"/>
        <a href="login.php">Sign in</a>
    </form>

    <h2 id="message"></h2>

    <script>
        function signupUser(){
            let username = document.getElementById('username').value;
            let password = document.getElementById('password').value;
            let email    = document.getElementById('email').value;

            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../controller/signupCheck.php', true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send('username='+encodeURIComponent(username)+'&password='+encodeURIComponent(password)+'&email='+encodeURIComponent(email));

            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    let response = JSON.parse(this.responseText);
                    if(response.status === "success"){
                        document.getElementById('message').innerHTML = " Signup successful! You can now <a href='login.php'>login</a>";
                    }else{
                        document.getElementById('message').innerHTML = + response.message;
                    }
                }
            }
        }
    </script>
</body>
</html>
