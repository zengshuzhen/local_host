<?php
echo "<head>
    <meta charset=\"UTF-8\"></head>";
header("Content_type:text/html;charset=utf-8");
$conn = mysqli_connect('localhost','root','root','test');
if($conn){
    die("连接失败:".mysqli_connect_error());
}
//登录处理界面
//判断是否按下提交按钮
if (isset($_POST["submit"])  == "登陆")
{
    //将用户名和密码存入变量中，供后续使用
    $user = $_POST["userName"];
    $password = $_POST("password");
    if ($user == "" || $password == "")
    {
        echo  "<script>alert('信息不能为空!');window.location.href='login.php'</script>";
    }
        $sql = "select userName password from user where test = '$userName', '$password'";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            echo "<script>alert('登陆成功');window.location.href = 'Web_page.php';</script>";
        }
        else
        {
            echo "<script>alert('用户名或者密码不正确!');window.location.href = 'login.php';</script>";
        }
    }
else{
    echo "<script>alert('登陆失败');</script>";
}
?>
