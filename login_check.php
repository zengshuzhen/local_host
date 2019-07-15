<?php
echo '<head><meta charset="UTF-8"></head>';
header("Content_type:text/html;charset=utf-8");
$host    = 'localhost';
$dbname  = 'test';
$userName = 'root';
$passoword ='root';
$conn=mysqli_connect($host,$userName,$passoword,$dbname);
if (!$conn){
    die("连接错误;".mysqli_connect_error());
}
if (isset($_POST["submit"])  == "登陆") {
    $user = $_POST["userName"];
    $password = $_POST("password");
    if ($user == "" || $password == "")
    {
        echo "<script>alert('信息不能为空!');window.location.href='login.php'</script>";
    } else {
        $sql = "select userName password from user where test = '$userName', '$password'";
        $result = mysqli_query($conn, $sql);
    }
    if ($result) {
        echo "<script>alert('登陆成功');window.location.href = 'Web_page.php';</script>";
    } else {
        echo "<script>alert('用户名或者密码不正确!');window.location.href = 'login.php';</script>";
    }
}
else{
    echo "<script>alert('登陆失败');window.location.href = 'login.php';</script>";
}
?>
