<?php
header('content-type:text/html;charset=utf-8');
    $host    = 'localhost';
    $dbname  = 'test';
    $userName = 'root';
    $passoword ='root';
$con=mysqli_connect($host,$userName,$passoword,$dbname);
if (!$con)
{
    die("连接错误: " . mysqli_connect_error());
}
?>
