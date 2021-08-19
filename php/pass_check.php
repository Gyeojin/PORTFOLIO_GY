<?php

  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";

  $pf_idx = $_GET['pf_idx']; //9
  $pf_pass_check = $_POST['pf_passCheck']; //ssdf

  $sql = "SELECT * FROM pf_msg WHERE pf_msg_idx='{$pf_idx}'";

  $check_result = mysqli_query($dbConn, $sql);
  $check_result_row = mysqli_fetch_array($check_result);
  $passCheck = $check_result_row['pf_msg_pass'];
  
  if($passCheck != $pf_pass_check){
      echo "
        <script>
          alert('비밀번호가 틀립니다.');
          history.go(-1);
        </script>
      ";
    } else {
      echo "
        <script>
          location.href='/portfolio_GY/page/detail_page.php?pf_idx={$pf_idx}';
        </script>
      ";
    }
?>