<!DOCTYPE html>
<html lang="ru">

<head>
    <?php $title = "Контент"; ?>
    <?php require 'head.php'; ?>
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

        .my-card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .my-card:hover {
            transform: translateY(-5px);
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
            <ul class="navbar-nav ml-auto">
                <li><span class="btn text-white mx-2"><i class="far fa-user pr-2"></i>Добро пожаловать, <?php echo strtoupper($_SESSION['user']); ?>!</span></li>
                <li><span class="btn text-white mx-2"><i class="far fa-calendar-alt pr-2"></i>Дата:<span class="pl-2 date"></span></span></li>
                <li><span class="btn text-white mr-2"><i class="far fa-clock pr-2"></i>Время:<span class="pl-2 clock"></span></span></li>
            </ul>

            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li><a href="logout.php" class="btn btn-primary mr-2">Выйти</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container mt-0 mb-4">
    <div class="row d-flex m-2 mt-0">
        <div class="col-sm-4 col-md-4">
            <a class="card my-card text-dark" href="today.php">
                <img class="card-img-top" src="img/4.jpg" class="img-rounded" id="Panel_Image">
                <div class="card-body d-flex justify-content-center">
                    <h3 class="card-title">СЕГОДНЯ</h3>
                </div>
            </a>
        </div>

        <div class="col-sm-4 col-md-4">
            <a class="card my-card text-dark" href="projects.php">
                <img class="card-img-top" src="img/5.jpg" class="img-rounded" id="Panel_Image">
                <div class="card-body d-flex justify-content-center">
                    <h3 class="card-title">ПРОЕКТЫ</h3>
                </div>
            </a>
        </div>

        <div class="col-sm-4 col-md-4">
            <a class="card my-card text-dark" href="calendar.php">
                <img class="card-img-top" src="img/6.jpg" class="img-rounded" id="Panel_Image">
                <div class="card-body d-flex justify-content-center">
                    <h3 class="card-title">КАЛЕНДАРЬ</h3>
                </div>
            </a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="text/javascript">
    function clock() {
        var time = new Date(),
            hours = time.getHours(),
            minutes = time.getMinutes(),
            seconds = time.getSeconds();
        var date = time.getFullYear() + '-' + (time.getMonth() + 1) + '-' + time.getDate();

        document.querySelectorAll('.clock')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);
        document.querySelectorAll('.date')[0].innerHTML = date;

        function harold(standIn) {
            if (standIn < 10) {
                standIn = '0' + standIn;
            }
            return standIn;
        }
    }
    setInterval(clock, 1000);
</script>

</body>
</html>
