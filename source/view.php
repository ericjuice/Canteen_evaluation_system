<!DOCTYPE html>
<html lang="cn">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>视图</title>
    <link rel="stylesheet" type="text/css" href="./global.css" charset='utf-8'/>
</head>
<?php
session_start();
$id = $_SESSION["id"];
?>

<body>
    <div align="center">
        <font size=3>
            <hr>
            <button style="height: 40px; width:80px" onclick="window.location.href='main.php'">返回</button>
            <h3>最近评论</h3>
            <table width="1000" border="3" cellspacing="0" cellpadding="0">
                <tr>
                    <td height=auto align="center" valign="top">
                        <div style="overflow-y:scroll;height: 400px;">
                            <table width="900" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <div align="center">序号</div>
                                    </td>
                                    <td>
                                        <div align="center">窗口</div>
                                    </td>
                                    <td>
                                        <div align="center">食物</div>
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
                                        <div align="center">操作</div>
                                    </td>
                                </tr>
                                <?php
                                  require_once('db_info.php');
                                $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                                $SQLStr = "select rec_id,window, food, date, comment,score from v_rec_rank;";
                                $result = mysqli_query($conn, $SQLStr);
                                mysqli_close($conn);
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
                                                    <button onclick="window.alert('还没实现呢')">点赞 </button>
                                                </div>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </table>

                        </div>
                    </td>
                </tr>
            </table>
            <h3>菜品排行榜</h3>
            <table width="1000" border="3" cellspacing="0" cellpadding="0">
                <tr>
                    <td height=auto align="center" valign="top">
                        <div style="overflow-y:scroll;height: 400px;">
                            <table width="900" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <div align="center">食物</div>
                                    </td>
                                    <td>
                                        <div align="center">窗口</div>
                                    </td>
                                    <td>
                                        <div align="center">评分</div>
                                    </td>
                                    <td>
                                        <div align="center">操作</div>
                                    </td>
                                </tr>
                                <?php
                                  require_once('db_info.php');
                                $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                                $SQLStr = "select food, window,score from v_food_rank;";
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
                                                    <button onclick="window.alert('还没实现呢')">支持 </button>
                                                </div>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </font>
    </div>
</body>

</html>