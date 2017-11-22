<html>

<head>
<meta php-equiv="Content-Type" content="text/php; charset=UTF-8">

<title>入力フォーム</title>
</head>
<body>
<form action="mission_1-5.php" method="post">
  名前：<br />
  <input type="text" name="name" size="30" value="" /><br />
  メールアドレス：<br />
  <input type="text" name="mail" size="30" value="" /><br />
  コメント：<br />
  <textarea name="comment" cols="30" rows="5"></textarea><br />
  <br />
  <input type="submit" value="登録する" />
</form>
</body>


<?php

$filename = 'kadai5.txt';
$fp = fopen($filename,'w');
fwrite($fp,
   "名前".htmlspecialchars($_POST["name"], ENT_QUOTES) .
   "メールアドレス".htmlspecialchars($_POST["mail"], ENT_QUOTES) .
   "コメント".htmlspecialchars($_POST["comment"], ENT_QUOTES) 
);
fclose($fp);

?>

</html>
