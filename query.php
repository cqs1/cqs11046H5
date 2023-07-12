<?php
// 获取表单提交的班级和姓名数据
if(isset($_POST['class']) && isset($_POST['name'])){
    $class = $_POST['class'];
    $name = $_POST['name'];

    // 在这里执行你的查询操作或其他逻辑
    // 可以使用获取到的班级和姓名进行数据库查询、文件读取等操作

    // 示例：输出查询结果
    echo "班级：$class<br>";
    echo "姓名：$name<br>";
    echo "查询结果：XXX"; // 这里可以替换为你的查询结果
}
?>
