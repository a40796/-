<?php

require_once('./conn.php'); 

if (
    empty($_POST['nickname']) ||
    empty($_POST['content'])
  ) {
      header('Location:./index.php?errorCode=1');
    die('資料不齊全');
  }

$nickname =$_POST['nickname'];
$content =$_POST['content'];
$username = $_COOKIE['username'];
$user_sql = sprintf(
  "select nickname from users where username = '%s' "
  ,$username

);
$user_result = $conn->query($user_sql);
$row = $user_result->fetch_assoc();
$nickname = $row['nickname'];
$content =$_POST['content'];

$sql = sprintf(
  "insert into comments (nickname , content)values ('%s','%s') ",
  $nickname 
);
$result = $conn->query($sql);
if(!$result){
    die($conn->error);
}

header('Location:./index.php')

?>



