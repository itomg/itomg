<?php
require_once("oauth/qq/API/qqConnectAPI.php");
$qc = new QC();
$access_token = $qc->qq_callback();
if ( ! empty($access_token)) {
	$openid = $qc->get_openid();
	if ( ! empty($openid)) {
		echo $openid;
		$qc = new QC($access_token, $openid);
		$ret = $qc->get_user_info();
		echo '<pre>';
		print_r($ret);
		echo '</pre>';
	}
}
