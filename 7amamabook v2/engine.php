<?php
@session_start();
$db['host'] = 'localhost';
$db['user'] = 'root';
$db['pass'] = '';
$db['name'] = 'hackme';
$siteURL = 'http://localhost/ctf2/';
date_default_timezone_set('Egypt');
header("Content-type: text/html; charset=utf-8");

$key = '6fc43a996faf97462f54a64aff28d382';

$c = @mysql_connect($db['host'],$db['user'],$db['pass']);
if(!$c) exit('Can\'t connect to mysql');
$q = @mysql_select_db($db['name']);
if(!$q) exit('Can\'t select database');


function getUserInfo($token){
	if($token){
		$token = mysql_real_escape_string($token);
		$q = mysql_query("SELECT `email` FROM `sessions` WHERE `id`='$token';");
		$r = mysql_fetch_assoc($q);
		$email = mysql_real_escape_string($r['email']);
		$q = mysql_query("SELECT `id`,`name`,`email`,`password` FROM `users` WHERE `email` = '$email';");
		$row = mysql_fetch_assoc($q);
		return $row;
	}else{
		return false;
	}
}

function genRandom($len = 10){
    $allChars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~!@#^&*_-+|[],.?';
    $charCount = strlen($allChars);
    $result = '';
	for ($i = 0; $i < $len; $i++) {
		$rand = mt_rand(0, $charCount-1);
		$result .= $allChars[$rand];
    }
    return $result;
}
function secure($param){
	$param = htmlentities($param);
	$param = mysql_real_escape_string($param);
	$param = str_replace('&amp;','&',$param);
	return $param;
}
?>