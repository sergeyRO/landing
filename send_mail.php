<?php
/**
 * Created by PhpStorm.
 * User: serge
 * Date: 09.07.2022
 * Time: 21:52
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$name_sender = $_POST['name']; //Имя отправителя
$phone_sender = $_POST['phone']; //Телефон отправителя
$email_sender = $_POST['e-mail']; //Почта отправителя

$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;

$mail->Host = 'ssl://smtp.mail.ru';
$mail->Port = 465;
$mail->Username = 'sergey_r.o@mail.ru';
$mail->Password = 'HJsD4fwx4qRmYTCDAoNJ';

// От кого
$mail->setFrom('sergey_r.o@mail.ru', 'nordpromotion.se');

// Кому
$mail->addAddress('sergey_r.o@mail.ru', 'nordpromotion.se');

// Тема письма
$mail->Subject = 'Запрос с сайта NORDPROMOTION';

// Тело письма
$body = '
<p><strong>Имя: '.$name_sender.'</strong></p>
<p><strong>Телефон: '.$phone_sender.'</strong></p>
<p><strong>Почта: '.$email_sender.'</strong></p>
';
$mail->msgHTML($body);

echo $mail->send();