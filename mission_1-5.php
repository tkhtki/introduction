<html>

<head>
<meta php-equiv="Content-Type" content="text/php; charset=UTF-8">

<title>���̓t�H�[��</title>
</head>
<body>
<form action="mission_1-5.php" method="post">
  ���O�F<br />
  <input type="text" name="name" size="30" value="" /><br />
  ���[���A�h���X�F<br />
  <input type="text" name="mail" size="30" value="" /><br />
  �R�����g�F<br />
  <textarea name="comment" cols="30" rows="5"></textarea><br />
  <br />
  <input type="submit" value="�o�^����" />
</form>
</body>


<?php

$filename = 'kadai5.txt';
$fp = fopen($filename,'w');
fwrite($fp,
   "���O".htmlspecialchars($_POST["name"], ENT_QUOTES) .
   "���[���A�h���X".htmlspecialchars($_POST["mail"], ENT_QUOTES) .
   "�R�����g".htmlspecialchars($_POST["comment"], ENT_QUOTES) 
);
fclose($fp);

?>

</html>
