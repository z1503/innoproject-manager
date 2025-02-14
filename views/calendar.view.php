<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Календарь</title>

    <!-- Подключение стилей FullCalendar -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f4f4f4;
            color: #333;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar a {
            color: white !important;
        }

        .container {
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            position: relative; /* Добавляем относительное позиционирование для контейнера */
        }

        .btn-primary {
            background-color: #0056b3;
            border: none;
        }

        .btn-primary:hover {
            background-color: #003d80;
        }

        .text-black {
            color: black !important;
        }

        /* Исправления для отображения FullCalendar */
        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }

        /* Стиль для названия календаря */
        .calendar-title {
            font-size: 36px; /* Увеличиваем размер шрифта */
            font-weight: bold;
            color: #007bff; /* Цвет заголовка */
            margin-bottom: 10px;
            margin-top: 20px; /* Поднимаем текст немного выше */
        }

        .fc-toolbar-title {
            font-size: 20px;
            font-weight: bold;
        }

        .fc-daygrid-day-number {
            font-size: 16px;
        }

        /* Добавим отступы для предотвращения слияния с другими элементами */
        .fc .fc-button {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .fc .fc-button:hover {
            background-color: #0056b3;
        }

        /* Центрируем кнопку today */
        .fc-button-group {
            text-align: center;
        }

        .fc-button {
            font-size: 14px;
        }

        /* Стиль для новой кнопки */
        .return-button {
            position: absolute; /* Абсолютное позиционирование */
            top: 20px; /* Отступ сверху */
            right: 20px; /* Отступ справа */
        }

        .return-button a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .return-button a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <!-- Контент страницы -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Название календаря с увеличенным размером -->
                <p class="calendar-title">Календарь событий</p>
                <div id="calendar"></div>
                <!-- Новая кнопка для возврата на страницу -->
                <div class="return-button">
                    <a href="https://project.z-zhr.ru/content.php">Вернуться на главную</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Подключение jQuery (если не подключен) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Подключение FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar'); // Находим элемент календаря
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'ru',  // Указываем локализацию на русский язык
                initialView: 'dayGridMonth', // Вид календаря при загрузке
                customButtons: {
                    today: {
                        text: 'Сегодня', // Переводим кнопку "Today"
                        click: function() {
                            calendar.today(); // Переход к текущей дате
                        }
                    }
                },
                headerToolbar: {
                    left: 'prev,next today', // Добавляем кастомную кнопку в панель инструментов
                    center: 'title',
                    right: 'dayGridMonth,dayGridWeek,dayGridDay' // Переводим кнопки для переключения видов календаря
                },
                views: {
                    dayGridMonth: {
                        buttonText: 'Месяц' // Переводим кнопку "Month"
                    },
                    dayGridWeek: {
                        buttonText: 'Неделя' // Переводим кнопку "Week"
                    },
                    dayGridDay: {
                        buttonText: 'День' // Переводим кнопку "Day"
                    }
                }
            });
            calendar.render(); // Отображаем календарь
        });
    </script>
</body>

</html>
