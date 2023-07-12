// 在查询成功的条件下，进行页面跳转
if (mysqli_num_rows($result) > 0) {
    // 查询成功，进行页面跳转
    header("Location: new_page.html");
    exit; // 确保页面跳转后停止执行后续的代码
} else {
    // 查询无结果，可以给出相应的提示信息
    echo "查询无结果";
}
