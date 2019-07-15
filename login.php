<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>系统</title>
    <style>
    </style>
</head>
<body>
<form action="login_check.php" method="post"
<h1><div align="center">Article 管理系统</div> </h1>
<hr>
<div align="center">
    <div action="login_check.php" method="POST">
        <p><h3>用户名:
            <input type="text" name="username" size="20" maxlength="15">
            <br></h3></p>
        <p><h3>密  码 :
            <input type="password" name="password" size="20" maxlength="15">
            <br></h3></p>
        <input type="submit" onclick="window.location.href='login_check.php'" value="登陆">
        <input type="button" onclick="window.location.href='register.html'" value="注册">
        </form>
    </div>
</body>


