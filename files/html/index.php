<?php
/**
 * Created by PhpStorm.
 * User: jinzhao
 * Date: 2019/7/13
 * Time: 11:14 PM
 */
error_reporting(0);
if($_SERVER['HTTP_X_FORWARDED_FOR'] !== '127.0.0.1') {
    die("只能本地访问。");
}

if($_POST['username'] === 'admin' && $_POST['password'] === 'wwoj2wio2jw93ey43eiuwdjnewkndjlwe') {
    die('登录成功！'.file_get_contents('/flag'));
}

?>


<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<body>
<div style="text-align: center">
    <form action="" method="post">
        用户名：<input type="text" name="username" value="admin"/><br>
        密码：<input type="password" name="password" value="wwoj2wio2jw93ey43eiuwdjnewkndjlwe"/><br>
        <input type="submit" value="登录"/>
    </form>
</div>
</body>
</html>
