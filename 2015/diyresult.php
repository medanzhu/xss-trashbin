<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="gb2312" />
<link rel="stylesheet" type="text/css" href="tiy.css" />

<title>��ʾ�������н��</title>
</head>

<body id="editor">
<?php
	$encode = $_POST['encode'];
	if (!empty($encode) 	 &&  $encode  == 'urlencode') {
		echo '�������룬�����ʽΪ�� ' . $encode .'<br><p>';
		$code = urldecode($_POST['payload']);
	} else {
		$code = $_POST['payload'];
	}
  echo $code;
?>

</body>
</html>
