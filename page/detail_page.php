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
      //echo $sql;

      $msg_detail_result = mysqli_query($dbConn, $sql);
      $msg_detail_row = mysqli_fetch_array($msg_detail_result);
      $msg_detail_id = $msg_detail_row['pf_msg_id'];
      $msg_detail_pass = $msg_detail_row['pf_msg_pass'];
      $msg_detail_email = $msg_detail_row['pf_msg_email'];
      $msg_detail_tit = $msg_detail_row['pf_msg_tit'];
      $msg_detail_desc = $msg_detail_row['pf_msg_desc'];
      
    ?>
    <section id="contact">
      <div class="center">
        <div class="title-text">
          <h3>Contact Me.</h3>
          <p>메모글 상세페이지 입니다. 마음대로 수정/삭제하세요!</p>
        </div>
        <div class="form-area">
          <form action="/portfolio_GY/php/update_msg.php?pf_idx=<?=$pf_idx?>" method="post" name="pf_update_msg">
            <p class="name-email">
              <!-- input : 사용자가 텍스트박스 안에 직접 작성할 수 있는 태그 -->
              <input type="text" name="pf_update_id" value="<?=$msg_detail_id?>">
              <input type="text" name="pf_update_email" value="<?=$msg_detail_email?>">
              <input type="password" name="pf_update_pass" value="<?=$msg_detail_pass?>">
            </p>
            <p class="subject">
              <input type="text" name="pf_update_tit" value="<?=$msg_detail_tit?>">
            </p>
            <p class="message">
              <textarea name="pf_update_desc" value=""><?=$msg_detail_desc?></textarea>
              <p class="send-btn">
                <button type="submit">Update Message</button>
              </p>
            </p>
          </form>
        </div>
      </div>
    </section>
  </div>

  <!-- Main JS link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/portfolio_GY/js/main.js"></script>
  <script src="/portfolio_GY/js/jq.js"></script>

</body>
</html>