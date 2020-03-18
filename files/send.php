<?php
	$fio = $_POST['fio'];
	$email = $_POST['email'];
	$message = $_POST['message'];	

	$fio = htmlspecialchars($fio);
	$email = htmlspecialchars($email);
	$message = htmlspecialchars($message);

	$fio = urldecode($fio);
	$email = urldecode($email);
	$message = urldecode($message);

	$fio = trim($fio);
	$email = trim($email);
	$message =trim($message);

	$to = 'Dimkin.russia@gmail.com';
	$subject='Заявка с сайта';
	$from='kaluga@mdmservice.pro';

	//$subject = mb_convert_encoding($subject, 'cp1251','utf-8');
	$fio = mb_convert_encoding($fio, 'cp1251','utf-8');    
	$message = mb_convert_encoding($message, 'cp1251','utf-8');
	    

	$body='Name: '.$fio."\nMessage: \n".$message."\nTel: ".$email;

	if (mail($to, $subject,$body,$from))
	{   
	exit();
	}
	else{
	echo "ошибка при отправке сообщения";
	}
	exit();
?>