<?php
require_once("oauth/qq/API/qqConnectAPI.php");
$qc = new QC();
$access_token = $qc->qq_callback();
if ( ! empty($access_token)) {
	$openid = $qc->get_openid();
	echo $openid;
	$ret = $qc->get_info();
	echo '<pre>';
	print_r($ret);
	echo '</pre>';
}
