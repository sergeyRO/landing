<?php
/**
 * Created by PhpStorm.
 * User: serge
 * Date: 10.07.2022
 * Time: 0:13
 */
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['e-mail'];
$lang = $_POST['lang'];
$check = $_POST['check'];

$array = [];


if(strlen($name) == 0 ||
    (strlen($phone) != 0 && strlen($phone) < 4 && ctype_digit($phone)) ||
    !ctype_digit($phone) ||
    (strlen($email) != 0 && !filter_var($email, FILTER_VALIDATE_EMAIL))
|| $check == 0)
{
    if ($check == 0)
    {
        switch ($lang)
        {
            case 'ru':
                $error = 'Поле обязательно для заполнения';
                break;
            case 'de':
                $error = 'Pflichtfeld';
                break;
            case 'sv':
            case 'en':
            default:
                $error = 'Required field';
                break;
        }
        $array[] = array('type' => 'check', 'error' => $error);
    }
    if (strlen($name) == 0) {
        switch ($lang)
        {
            case 'ru':
                $error = 'Поле пустое';
                break;
            case 'de':
                $error = 'Das Feld ist leer';
                break;
            case 'sv':
            case 'en':
            default:
                $error = 'The field is empty';
                break;
        }
        $array[] = array('type' => 'name', 'error' => $error);
    }
    if (strlen($phone) != 0 && strlen($phone) < 4 && ctype_digit($phone)) {
        switch ($lang)
        {
            case 'ru':
                $error = 'Телефон содержит менее 4 цифр';
                break;
            case 'de':
                $error = 'Das Telefon enthält weniger als 4 Ziffern';
                break;
            case 'sv':
            case 'en':
            default:
                $error = 'Phone contains less than 4 digits';
                break;
        }
        $array[] = array('type' => 'phone', 'error' => $error);
    }
    if (!ctype_digit($phone)) {
        switch ($lang)
        {
            case 'ru':
                $error = 'Телефон обязан содержать цифры';
                break;
            case 'de':
                $error = 'Das Telefon muss Nummern enthalten';
                break;
            case 'sv':
            case 'en':
            default:
                $error = 'The phone must contain numbers';
                break;
        }
        $array[] = array('type' => 'phone', 'error' => $error);
    }
    if (strlen($email) != 0 && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        switch ($lang)
        {
            case 'ru':
                $error = 'Некорректно введен адрес электронной почты';
                break;
            case 'de':
                $error = 'Falsche E-Mail-Adresse eingegeben';
                break;
            case 'sv':
            case 'en':
            default:
                $error = 'Incorrect e-mail address entered';
                break;
        }
        $array[] = array('type' => 'email', 'error' => $error);
    }
}
else
{
    $array[] = array('type' => 'success');
}

echo json_encode($array);
?>