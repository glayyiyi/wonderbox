<?php

if (!defined('ROOT_PATH')) die('���ܷ���'); //��ֱֹ�ӷ���


if (isset($_REQUEST['user_id'])) {        
	
} else {
	$title = '��ͨ�������й��˻�';
	$template = 'user_reg_third.html.php';
} 

function decrypt($data, $key) {
	$key = md5 ( $key );
	$x = 0;
	$data = base64_decode ( $data );
	$len = strlen ( $data );
	$l = strlen ( $key );
	for($i = 0; $i < $len; $i ++) {
		if ($x == $l) {
			$x = 0;
		}
		$char .= substr ( $key, $x, 1 );
		$x ++;
	}
	for($i = 0; $i < $len; $i ++) {
		if (ord ( substr ( $data, $i, 1 ) ) < ord ( substr ( $char, $i, 1 ) )) {
			$str .= chr ( (ord ( substr ( $data, $i, 1 ) ) + 256) - ord ( substr ( $char, $i, 1 ) ) );
		} else {
			$str .= chr ( ord ( substr ( $data, $i, 1 ) ) - ord ( substr ( $char, $i, 1 ) ) );
		}
	}
	return $str;
}

?>