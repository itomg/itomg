<?php
require_once("oauth/qq/API/qqConnectAPI.php");
$qc = new QC();
$access_token = $qc->qq_callback();
if ( ! empty($access_token)) {
	$openid = $qc->get_openid();
	if ( ! empty($openid)) {
		$qc = new QC($access_token, $openid);
		$user_info = $qc->get_user_info();
		if( ! empty($user_info)){
			$profile = new stdClass();
			$profile->id = $openid;
			$profile->email = "";
			$profile->{'first-name'} = $user_info['nickname'];
			$profile->{'last-name'} = "";
			$profile->{'lang'} = $this->session->userdata('lang');
				
			// get user head picture
			if(isset($user_info['figureurl_2']) && ! empty($user_info['figureurl_2'])){
				$profile->picture = $user_info['figureurl_2'];
			}
			echo "<pre>";
			print_r($profile);
			echo "</pre>";
// 			$result = $this->user_manager->oAuthLogin($profile, "qq", $params["access_token"]);
// 			redirect('user/dashboard/oauth_success');
		}
	}
}
exit("Failed to authenticate with QQ. Please try again");