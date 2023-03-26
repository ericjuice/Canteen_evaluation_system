<link rel="stylesheet" type="text/css" href="./global.css"/>
<?php
  require_once('pwd.php');
  $password = DB_PASSWORD;
$conn = mysqli_connect("localhost", "db_homework", $password, "db_homework");
$id = $_GET['id'];
$score = $_GET['score'];
$comment = $_GET['comment'];
?>
<center>
    <form action="update.php?id=<?php echo $id ?>" method="get">
        新的评分<select id='1' default='10' name="score"></select>
        <script>
            var select = document.getElementById('1'); //设置0-10分的下拉框
            for (var i = 0; i <= 10; i++) {
                var option = document.createElement('option');
                option.setAttribute('value', i);
                option.innerHTML = i;
                select.appendChild(option);
            }
        </script>
        新的评论<input type="text" name='comment' required='required' placeholder="请输入新的评价">
        <input type="text" style='display:none' name="id" value='<?php echo $id ?>'>
        <button type="submit">修改</button>
    </form>
</center>
<?php
if ($score != NULL) {
    if ($score < 0 or $score > 10) {
    }
    $query = "call update_rec($id,$score,'$comment');"; //储存过程控制更新
    echo $id;
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);      // 关闭连接   
    if ($result) {
?>
        <script>
            //alert("更新成功");
            window.location.href = "main.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("更新失败");
            history.back();
        </script>
<?php
    }
}
?>