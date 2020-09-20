<?php
  $link = mysqli_connect('localhost','root','k5669203','tra');
  $query = "SELECT * FROM topic";
  $result = mysqli_query($link, $query);
  $list = '';
  while($row = mysqli_fetch_array($result)){
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }
  $article = array(
    'title' => 'Welcome',
    'description' => '신종 코로나 바이러스로 여름 휴가철 내내 햇빛을 보지 못한 나에게 주는 언택트 여행.'
  );

  if(isset($_GET['id']) ) {
    $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
    $query = "SELECT * FROM topic WHERE id={$filtered_id}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article = array(
      'title' => $row['title'],
      'description' => $row['description']
    );
  }
 ?>

<!DOCTYPE html>
<html style="text-align:center">
<head>
  <meta charset="utf-8">
  <title style="color:green"> ♣Untact travel♣ </title>
</head>
<body>
  <h1><a href="index.php" style="color:green">♣Untact travel♣</a></h1>
  <ol> <?= $list ?> </ol>
  <form action="process_update.php" method="POST">
    <input type="hidden" name="id" value="<?=$filtered_id?>">
    <p><input type="text" name="title" placeholder="title" value="<?=$article['title']?>"></p>
    <p><textarea name="description" placeholder="description"><?=$article['description']?></textarea></p>
    <p><input type="submit"></p>
  </form>
</body>
</html>
