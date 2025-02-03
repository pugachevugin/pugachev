<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Выполняем запрос
$sql = "SELECT * FROM a";
$result = $conn->query($sql);

// Проверяем результат запроса
if (!$result) {
    http_response_code(500); // Ошибка сервера
    die(json_encode(["error" => "Query failed: " . $conn->error]));
}

$data = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Возвращаем данные в формате JSON
echo json_encode($data);

$conn->close();
?>