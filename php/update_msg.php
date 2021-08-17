

<?php

  $pf_idx = $_GET['pf_idx'];
  $msg_update_id = $_POST['pf_update_id'];
  $msg_update_pass = $_POST['pf_update_pass'];
  $msg_update_email = $_POST['pf_update_email'];
  $msg_update_tit = $_POST['pf_update_tit'];
  $msg_update_desc = $_POST['pf_update_desc'];
  $msg_update_reg = date("Y-m-d");

  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
  $sql = "UPDATE pf_msg SET pf_msg_id='{$msg_update_id}', pf_msg_pass='{$msg_update_pass}', pf_msg_email='{$msg_update_email}', pf_msg_tit='{$msg_update_tit}', pf_msg_desc='{$msg_update_desc}', pf_msg_reg='{$msg_update_reg}' WHERE pf_msg_idx=$pf_idx";

  mysqli_query($dbConn, $sql);

  echo "
    <script>
      alert('수정이 완료되었습니다.');
      location.href='/portfolio_GY/index.php';
    </script>
  "
?>