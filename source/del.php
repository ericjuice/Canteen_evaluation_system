<?php
require_once('db_info.php');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$id = $_GET['id'];

mysqli_autocommit($conn, false); //自动提交模式设为false

$flag = true; //事务是否成功执行的标志
$query = "delete from records where rec_id=$id;";
$result = mysqli_query($conn, $query);
// 下面调用储存过程更新分数
$foodid = mysqli_fetch_row(mysqli_query($conn, "select food_id from records where rec_id=$id;"));
$result2 = mysqli_query($conn, "call update_food_score($foodid);");

if (!$result) { //失败
    $flag = false;
}
mysqli_commit($conn);
mysqli_autocommit($conn, true); //重新设置事务为自动提交

mysqli_close($conn);      // 关闭连接   
if ($flag) {
?>
    <script>
        //alert("删除成功");
        window.location.href = "main.php";
    </script>
<?php
} else {
?>
    <script>
        alert("删除失败");
        history.back();
    </script>
<?php
}
?>