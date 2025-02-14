<!DOCTYPE html>
<html lang="ru">

<head>
    <?php $title = "Проекты"; ?>
    <?php require 'head.php'; ?>

    <title><?php echo $title; ?></title>
    <?php require 'events/modals/newProject.php'; ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" type="text/css" />
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
        }

        .btn-primary {
            background-color: #0056b3;
            border: none;
        }

        .btn-primary:hover {
            background-color: #003d80;
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            border-bottom: none;
        }

        .list-group-item {
            border: none;
            border-bottom: 1px solid #ddd;
        }

        .list-group-item:last-child {
            border-bottom: none;
        }

        .todo-indicator {
            width: 10px;
            height: 60px;
            position: absolute;
            left: 0;
            top: 0;
        }

        .text-black {
            color: black !important;
        }
    </style>
</head>

<body class="bg">

<header class="m-0 p-0">
    <nav class="navbar navbar-expand-lg pt-3 text-dark">
        <div class="menu container">
            <a href="index.php" class="navbar-brand">
                <!-- Логотип -->
                <img src="img/logo.png" width="45" alt="ИнноваПроект" class="d-inline-block align-middle mr-2">
                <!-- Текст логотипа -->
                <span class="logo_text align-middle text-black">ИнноваПроект</span>
            </a>

            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li><a href="content.php" class="btn text-white mr-2"><i class="fas fa-home pr-2"></i>Главная</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    /* Стиль для кнопки "Вернуться назад" */
    .navbar-nav .btn {
        background-color: #007bff; /* Синий цвет фона */
        color: white; /* Белый текст */
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .navbar-nav .btn:hover {
        background-color: #0056b3; /* Темно-синий цвет при наведении */
    }
</style>


<div class="row d-flex m-4 mt-2 justify-content-center">
    <h2 class="col-12 text-center mb-4 text-primary">СОБЫТИЯ СЕГОДНЯ</h2>

    <div class="col-3">
        <!-- --------------------------------- СОБЫТИЯ, НАЧИНАЮЩИЕСЯ СЕГОДНЯ --------------------------------- -->
        <div class="card-hover-shadow-2x mb-3 card text-dark">
            <div class="card-header-tab card-header">
                <h5 class="card-header-title font-weight-normal"><i class="fa fa-suitcase mr-3"></i>События начались</h5>
            </div>
            <div class="scroll-area">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class="list-group list-group-flush">
                                <?php if (isset($events_start)) {
                                    foreach ($events_start as $es): ?>
                                        <li class="list-group-item pe-auto">
                                            <div class="todo-indicator ml-2" style="background-color:<?php echo $es['colour']; ?>;"></div>
                                            <div class="widget-content p-0 ml-4">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="text-left widget-heading text-primary"><?php echo $es['title']; ?></div>
                                                        <div class="widget-subheading text-muted"><i>Начало: <?php echo $es['start_date']; ?></i></div>
                                                        <div class="widget-subheading text-muted"><i>Окончание: <?php echo $es['end_date']; ?></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach;
                                } ?>
                            </ul>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>
        </div>

        <!-- --------------------------------- СОБЫТИЯ, ЗАКАНЧИВАЮЩИЕСЯ СЕГОДНЯ --------------------------------- -->
        <div class="card-hover-shadow-2x mb-3 card text-dark">
            <div class="card-header-tab card-header">
                <h5 class="card-header-title font-weight-normal"><i class="fa fa-suitcase mr-3"></i>События закончились</h5>
            </div>
            <div class="scroll-area">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class="list-group list-group-flush">
                                <?php if (isset($events_end)) {
                                    foreach ($events_end as $ee): ?>
                                        <li class="list-group-item pe-auto">
                                            <div class="todo-indicator ml-2" style="background-color:<?php echo $ee['colour']; ?>;"></div>
                                            <div class="widget-content p-0 ml-4">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="text-left widget-heading text-primary"><?php echo $ee['title']; ?></div>
                                                        <div class="widget-subheading text-muted"><i>Начало: <?php echo $ee['start_date']; ?></i></div>
                                                        <div class="widget-subheading text-muted"><i>Окончание: <?php echo $ee['end_date']; ?></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach;
                                } ?>
                            </ul>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>
        </div>
    </div>

    <div class="col-3">
        <!-- --------------------------------- ПРОЕКТЫ, НАЧИНАЮЩИЕСЯ СЕГОДНЯ --------------------------------- -->
        <div class="card-hover-shadow-2x mb-3 card text-dark">
            <div class="card-header-tab card-header">
                <h5 class="card-header-title font-weight-normal"><i class="fa fa-suitcase mr-3"></i>Проекты начались</h5>
            </div>
            <div class="scroll-area">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class="list-group list-group-flush">
                                <?php if (isset($projects_start)) {
                                    foreach ($projects_start as $ps): ?>
                                        <li class="list-group-item pe-auto">
                                            <div class="todo-indicator ml-2" style="background-color:<?php echo $ps['project_colour']; ?>;"></div>
                                            <div class="widget-content p-0 ml-4">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="text-left widget-heading text-primary"><?php echo $ps['project_name']; ?></div>
                                                        <div class="widget-subheading text-muted"><i>Начало: <?php echo $ps['start_date']; ?> | Окончание: <?php echo $ps['end_date']; ?></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach;
                                } ?>
                            </ul>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>
        </div>

        <!-- --------------------------------- ПРОЕКТЫ, ЗАКАНЧИВАЮЩИЕСЯ СЕГОДНЯ --------------------------------- -->
        <div class="card-hover-shadow-2x mb-3 card text-dark">
            <div class="card-header-tab card-header">
                <h5 class="card-header-title font-weight-normal"><i class="fa fa-suitcase mr-3"></i>Проекты закончились</h5>
            </div>
            <div class="scroll-area">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class="list-group list-group-flush">
                                <?php if (isset($projects_end)) {
                                    foreach ($projects_end as $pe): ?>
                                        <li class="list-group-item pe-auto">
                                            <div class="todo-indicator ml-2" style="background-color:<?php echo $pe['project_colour']; ?>;"></div>
                                            <div class="widget-content p-0 ml-4">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="text-left widget-heading text-primary"><?php echo $pe['project_name']; ?></div>
                                                        <div class="widget-subheading text-muted"><i>Начало: <?php echo $pe['start_date']; ?> | Окончание: <?php echo $pe['end_date']; ?></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach;
                                } ?>
                            </ul>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>
        </div>
    </div>

    <div class="col-3">
        <!-- --------------------------------- ЗАДАЧИ С ДЕДЛАЙНОМ СЕГОДНЯ --------------------------------- -->
        <div class="card-hover-shadow-2x mb-3 card text-dark">
            <div class="card-header-tab card-header">
                <h5 class="card-header-title font-weight-normal"><i class="fa fa-suitcase mr-3"></i> Дедлайны задач</h5>
            </div>
            <div class="scroll-area">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class="list-group list-group-flush">
                                <?php if (isset($tasks)) {
                                    foreach ($tasks as $t): ?>
                                        <li class="list-group-item pe-auto">
                                            <div class="todo-indicator ml-2" style="background-color:<?php echo $t['task_colour']; ?>;"></div>
                                            <div class="widget-content p-0 ml-4">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="text-left widget-heading text-primary"><?php echo $t['task_name']; ?></div>
                                                        <div class="widget-subheading text-muted"><i>Дедлайн: <?php echo $t['deadline']; ?></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach;
                                } ?>
                            </ul>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
