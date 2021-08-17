<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GY PORTFOLIO</title>

  <!-- Google Font Style Conde -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
  
  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- RESET, MAIN Style CSS code -->
  <link rel="stylesheet" href="/portfolio_GY/css/reset.css">
  <link rel="stylesheet" href="/portfolio_GY/css/main.css">
  <link rel="stylesheet" href="/portfolio_GY/css/media.css">
    
</head>
<body>
  <div class="wrap">
    <?php
      $pf_idx = $_GET['pf_idx'];

      //echo $pf_idx;
      include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
      $sql = "SELECT * FROM pf_msg WHERE pf_msg_idx='{$pf_idx}'";

      $passcheck_result = mysqli_query($dbConn, $sql);
      $passcheck_result_row = mysqli_fetch_array($passcheck_result);
      $passC_id = $msg_detail_row['pf_msg_id'];
      $passC_pass = $msg_detail_row['pf_msg_pass'];
      $passC_email = $msg_detail_row['pf_msg_email'];
      $passC_tit = $msg_detail_row['pf_msg_tit'];
      $passC_desc = $msg_detail_row['pf_msg_desc'];
      
    ?>
    <div class="passcheck">
      <div class="bg">
        <div class="title-text">
          <h3>Do You Wanna Modify?</h3>
          <p>글 작성 시 설정했던 비밀번호를 입력해 주세요.</p>
        </div>
        <form action="/portfolio_GY/php/pass_check.php?pf_idx=<?=$pf_idx?>" method="post" name="pf_pass_check" class="pass_check">
          <div class="passbox">
            <b>비밀번호</b>
            <input type="pass" name="pf_passCheck">
          </div>
          <div class="checkbtn">
            <button type="submit">확인</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Main JS link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../portfolio_GY/js/main.js"></script>
  <script src="../portfolio_GY/js/jq.js"></script>
 
</body>
</html>