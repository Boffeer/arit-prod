<?php
// function callback(){

	$name = htmlspecialchars($_POST['arit_name']);
	$phone = htmlspecialchars($_POST['arit_phone']);
	// $email = htmlspecialchars($_POST['arit_email']);
	// $message = htmlspecialchars($_POST['arit_message']);
	// $formname = htmlspecialchars($_POST['arit_formname']);
	// $formpage = htmlspecialchars($_POST['arit_formpage']);


	if ($name && $phone) {

		// $subj = 'арит.рф - ' . $formname;
		$subj = 'арит.рф - ';

		$message2 = '<table width="350" border="0" cellspacing="0" cellpadding="0" style="font: 300 14px Arial;">';
		$message2 .= '<tr><td colspan="2" style="padding-top:15px; font-weight:bold;"><strong>Данные: </strong></td>';
		$message2 .= '<tr><td>Имя: </td><td>' . $name . '</td></tr>';
		$message2 .= '<tr><td>Телефон: </td><td>' . $phone . '</td></tr>';
		//$message2 .= '<tr><td>Мыло: </td><td>' . $email . '</td></tr>';
		//$message2 .= '<tr><td>Телефон: </td><td>' . $formname . '</td></tr>';
		//$message2 .= '<tr><td>Телефон: </td><td>' . $formpage . '</td></tr>';

		// if ($message) {
			// $message2 .= '<tr><td>Сообщение: </td><td>' . $message . '</td></tr>';
		// }

		$message2 .= '</table>';

		$headers  = "Content-type: text/html; charset=utf-8 \r\n";
		$headers .= "From: <boffeechane@gmail.com>\r\n";

		$mailstat = mail('boffeechane@gmail.com', $subj, $message2, $headers);
		
		wp_send_json([
			'success' => true,
			'message' => 'Спасибо, ваша заявка отправлена!'
		]);
	} else {
		wp_send_json([
			'success' => false,
			'message' => 'Заполните все обязательные поля'
		]);
	}
	echo $name;

	wp_die();
// }
