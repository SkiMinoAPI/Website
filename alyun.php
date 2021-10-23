<?php
header("Connection: keep-alive");
header("Cache-Control: max-age=0");
header("Upgrade-Insecure-Requests: 1");
header("User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64");
header("Accept-Language: zh-CN,zh;q=0.9");

header("Content-Type: Image/JPEG;Charset=UTF-8");
imagejpeg(imagecreatefromjpeg('./logo.jpg'));
?>