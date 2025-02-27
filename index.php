<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моя визитка</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 150px;
            background-image: url("bubbles-cell-cerulean-1.jpg");
        }
        .container {
            background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            color: purple;
        }
        h1 {
            font-size: 36px;
            color: bisque;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        .button {
            display: inline-block;
            padding: 5px 5px;
            transition: background-color 0.3s ease;
            margin-left: 750px;
            margin-bottom: 100px;
        }
        .button:hover {
            background-color: aqua;
            transform: scale(1.2);
        }
        .contact-info div:hover {
            transform: scale(1.2);
            transition: transform 0.3s ease;
        }
        .info {
            background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
            padding: 20px;
        }
        .info p {
            color: blue;
            margin-bottom: 5px;
        }
        .contact-info {
            display: flex;
            justify-content: space-between;
        }
        .contact-info div {
            flex: 3;
            text-align: center;
        }
        .table-container {
            width: 600px;
            text-align: left;
            margin: 0 auto;
        }
        #load-more {
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Моя визитка</h1>
        <div class="info">
            <p><i class='bx bx-right-arrow'></i>
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>Привет, меня зовут <ins>Пугачёв Евгений.</ins></p>
            <p>Живу на этой планете <strong>21 год.</strong></p>
            <p>Свяжитесь со мной для сотрудничества:<i class='bx bx-left-arrow'></i><link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'></p>
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
                        <th>Код</th>
                        <th>Название</th>
                    </tr>
                </thead>
                <tbody> </tbody>
            </table>
            <button id="load-more" class="btn btn-primary">Загрузить еще</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            function loadData(limit = 10, append = false) {
                $.ajax({
                    url: 'contragents.php',
                    method: 'GET',
                    data: { limit: limit },
                    success: function(response) {
                        if (append) {
                            $('#data-table tbody').append(response);
                        } else {
                            $('#data-table tbody').html(response);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Ошибка загрузки данных
                    }
                });
            }

            // Инициализируем начальную загрузку данных
            loadData();

            // Добавляем обработчик для кнопки "Загрузить еще"
            $('#load-more').click(function() {
                let currentRows = $('#data-table tbody tr').length;
                loadData(currentRows + 10, true);  // Добавляем данные вместо замены
            });
        });
    </script>
</body>
</html>
