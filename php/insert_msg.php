
<?php 
  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";

  $pf_id = $_POST['pf_id'];
  $pf_email = addslashes($_POST['pf_email']);
  $pf_pass = addslashes($_POST['pf_pass']);
  $pf_tit = $_POST['pf_tit'];
  $pf_desc = $_POST['pf_desc'];
  $pf_reg = date("Y-m-d");

  $sql = "INSERT INTO pf_msg (pf_msg_id,pf_msg_pass,pf_msg_email,pf_msg_tit,pf_msg_desc,pf_msg_reg) VALUES ('{$pf_id}','{$pf_pass}','{$pf_email}','{$pf_tit}','{$pf_desc}','{$pf_reg}')";


  mysqli_query ($dbConn, $sql);

  echo "
    <script>
      alert('메세지가 입력되었습니다.');
      location.href='/portfolio_GY/index.php';
    </script>
  ";
  
?>
