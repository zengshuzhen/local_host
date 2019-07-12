<?php
echo '<head><meta charset="UTF-8"></head>';
header("Content_type:text/html;charset=utf-8");
$userName = $_POST['userName'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
if($userName == "" || $password == "" || $confirmPassword == "")
{
    echo  "<script>alert('信息不能为空！重新填写');window.location.href='register.html'</script>";
} else if(strlen($userName)<3)
{
    echo "<script>alert('重新填写');window.location.href='register.html'</script>";
}else if (strlen($password)<5)
{
    echo "<script>alert('少于5位数');window.location.href='register.html'</script>";
}else if ($password != $confirmPassword)
{
    echo "<script>alert('两次密码不相同！重新填写');window.location.href='register.html'</script>";
}else{
    $sql= "insert into login(useName,password,confirmPassword)values('$userName','$password','$confirmPassword')";
    if(!(mysqli_query($link,$sql)))
    {
        echo "<script>alert('数据插入失败');window.location.href='register.html'</script>";
    }else{
        echo "<script>alert('数据插入成功')</script>";
    }
}
$host    = 'localhost';
$dbname  = 'test';
$userName = 'root';
$passoword ='root';
$conn=mysqli_connect($host,$userName,$passoword,$dbname);
if (!$conn)
{
    die("连接错误: " . mysqli_connect_error());
}
mysqli_select_db($conn,"test");
$sql = "insert into user (userName,password,confirmPassword)values 
('$_POST[userName]','$_POST[password]','$_POST[confirmPassword]')";
if(!mysqli_query($conn,$sql))
{
    die('error:'.mysqli_error($conn));
}
echo"添加记录";
mysqli_close($conn)
    ?>