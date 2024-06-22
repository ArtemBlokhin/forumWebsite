<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $question = htmlspecialchars($_POST['question']);

    $mail = new PHPMailer(true);

    try {
        // Настройки SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.yandex.com'; // Укажите SMTP сервер Яндекса
        $mail->SMTPAuth = true;
        $mail->Username = 'test123blohin@yandex.ru'; // Ваш SMTP логин
        $mail->Password = 'urmxldbyhnxttdcj'; // Ваш SMTP пароль для приложений
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        // Настройки письма
        $mail->setFrom('test123blohin@yandex.ru', 'Форма обратной связи');
        $mail->addAddress('test123blohin@yandex.ru', 'Форма обратной связи'); // Отправка письма самому себе

        // Контент письма
        $mail->isHTML(true);
        $mail->Subject = 'Новый вопрос с сайта';
        $mail->Body    = "ФИО: $name<br>Почта: $email<br><br>Задает следующий вопрос:<br>$question";
        $mail->AltBody = "ФИО: $name\nПочта: $email\n\nЗадает следующий вопрос:\n$question";

        $mail->send();
        echo 'Ваше сообщение было успешно отправлено!';
    } catch (Exception $e) {
        echo "При отправке сообщения произошла ошибка: {$mail->ErrorInfo}";
    }
} else {
    echo "Некорректный метод запроса.";
}
?>
