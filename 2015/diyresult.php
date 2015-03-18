<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="gb2312" />
<link rel="stylesheet" type="text/css" href="tiy.css" />

<title>显示代码运行结果</title>
</head>

<body id="editor">
<?php
	$encode = $_POST['encode'];
	if (!empty($encode) 	 &&  $encode  == 'urlencode') {
		echo '经过解码，编码格式为： ' . $encode .'<br><p>';
		$code = urldecode($_POST['payload']);
	} else {
		$code = $_POST['payload'];
	}
  echo $code;
?>

</body>
</html>
