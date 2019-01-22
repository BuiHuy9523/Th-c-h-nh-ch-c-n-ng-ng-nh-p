<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .login{
            background: cornflowerblue;
            height: 180px;
            width: 230px;
            padding: 10%;
            margin: auto;
            border: 2px solid chocolate;
            margin-top: 100px;
        }
        .login input{
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="login">
        <h2>Log in</h2>
        <input type = "text" name="username" size="30" placeholder = "username"/> </br>
        <input type="password" name="password" size="30" placeholder="password">
        <input type="submit" value="submit">
    </div>

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $POST["username"];
    $password = $POST["password"];
    if ($username === "a" && $password === "a"){
        echo "<h2>Welcome <span style='color: crimson'>" .$username. "</span>To Website</h2>";
    }else{
        echo "<h2><span style='color: crimson'>Login erro</span></h2>";
    }
}
?>
</body>
</html>
