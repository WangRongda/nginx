<?php 
$dir = "./";

// 以升序排序 - 默认
$a = scandir($dir);

// // 以降序排序
$b = scandir($dir,1);

//print_r($a);
//print_r($b);
echo $a[4];
 
?>
