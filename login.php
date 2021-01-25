<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <style>
        .login{
            height: 300px;
            width: 300px;
            padding: 10px;
            border: 1px #CCC solid;
        }
        .login input{
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
<form action="" method="get">
    <div class="login">
        <h1>Login</h1>
        <label for="login_input">username</label>
        <input  id="login_input" type="text" name="username" size="30" placeholder="username"/>
        <br><br>
        <label for="login_password">password</label>
        <input  id="login_password" type="password" name="password" size="30" placeholder="password"/>
        <br><br>
        <input type="submit" value="Sign in"/>
    </div>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
    $username = $_GET['username'];
    $password = $_GET['password'];
    if ($username == 'admin' && $password == 'admin'){
        echo "<h1>Welcome<span style='color: yellow'> ".$username." </span>to website</h1>";
    }else{
        echo "<h1><span style='color: red'>Login Error</span></h1>";
    }
}
?>
</body>
</html>
