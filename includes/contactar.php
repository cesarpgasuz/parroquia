<?php 

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{   
	extract($_POST);
	$subject = "=?utf-8?B?".base64_encode($asunto)."=?="; 
	$message = "De: ".$nombre.'<'.$email.'>'.'    '.$mensaje;
	$from="De: $nombre<$email>\r\nReturn-path: $email";
	mail("notariaparroquiapozos@outlook.com", $subject, $message, $from);
     
}

 ?>