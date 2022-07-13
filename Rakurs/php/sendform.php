<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mesa = $_POST['message'];

	$name = htmlspecialchars($name);
	$email = htmlspecialchars($email);
	$mesa = htmlspecialchars($mesa);

	$name = urldecode($name);
	$email = urldecode($email);
	$mesa = urldecode($mesa);

	$message = 'Пользователь - '.$name.', отправил вам следующее сообщение: "'.$mes.'" <br> Его email: '.$email.'. ';
	$title = "Сообщение с сайта";
	$email_admin = "little4biz@gmail.com";

	mail($email_admin, $title, $message,"From: Belle.com \r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=UTF-8");
?>