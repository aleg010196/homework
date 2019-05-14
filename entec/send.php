<?php
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$fullname = htmlspecialchars($fullname);
$phone = htmlspecialchars($phone);
$fullname = urldecode($fullname);
$phone = urldecode($phone);
$fullname = trim($fullname);
$phone = trim($phone);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("cirka010196@gmail.com", "Заявка с сайта", "ФИО:".$fullname.". E-mail: ".$phone ,"From: cirka010196@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>