<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMI | Login</title>
    <link rel="icon" type="image/x-icon" href="cmilogo.ico">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="POST">
        <h2>Login</h2>
        <label for="">User name</label>
        <input type="text" name="user" placeholder = "Username">
        <label for="">Password</label>
        <input type="password" name="pass" placeholder = "Password">

        <button type="submit">Login</button>
    </form>
    
    <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
            }
        </script>

</body>
</html>