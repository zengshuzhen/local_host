<?php
//登录处理界面
//判断是否按下提交按钮
if (isset($_POST["submit"]) && $_POST["submit"] == "登陆")
{
    //将用户名和密码存入变量中，供后续使用
    $user = $_POST["username"];
    $password = $_POST("user_password");
    if ($user == "" || $password == "")
    {
        var_dump(10);die;
        //用户名或者密码其中之一为空，则弹出对话框，确定后返回当前页的上一页
        //echo "<script>alert('请输入用户名或者密码!');history.go(-1);</script>";
    }
    else
    {
        //确认用户名密码不为空，则连接数据库
        $conn = mysqli_connect("localhost","root","root");
        if (mysqli_errno($conn)){
            echo mysqli_errno($conn);
            exit;
        }
        mysqli_select_db($conn,"test");
        mysqli_set_charset($conn,"utf8");
        $sql = "select username,userpassword from user where username = '$user'and userpassword = '$password'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if($num)
        {var_dump(28);die;
            echo "<script>alert('登陆成功');window.location.href = 'Web_page.php';</script>";
        }
        else
        {var_dump(32);die;
            echo "<script>alert('用户名或者密码不正确!');history.go(-1);</script>";
        }
    }
}
else{
echo "<head>
    <meta charset=\"UTF-8\">
    <title>注册</title>
</head>";
    echo "<script>alert('未提交成功');</script>";
}
?>
