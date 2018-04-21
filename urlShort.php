<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8" /> 
<title>urlShort</title> 
</head> 
<body> 
<form action="urlShort.php" method="post"> 
<input type="text" size="16" name="url" value="输入网址" onfocus="if(this.value=='输入网址'){this.value='';}" onblur="if(this.value==''){this.value='输入网址'};"> 
<input type="submit" value=" 生成 " /> 
</form> 
</body> 
</html> 
<?php 
header("Content-Type:text/html;charset=UTF-8"); 
function base62($x){ 
	$show = ''; 
	while($x>0){ 
		$s = $x % 62; 
		if ($s > 35){ 
			$s = chr($s + 61); 
		}else if ($s > 5 && $S<=35){ 
			$s = chr($s + 55); 
		} 
		$show .= $s; 
		$x = floor($x/62); 
	} 
return $show; 
} 
//生成短网址 
function url_short($url){ 
	$url = crc32($url); 
	$result = sprintf("%u",$url); 
	return base62($result); 
} 

echo ("生成短网址为：<a href='http://$_POST[url]'>".url_short($_POST['url'])."</a>"); 
