<!DOCTYPE html>
<html lang="ru">

<head>
    <?php $title = "Инновапроект"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" media='all' integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

    <!-- CSS STYLE-->
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

        .btn-sign-up {
            background-color: #007bff;
            border: none;
        }

        .input-group-text {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .err {
            color: red;
            font-size: 0.9em;
        }

        .text-black {
            color: black !important;
        }
    </style>
    <title><?php echo $title; ?></title>
</head>

<body>
<header class="m-0 p-0">
    <nav class="navbar navbar-expand-lg pt-3">
        <div class="menu container">
            <a href="index.php" class="navbar-brand">
                <img src="img/logo.png" width="45" alt="Инновапроект" class="d-inline-block align-middle mr-2">
                <span class="logo_text align-middle text-black">Инновапроект</span>
            </a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li><a href="register.php" class="btn btn-primary text-white mr-2">Регистрация</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <div class="row m-0 p-0">
        <div class="col-6 p-5 justify-content-center">
            <p class="text-center h1 fw-bold m-5 text-black">Вход</p>
            <form class="px-5" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="mb-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="btn-sign-up input-group-text"> <small><i class="fas fa-user"></i></small></span>
                        </div>
                        <input class="form-control" type="text" name="user" placeholder="Имя пользователя" required>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="btn-sign-up input-group-text"> <small><i class="fas fa-lock"></i></small></span>
                        </div>
                        <input class="form-control" type="password" name="password" placeholder="Пароль" required>
                    </div>
                </div>

                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" class="btn btn-primary" onclick="login.submit()">Войти</button>
                </div>

                <?php if (!empty($errors)): ?>
                    <div class="err">
                        <ul>
                            <?php echo $errors; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </form>
            <span class="d-flex justify-content-center">Нет аккаунта?<a class="nav-link text-primary m-0 p-0 pl-2" href="register.php">Зарегистрироваться</a></span>
        </div>
        <div class="col-6 p-3">
            <img class="img-fluid" src="img/3.jpg" alt="project_management">
        </div>
    </div>
</div>

<!-- --------------------- JS SCRIPTS JQUERY + POPPER + BOOTSTRAP ------------------------- -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
