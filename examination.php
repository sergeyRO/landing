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

$array = [];

if(strlen($name) == 0 ||
    (strlen($phone) != 0 && strlen($phone) < 4 && ctype_digit($phone)) ||
    !ctype_digit($phone) ||
    (strlen($email) != 0 && !filter_var($email, FILTER_VALIDATE_EMAIL)))
{
    if (strlen($name) == 0) {
        $array[] = array('type' => 'name', 'error' => 'Поле пустое');
    }
    if (strlen($phone) != 0 && strlen($phone) < 4 && ctype_digit($phone)) {
        $array[] = array('type' => 'phone', 'error' => 'Телефон содержит менее 4 цифр');
    }
    if (!ctype_digit($phone)) {
        $array[] = array('type' => 'phone', 'error' => 'Телефон обязан содержать цифры');
    }
    if (strlen($email) != 0 && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $array[] = array('type' => 'email', 'error' => 'Некорректно введен адрес электронной почты');
    }
}
else
{
    $array[] = array('type' => 'success');
}

echo json_encode($array);
?>