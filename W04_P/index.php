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

  $update_link='';
  $delete_link='';
  $author = '';

  if(isset($_GET['id']) ) {
    $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
    $query = "SELECT * FROM topic LEFT JOIN author ON topic.author_id = author.id WHERE topic.id = {$filtered_id}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article['title'] = htmlspecialchars($row['title']);
    $article['description'] = htmlspecialchars($row['description']);
    $article['name'] = htmlspecialchars($row['name']);
    $update_link='<a href="update.php?id='.$_GET['id'].'">update</a>';
    $delete_link='
      <form action="process_delete.php" method="POST">
        <input type="hidden" name="id" value="'.$_GET['id'].'">
        <input type="submit" value="delete">
      </form>
      ';
    $author = "<p>by {$article['name']}</p>";
  }
 ?>

<!DOCTYPE html>
<html style="text-align:center">
<head>
  <meta charset="utf-8">
  <title> ♣Untact travel♣ </title>
</head>
<body>
  <h1><a href="index.php" style="color:green">♣Untact travel♣</a></h1>
  <a href = "author.php">author</a>
  <ul style="list-style-type:none;"> <?= $list ?> </ul>
  <a href="create.php" style="color:pink">create</a>
  <?=$update_link?>
  <?=$delete_link?>
  <h2> <?= $article['title']?> </h2>
   <?= $article['description'] ?>
   <?= $author ?>
</body>
</html>
