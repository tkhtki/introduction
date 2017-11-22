<html>

<head>
<meta php-equiv="Content-Type" content="text/php; charset=UTF-8">

<title>入力フォーム</title>
</head>
<body>
<form action="mission_1-4.php" method="post">
  名前：<br />
  <input type="text" name="name" size="30" value="" /><br />
  メールアドレス：<br />
  <input type="text" name="mail" size="30" value="" /><br />
  コメント：<br />
  <textarea name="comment" cols="30" rows="5"></textarea><br />
  <br />
  <input type="submit" value="登録する" />
</form>

<table border="1">
 <tr>
    <td>名前</td><td><?php echo htmlspecialchars($_POST["name"], ENT_QUOTES) ?></td>
  </tr>
  <tr>
    <td>メールアドレス</td><td><?php echo htmlspecialchars($_POST["mail"], ENT_QUOTES) ?></td>
  </tr>
  <tr>
    <td>コメント</td><td><?php echo nl2br(htmlspecialchars($_POST["comment"], ENT_QUOTES)) ?></td>
  </tr>

</body>


</html>
