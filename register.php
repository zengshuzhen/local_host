<?php
$conn = mysqli_connect("localhost","rooo","roo");
if($conn)
{
    die("连接错误: " . mysqli_connect_error());
}
mysqli_select_db($conn,"test");
$sql = "insert into test(userName,password,confirmPassword)values 
('$_POST[username]','$_POST[password]','$_POST[confirmPassword]')";
if(!mysqli_query($conn,$sql))
{
    die('error:'.mysqli_error());
}
echo"添加记录";
mysqli_close($conn)
    ?>