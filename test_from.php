<?php
header("Content-Type:text/html;charset=utf-8");
?>
<div align="center">
<h1>后台文章管理页面</h1>
<form method="post">
    <p>文章分类:
    <select name="category">
    </select></p>
    <p>标题:<input type="text" name="title"><br></p>
    <?php
    if(isset($_POST['content'])){
        exit($_POST['content']);
    }
    ?>
    <form method="post">
        <textarea name="content" cols="80" rows="40">内容</textarea>
    </form>
    <div>
    <input type="submit" value="提交">
    <input type="button" value="取消" onclick="{if(confirm('确定要取消添加文章吗?'))
    {window.location.href='index.php';}}">
    </div>
</form>
</div>