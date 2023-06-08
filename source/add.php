 <?php
  session_start();
  require_once('db_info.php');
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $food = $_POST['food_id'];
  $comment = $_POST['comment'];
  $windid = $_POST['wind_id'];
  $id = $_SESSION['id'];
  $score = $_POST['score'];
  $temp1 = mysqli_query($conn, "select max(rec_id) from records;");
  $temp2 = mysqli_fetch_row($temp1);
  $max_rec_id = $temp2[0] + 1;
  $date = date('Y-m-d');
  $SQLStr = "insert into records(rec_id,food_id, wd_id,stu_id,rec_date,rec_comment,rec_score) 
  values($max_rec_id,$food, $windid,$id, '$date' ,'$comment',$score);"; //查询语句
  $result = mysqli_query($conn, $SQLStr);
  if ($result == true) {
  ?>
   <script>
     alert("评论成功");
     window.location.href = "main.php";
   </script>
 <?php
  } else {
  ?>
   <script>
     alert("评论失败");
     history.back();
   </script>
 <?php
  }
  mysqli_close($conn);

  ?>