<?php
/**
 * Created by PhpStorm.
 * User: fsoul
 * Date: 17.04.2016
 * Time: 21:20
 */
foreach ($_POST as $k => $v) {
    $res[$k] = $v;
}
if ($res['title'] == 'Перезвоните мне') {
    $message = 'Имя: ' . $res['callback_name'] . "\r\nНомер телефона: " . $res['callback_num'];
} else {
    $message = 'Имя: ' . $res['contact_name'] . "\r\nEmail адрес: " . $res['contact_email'] .
        "\r\nТема: " . $res['contact_subject'] . "\r\nСообщение: " . $res['contact_message'];
}

switch($res['type'])
{
    case 0:
        $subject = "Перезвоните мне";
        $message = 'Имя: ' . $res['callback_name'] . "\r\nНомер телефона: " . $res['callback_num'];
        break;
    case 1:
        $subject = "Обратная связь";
        $message = 'Имя: ' . $res['contact_name'] . "\r\nEmail адрес: " . $res['contact_email'] .
            "\r\nТема: " . $res['contact_subject'] . "\r\nСообщение: " . $res['contact_message'];
        break;
    case 2:
        $subject = "Зарезервировать";
        $message = 'Имя: ' . $res['callback_name'] . "\r\nНомер телефона: " . $res['callback_num'];
        break;
    default:
        $subject = "";
}

$to = 'bilinskyivitalii@gmail.com';
$headers = 'From: avantage@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$send = mail($to, $subject, $message, $headers);
if ($send) return true;