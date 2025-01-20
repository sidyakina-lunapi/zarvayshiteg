<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $to = 'Dragom.17school@mail.ru';
    $header = 'Отзыв от пользователя'
    $message = "Имя пользователя: $name \nЭлектронная почта: $email \nОтзыв: $comment";
    $send = mail($to, $header, $message, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
?>