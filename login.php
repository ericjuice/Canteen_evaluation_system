 <?php
    session_start();
    $correct_pwd = 0; //学号正确
    $true_stu = 0; //密码正确
    require_once('pwd.php');
    $password = DB_PASSWORD;
    $conn = mysqli_connect("localhost", "db_homework", $password, "db_homework");
    $stu_id = $_POST['stu_id'];
    $pwd = $_POST['pwd'];
    $SQL = "SELECT stu_pwd FROM student where stu_id=$stu_id;";
    $result = mysqli_query($conn, $SQL);
    mysqli_data_seek($result, 0);
    $truepwd = mysqli_fetch_row($result);
    if ($truepwd) {
        $true_stu = 1;
        if ($pwd == $truepwd[0]) {
            $correct_pwd = 1;
        }
    }
    mysqli_free_result($result);
    mysqli_close($conn);
    if ($true_stu == 1) {
        if ($correct_pwd == 1) {
    ?>
         <script>
             alert("登录成功");
             <?php $_SESSION['id'] = $stu_id; ?>
             window.location.href = "main.php";
         </script>
     <?php

        } else {
        ?>
         <script>
             alert("密码错误");
             history.back();
         </script>
     <?php
        }
    } else {
        ?>
     <script>
         alert("查无此人");
         history.back();
     </script>
 <?php
    }
    ?>