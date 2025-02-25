<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With");

function createConnection() {
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

    return $conn;
}

function executeQuery($conn, $sql) {
    // Выполняем запрос
    $result = $conn->query($sql);

    // Проверяем результат запроса
    if (!$result) {
        http_response_code(500); // Ошибка сервера
        die(json_encode(["error" => "Query failed: " . $conn->error]));
    }

    return $result;
}

function fetchData($result) {
    $data = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data;
}

function getData() {
    $conn = createConnection();
    $sql = "SELECT * FROM a";
    $result = executeQuery($conn, $sql);
    $data = fetchData($result);

    // Закрываем соединение
    $conn->close();

    return $data;
}

// Возвращаем данные в формате JSON
echo json_encode(getData());
?>
