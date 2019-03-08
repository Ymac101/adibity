<?php

function getUserLanguages() {
	$languageHeader = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	$splitLanguageHeader = explode(",", $languageHeader);
	$languageList = array();
	foreach ($splitLanguageHeader as $lang) {
		if(!strpos($lang, ";")) continue;
		$lang = explode(";", $lang)[0];
		array_push($languageList, $lang);
	}
	return $languageList;
}

function getUserISP() {
	$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	$formmated_ip = str_replace(".", "-", $_SERVER['REMOTE_ADDR']) . ".";
	$isp = explode($formmated_ip, $hostname)[1];
	return $isp;
}

$date = date("H:i:s d/m/Y");
$userIp = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$userIsp = getUserISP();
$userLanguages = getUserLanguages();

$user = array(
	'time' => $date,
	'user_ip' => $userIp,
	'user_agent' => $userAgent,
	'user_isp' => $userIsp,
	'user_languages' => $userLanguages
);

file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/Logs/access.log', json_encode($user) . "\n", FILE_APPEND | LOCK_EX);