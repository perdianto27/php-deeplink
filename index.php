<?php

	//Detect special conditions devices
	$iMac    = stripos($_SERVER['HTTP_USER_AGENT'],"Mac");
	$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
	$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
	$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
	$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
	$winPhone = stripos($_SERVER['HTTP_USER_AGENT'],"Windows Phone");
	$winOS 	= stripos($_SERVER['HTTP_USER_AGENT'],"Win");
	$huaweiLIO = stripos($_SERVER['HTTP_USER_AGENT'],"LIO-L29");

	//check if user is using ipod, iphone or ipad...
	if( $iPod || $iPhone || $iPad || $iMac){
		//we send these people to Apple Store
		header('Location: itms-apps://itunes.apple.com/us/app/m-app/id123456789'); // <-apple store link here		
	}else if($Android){
		//we send these people to Android Store
		header('Location: market://details?id=com.app.mobile'); // <-android store link here
	}else if($winOS || $winPhone){
		//we send these people to Android Store
		header('Location: https://play.app.goo.gl/?link=https://play.google.com/store/apps/details?id=com.app.mobile'); // <-windows store link here
	}else if($huaweiLIO) {
		header('Location: appmarket://details?id=com.app.mobile'); // <-app gallery huawei link here
	}
?>
