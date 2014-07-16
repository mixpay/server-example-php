<?php
header('Content-Type:text/html;charset=utf-8');

include 'rsa.php';

//转换成key=value的形式
$kv_array = array();
foreach($_GET as $key => $value){
  $kv = $key.'='.$value;
  $kv_array[] = $kv;
}

//排序
sort($kv_array);

//以&符号连接
$content = join("&", $kv_array);
$sign = sign($content);

echo urlencode($sign); 