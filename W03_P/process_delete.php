<?php
  $link = mysqli_connect("localhost", "root", "k5669203","tra");
  settype($_POST['id'],'integer');
  $filtered=array(
    'id'=>mysqli_real_escape_string($link,$_POST['id'])
    );
  $query = "
  DELETE
    FROM topic
    WHERE
      id='{$filtered['id']}'
";
  $result = mysqli_multi_query($link, $query);
  if($result == false){
    echo '삭제하는 과정에서 문제가 발생했습니다. 관라자에게 문의하세요.';
    echo mysqli_error($link);
  } else {
    echo '성공했습니다. <a href="index.php">돌아가기</a>';
  }
?>
