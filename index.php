<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>
	<head>
		<title>My DS</title>
			<!--meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /-->
<meta charset=UTF-8 name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
			<link rel="stylesheet" type="text/css" href="/index.css" />
	</head>
	<body>
<tit>
		<h1>数据结构(Data Structure)</h1>
</tit>
		<!--h1 class="hide">数据结构(Data Structure)</h1-->
		<ul class="list">
<?php 
$dir = './'.$_SERVER['REQUEST_URI'];
// 以升序排序 - 默认
$a = scandir($dir);
foreach ($a as $value) {
	if ( ereg("[^.]*\.(cpp|c|h)$", $value) || is_dir($value)) {
//		if(! ereg("(~|swp|orig)$", $value) ) {
			if (is_file($value)) {
				$listType = "file";
			} elseif (is_dir($value)) {
				if ('.' == "$value")
					continue;
				$listType = "dir";
				$value = "$value/";
			}
			echo "<div class = '$listType'><a href = '$value'><li> $value </li></a></div> \n";
			$listType = "file";
//		}
	}
}

//$Agent = $_SERVER['HTTP_USER_AGENT'];
//echo $Agent;
?>
		</ul>

	</body>
</html>
