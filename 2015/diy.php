<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="gb2312" />
<meta name="robots" content="all" />
<meta name="author" content="w3school.com.cn" />

<link rel="stylesheet" type="text/css" href="tiy.css" />

<title>�������</title>
</head>

<body id="editor">

<div id="wrapper">

<div id="header">
<h1>�������</h1>
</div>

<form action="diyresult.php" method="post" id="tryitform" name="tryitform" onSubmit="validateForm();" target="i">

<div id="butt">
<input type="submit" value="�ύ">
</div>

<div id="CodeArea">
<h2>�༭���Ĵ��룺</h2>
<textarea id="TestCode" wrap="logical" name="payload">
<?php
  $file = $_GET['f'];
  echo file_get_contents("templates/{$file}.txt");
  $encode = $_GET['encode'];
?>
</textarea>
</div>

<input type="hidden" id="code" name="code"  />
<input type="hidden" id="bt" name="bt" />
<input type="hidden" id="encode" name="encode"  value="<?php echo $encode ?>"/>
</form>

<div id="result">
<h2>�鿴���:</h2>
<iframe frameborder="0" name="i" src="diyresult.php"></iframe>
</div>

<div id="footer">
<p>����������ı����б༭���Ĵ��룬Ȼ�󵥻�"�ύ"��ť���Խ����</a></p>
</div>

</div>

<script type="text/javascript">

function validateForm()
{
var code=document.getElementById("code").value;
if (code.length>5000)
	{
	document.getElementById("code").value="<h1>Error</h1>";
	}
}
</script>

</body>
</html>
