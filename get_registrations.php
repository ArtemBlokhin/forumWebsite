<?php
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

    // Подготовка SQL запроса
    $sql = "SELECT last_name, first_name, phone, email, organization_name, website_url, position, mode, section, consent FROM registration";
    $result = $conn->query($sql);

    $registrations = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $registrations[] = $row;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($registrations);

    $conn->close();
?>
