<?php 
include "contragents.php"; 
$inform = getAllInfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моя визитка</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Моя визитка</h1>
        <div class="info">
            <p><i class='bx bx-right-arrow'></i>
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            Привет, меня зовут <ins>Пугачёв Евгений.</ins></p>
            <p>Живу на этой планете <strong>21 год.</strong></p>
            <p>Свяжитесь со мной для сотрудничества:
            <i class='bx bx-left-arrow'></i><link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'></p>
            <div class="button">
                <p><a href="https://donampa.ru/">учусь тут</a></p>
                <img src="1.gif" width="100" height="100">
            </div>
            <div class="contact-info">
                <div>
                    <i class='bx bx-phone-call'></i>
                    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
                    <strong>Телефон:</strong>
                    <p>+7(949)777-77-77</p>
                </div>
                <div>
                    <i class='bx bxs-envelope'></i>
                    <strong>Email:</strong>
                    <p>example@mail.ru</p>
                </div>
                <div>
                    <i class='bx bx-buildings'></i>
                    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
                    <strong>Адрес:</strong>
                    <p>г. Донецк</p>
                </div>
            </div>
        </div>

        <div class="table-container">
            <h1>Динамическая подгрузка данных</h1>
            <table id="data-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= ($inform[0]["id"]); ?></td>
                        <td><?= ($inform[0]["name"]); ?></td>
                    </tr>
                    <tr>
                        <td><?= ($inform[1]["id"]); ?></td>
                        <td><?= ($inform[1]["name"]); ?></td>
                    </tr>
                    <tr>
                        <td><?= ($inform[2]["id"]); ?></td>
                        <td><?= ($inform[2]["name"]); ?></td>
                    </tr>
                    <tr>
                        <td><?= ($inform[3]["id"]); ?></td>
                        <td><?= ($inform[3]["name"]); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
