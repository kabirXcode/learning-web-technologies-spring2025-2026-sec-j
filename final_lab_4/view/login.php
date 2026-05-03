<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login (AJAX)</title>
</head>
<body> 
    <h1>Login</h1>

    <form onsubmit="return false;">
        Username: <input type="text" id="username"/> <br>
        Password: <input type="password" id="password"/> <br>
        <input type="button" value="Login" onclick="loginUser()"/>
        <a href="signup.php">Sign up</a>
    </form>

    <div id="message"></div>
    <div id="userTable"></div>

<script>
function loginUser(){
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/loginCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let res = JSON.parse(this.responseText);

            if(res.status == "success"){
                document.getElementById("message").innerHTML =
                    "<p style='color:green'>Welcome " + res.user.username + "</p>";

                loadUsers();
            }else{
                document.getElementById("message").innerHTML =
                    "<p style='color:red'>" + res.message + "</p>";
            }
        }
    }

    xhttp.send("username=" + username + "&password=" + password);
}

function loadUsers(){
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "userList.php", true);

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let res = JSON.parse(this.responseText);

            if(res.status == "success"){
                let data = "<h2>User List</h2>";
                data += "<table border='1'>";
                data += "<tr><th>ID</th><th>USERNAME</th><th>EMAIL</th></tr>";

                for(let i=0; i<res.users.length; i++){
                    data += "<tr>";
                    data += "<td>"+res.users[i].id+"</td>";
                    data += "<td>"+res.users[i].username+"</td>";
                    data += "<td>"+res.users[i].email+"</td>";
                    data += "</tr>";
                }

                data += "</table>";

                document.getElementById("userTable").innerHTML = data;
            }
        }
    }

    xhttp.send();
}
</script>

</body>
</html>