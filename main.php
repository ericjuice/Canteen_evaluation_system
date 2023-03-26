<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./global.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=uft-8" />
    <title>主页</title>
</head>

<body >
    <?php
    session_start();
    require_once('pwd.php');
    $password = DB_PASSWORD;
    $conn = mysqli_connect("localhost", "db_homework", $password, "db_homework");
    $myid = $_SESSION['id'];
    $temp = mysqli_query($conn, "select stu_name from student where stu_id=$myid;");
    $name = mysqli_fetch_row($temp);
    echo "<center><h2>欢迎！ $name[0]  (学号:$myid)<button onclick=\"window.location.href='index.php'\">注销登录</button><h2>
    </center>";
    ?>
    <hr>
    <center>
        <form action="add.php" method="post">
            <font size=3>
                <div>
                    <label class="mylabel">食物<label><input type="text" name="food_id" value="" required="required" placeholder="请输入您的食物编号">
                    <label class="mylabel">窗口<label><input type="text" name="wind_id" value="" required="required" placeholder="请输入您的窗口">
                    <label class="mylabel">评分</label><select id='1' name="score"></select>
                    <script>
                        var select = document.getElementById('1'); //设置0-10分的下拉框
                        for (var i = 0; i <= 10; i++) {
                            var option = document.createElement('option');
                            option.setAttribute('value', i);
                            option.innerHTML = i;
                            select.appendChild(option);
                        }
                    </script>
                </div><br>
                <div>
                    <label class="mylabel" style="position:relative;top: -35px;">评论</label>
                    <textarea cols="60" rows="5" type="text" name="comment" required="required" placeholder="请输入您对本次用餐的评价"></textarea>
                    <input style="height:50px ;position:relative;top:-35px;" type="submit" name="submit" value="新增评论">
                </div>
            </font>
        </form>
        <hr>
        <button style="height: 50px;" onclick="window.location.href='view.php'">查看其他评论</button>
    </center>

    <div align="center">
        <font size=3>
            <hr>
            <h3>你的评论</h3>
            <table width="1000" border="3" cellspacing="0" cellpadding="0">
                <tr>
                    <td height="300" align="center" valign="top">
                        <table width="900" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="60" height="30">
                                    <div align="center">序号</div>
                                </td>
                                <td>
                                    <div align="center">学号</div>
                                </td>
                                <td>
                                    <div align="center">食物</div>
                                </td>
                                <td>
                                    <div align="center">窗口</div>
                                </td>
                                <td>
                                    <div align="center">日期</div>
                                </td>
                                <td>
                                    <div align="center">评价</div>
                                </td>
                                <td>
                                    <div align="center">评分</div>
                                </td>
                                <td>
                                    <div align='center'>操作</div>
                                </td>
                            </tr>
                            <?php
                            $SQLStr = "select * from records where stu_id=$myid;";
                            $result = mysqli_query($conn, $SQLStr);
                            if ($row = mysqli_fetch_array($result)) //通过循环读取数据内容  
                            {
                                mysqli_data_seek($result, 0);
                                while ($row = mysqli_fetch_row($result)) {
                                    $len = count($row);
                            ?>
                                    <tr>
                                        <?php for ($i = 0; $i < $len; $i++) { ?>
                                            <td height="30">
                                                <div align="center"> <?php echo $row[$i] ?> </div>
                                            </td>
                                        <?php } ?>
                                        <td>
                                            <div align="center">
                                                <a href="del.php?id=<?php echo $row[0] ?>" onclick="return confirm('确认删除?')">删除 </a>
                                                <a href="update.php?id=<?php echo $row[0] ?>" onclick="return confirm('确认修改？')">修改 </a>
                                            </div>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </table>
                    </td>
                </tr>
            </table>
        </font>
    </div>

    <?php mysqli_close($conn);
    mysqli_free_result($result); // 释放资源
    ?>
</body>

</html>