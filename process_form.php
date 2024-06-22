<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = ""; // Если пароль не установлен, оставьте пустым
$dbname = "forumdb"; // Укажите имя вашей базы данных

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>"; // Отладка соединения

// Получение данных из формы
$fullName = isset($_POST['full-name']) ? $_POST['full-name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$organizationName = isset($_POST['organization-name']) ? $_POST['organization-name'] : '';
$websiteUrl = isset($_POST['organization-link']) ? $_POST['organization-link'] : '';
$position = isset($_POST['position']) ? $_POST['position'] : 'не имеется';
$postType = isset($_POST['role']) ? $_POST['role'] : '';
$mode = isset($_POST['mode']) ? $_POST['mode'] : '';
$section = isset($_POST['section']) ? $_POST['section'] : 0;
$registerTime = date('Y-m-d H:i:s'); // Время регистрации

// Проверка полученных данных
echo "Full Name: $fullName<br>";
echo "Phone: $phone<br>";
echo "Email: $email<br>";
echo "Organization Name: $organizationName<br>";
echo "Website URL: $websiteUrl<br>";
echo "Position: $position<br>";
echo "Post Type: $postType<br>";
echo "Mode: $mode<br>";
echo "Section: $section<br>";
echo "Register Time: $registerTime<br>";

// Подготовка и выполнение SQL запроса
$stmt = $conn->prepare("INSERT INTO registrations (name, university, post, post_type, participation_format, section, university_link, email, tel, register_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}
$stmt->bind_param("sssssisiss", $fullName, $organizationName, $position, $postType, $mode, $section, $websiteUrl, $email, $phone, $registerTime);

if ($stmt->execute()) {
    echo "Регистрация прошла успешно";

    // Отправка письма пользователю
    $mail = new PHPMailer(true);
    try {
        // Настройки сервера
        $mail->isSMTP();
        $mail->Host = 'smtp.yandex.com'; // Укажите SMTP сервер Яндекса
        $mail->SMTPAuth = true;
        $mail->Username = 'test123blohin@yandex.ru'; // Ваш SMTP логин
        $mail->Password = 'urmxldbyhnxttdcj'; // Ваш SMTP пароль для приложений
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';
        // Получатель
        $mail->setFrom('test123blohin@yandex.ru', 'Форум');
        $mail->addAddress($email, $fullName);

        // Содержимое письма
        $mail->isHTML(true);
        $mail->Subject = 'Регистрация на форум';
        $mail->Body    = "Уважаемый(ая) $fullName,<br><br>Вы успешно зарегистрировались на форум.<br><br>С уважением,<br>Администрация форума";
        $mail->AltBody = "Уважаемый(ая) $fullName,\n\nВы успешно зарегистрировались на форум.\n\nС уважением,\nАдминистрация форума";

        $mail->send();
        echo 'Письмо успешно отправлено.';
    } catch (Exception $e) {
        echo "Письмо не может быть отправлено. Ошибка: {$mail->ErrorInfo}";
    }
} else {
    echo "Ошибка: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
