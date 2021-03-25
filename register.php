<?php require_once('./conn.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>留言板</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <header class="warning">
    <strong>注意！本站為練習用網站，因教學用途刻意忽略資安的實作，註冊時請勿使用任何真實的帳號或密碼。</strong>
  </header>
  <main class="board">
      <a class="board__btn" href="index.php">回留言版</a>
      <a class="board__btn" href="login.php">登入</a>
      <h1 class="board__title">註冊</h1>
      <?php 
         if(!empty($_GET['errorCode'])){
            $msg = 'aaaa';
             if($_GET['errorCode'] === '1'){
                $msg ='資料不齊全';
             }else if($_GET['errorCode'] === '2'){
                 $msg ='帳號已被註冊';
             }
             echo '<h2 class="error">'. $msg .'</h2>';
         }
      ?>
      <form class="board__new-comment-form" method="POST" action="handle_register.php">
        <div class="board__nickname">
          <span>暱稱：</span>
          <input type="text" name="nickname" />
          <br>
          <span>帳號：</span>
          <input type="text" name="username" />
          <br>
          <span>密碼：</span>
          <input type="password" name="password" />
          <br>
        </div>
       
        <input class="board__submit-btn" type="submit" value="提交" />
      </form>
      <div class="board__hr"></div>
   
  </main>
</body>
</html> 