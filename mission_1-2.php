<?php
$filename = 'kadai2.txt';
//echo $filename;

$fp = fopen($filename,'w');

fwrite($fp,'�ۑ�2����!!');

fclose($fp);

?>