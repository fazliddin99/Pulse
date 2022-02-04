<?php
    $_POST = json_decode( file_get_contents("php://input"), true); 
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;

    $to = "random@mail.com";

    $subject = "Pulse";
    $message = "ЗАЯВКА С САЙТА<br />
    <b>Имя:</b> ".htmlspecialchars($name). "<br />
    <b>Email:</b> ".htmlspecialchars($email). "<br />
    <b>Номер:</b> ".htmlspecialchars($phone);
    $headers = "From: Pulse \r\nContent-type: text/html; charset=utf-8 \r\n";
    mail ($to, $subject, $message, $headers);
    exit;
?>