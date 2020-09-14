<?php
  $link = mysqli_connect('localhost','root','k5669203','tra');
  $query = "SELECT * FROM film";
  $result = mysqli_query($link, $query);
  $list = '';
  while($row = mysqli_fetch_array($result)){
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }

  $article = array(
    'title' => 'Welcome',
    'mainactors' => '신종 코로나 바이러스로 여름 휴가철 내내 햇빛을 보지 못한 나에게 주는 언택트 여행.'
  );

  if(isset($_GET['id']) ) {
    $query = "SELECT * FROM film WHERE id={$_GET['id']}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article = array(
      'title' => $row['title'],
      'description' => $row['description']
    );
  }
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Untact travel </title>
</head>
<body>
  <h1><a href="index.php">Untact travel</h1>
  <ul> <?= $list ?> </ul>
  <a href="create.php">create</a>
  <h2> <?= $article['title']?> </h2>
   <?= $article['description'] ?>
</body>
</html>
