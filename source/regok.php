 <?php
      require_once('db_info.php');
      $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
      $stu_id = $_POST['stu_id'];
      $pwd = $_POST['pwd'];
      $name = $_POST['stu_name'];
      $SQL = "SELECT * FROM student where stu_id=$stu_id;";
      $result = mysqli_query($conn, $SQL);
      $r = mysqli_fetch_array($result);
      if ($r) {
      ?>
       <script>
             alert("学号已注册");
             history.back();
       </script>
       <?php
      } else {
            $SQL1 = "INSERT INTO student(stu_id,stu_name,stu_pwd) VALUES ($stu_id,'$name',$pwd);";
            $result1 = mysqli_query($conn, $SQL1);
            if (!$result1) {
            ?>
             <script>
                   alert("注册失败");
                   history.back();
             </script>
       <?php
            } else {
            ?>
             <script>
                   alert("注册成功");
                   window.location.href = "index.php";
             </script>
 <?php
            }
      }

      ?>