<?php
//$img_url=$_GET['img_url'];
$img_url="https://bj29.cn-beijing.data.alicloudccp.com/5fd9bc3c1e41ea78194849389d10c2d0e6917a57%2F5fd9bc3cd75846d85b4b41229a5c5ca993d0278e?x-oss-access-key-id=LTAIsE5mAn2F493Q&x-oss-additional-headers=referer&x-oss-expires=1635000966&x-oss-process=image%2Fresize%2Cw_1920%2Fformat%2Cjpeg&x-oss-signature=8uxlwoEsWikX72FM7RqB%2BWC2pXw4F4Hkjkjz%2F9xKLj8%3D&x-oss-signature-version=OSS2";
header('Content-type: image/jpeg');
$context=array('http' => array ('header'=> 'Referer: https://www.aliyundrive.com',),);
$xcontext = stream_context_create($context);
echo $str=file_get_contents($img_url,FALSE,$xcontext);
?>