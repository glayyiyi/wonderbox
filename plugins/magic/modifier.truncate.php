<?php

// function magic_modifier_truncate($string, $length = '20'){
//   if ($length == 0) {    return '';}
   
//     $pa = "/[\x01-\x7f]|[\xa1-\xff][\xa1-\xff]/";


//     preg_match_all($pa, $string, $t_string);

//     if (count($t_string[0]) > $length)

//         return join('', array_slice($t_string[0], 0, $length));

//     return join('', array_slice($t_string[0], 0, $length));



//    $tmpstr = "";
//     for($i = 0; $i < $strlen; $i++) {
//         if(ord(substr($string, $i, 1)) > 0xa0) {
//             $tmpstr .= substr($string, $i, 2);
//             $i++;
//         } else
//             $tmpstr .= substr($string, $i, 1);
//     }
//     return $tmpstr;
	

// }

function magic_modifier_truncate($string,$parse_var)
//$length = 80,$etc = '...',$break_words = false,$middle = false
{
	//by Glay
	$_var = explode(":",$parse_var);
	$length = $_var[0];
	$etc = $_var[1];
	$break_words = $_var[2];
	$middle = $_var[3];

	if ($length == 0)
		return '';

	if (strlen($string) > $length) {
		$length -= min($length, strlen($etc));
		if (!$break_words && !$middle) {
			$string = preg_replace('/\s+?(\S+)?$/', '', substr($string, 0, $length+1));
		}
		if(!$middle) {
			return substr($string, 0, $length) . $etc;
		} else {
			return substr($string, 0, $length/2) . $etc . substr($string, -$length/2);
		}
	} else {
		return $string;
	}
}

?>
