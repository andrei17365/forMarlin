<?php
	function newCookie($a,$b,$c){
		return setcookie($a,$b,time()+$c);
	}
	function readCookie($a){
		return $_COOKIE[$a];
	}
	function delCookie($a){
		setcookie($a, '', time());
	}
	newCookie('new','Hello',60);
	echo readCookie('new');
?>