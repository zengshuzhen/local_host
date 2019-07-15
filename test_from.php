<?php
echo "<head>
    <meta charset=\"UTF-8\"></head>";
header("Content_type:text/html;charset=utf-8");
$conn = mysqli_connect('localhost','root','root','test');
if($conn){
    die("连接失败:".mysqli_connect_error());
}
$userName = $_POST['userName'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
if($userName == "" || $password == "" || $confirmPassword == "")
{
   echo  "<script>alert('信息不能为空！重新填写');window.location.href='register.html'</script>";
} else if((strlen($userName)<3)||(!preg_match('',$userName)))
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
     if(!(mysqli_query($conn,$sql)))
     {
         echo "<script>alert('数据插入失败');window.location.href='register.html'</script>";
     }else{
         echo "<script>alert('数据插入成功');window.location.href='login.php'</script>";
     }
}
?>
