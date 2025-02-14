<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Open+Sans:wght@300;400;600&family=Roboto:wght@700&display=swap" rel="stylesheet">
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
            font-family: 'Roboto', sans-serif;
            font-size: 1.5rem; /* Увеличение размера шрифта */
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
            font-family: 'Roboto', sans-serif;
            font-size: 1.5rem; /* Увеличение размера шрифта */
        }
    </style>
    <title>ИнноваПроект</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg py-3">
        <div class="menu container">
            <a href="index.php" class="navbar-brand">
                <img src="img/logo.png" width="45" alt="ИнноваПроект" class="d-inline-block align-middle mr-2">
                <span class="logo_text align-middle text-black">ИнноваПроект</span>
            </a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li><a href="login.php" class="btn btn-primary mr-2">Войти</a></li>
                    <li><a href="register.php" class="btn btn-primary">Регистрация</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="row m-0 p-0">
    <div class="col-6 p-5">
        <div class="mx-5 mt-3">
            <h2 class="display-4"><small>Сделайте свою жизнь <span class="text-primary">организованной</span></small></h2>
            <p class="lead">Мы предлагаем удобное управление задачами и календарем.</p>
        </div>
        <div class="mx-5 mr-5 mt-3">
            <h4 class="text-primary pr-5"><i class="fas fa-rocket pr-3"></i>Организуйте свой бизнес</h4>
            <p class="text-muted pr-5">Храните все проекты в одном месте. Используйте удобную Kanban-доску для управления задачами.</p>
            <h4 class="text-primary pr-5"><i class="far fa-calendar-check pr-3"></i>Не забывайте важные события</h4>
            <p class="text-muted pr-5">Наш календарь поможет вам планировать задачи и мероприятия.</p>
        </div>
        <div class="text-center mt-4">
            <a href="register.php" class="btn btn-primary">Начать <i class="fas fa-arrow-circle-right pl-2"></i></a>
        </div>
    </div>
    <div class="col-6">
        <img class="img-fluid" src="img/1.jpg" alt="управление проектами">
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
