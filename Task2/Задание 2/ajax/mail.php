<?
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$product = $_POST['product'];

	$to = "test.test.90_90@mail.ru";
	$tema = "Новый заказ";
	$message = "Имя: .$name\r\n Телефон: .$tel\r\n Email: .$email \r\n Название товара: .$product";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	$success = mail($to, $tema, $message, $headers);
	echo $success;

?>