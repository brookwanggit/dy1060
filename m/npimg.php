<?php
/**
 *『那片』全网在线资源采集平台 - 奇艺图片本地显示插件
 * 官方网站    www.nepian.com
 * QQ群        107028575(1群)，577200423(2群)
 * @author     朝阳<515233307@qq.com>
 */
error_reporting(0);
header("Content-Type:image/jpeg");
$picurl = $_GET['pic'];
echo npimgcurl($picurl);
function npimgcurl($url){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // 对认证证书来源的检查
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); // 从证书中检查SSL加密算法是	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	$data=curl_exec($ch);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch,CURLOPT_REFERER,$url);	
	curl_close($ch);
	return $data;
}