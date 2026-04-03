<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Мой дом</title>
    <link rel="stylesheet" href="./styles/main.css">
    <script src="/index.js"></script>
</head>

<body>
    <div class="container" style="display: flex;flex-direction: column;gap: 5px;">
        <div class="my_house">
            <h1 class="rost" style="margin: 0 !important;font-size: 24px; padding: 16px 0;">Ещё</h1>
            <form class="profile">
                <img src="<?= $_SESSION['user']['avatar'] ?>" alt="">
                <div class="profile_info">
                    <h2 class="rost" style="margin: 0 !important;font-size: 20px;"><?= $_SESSION['user']['full_name'] ?><img src=".\images\Chevron.svg" alt=></h2>
                    <a href="./profile.html">Управление аккаунтом</a>
                </div>
            </form>
        </div>
        <div class="main">
            <div class="family" style="background-color: white; padding: 19px 16px;; border-radius: 30px;">
                <h2 class="rost active" style="margin: 0 !important; border-radius: 30px 30px 0 0;">Моя
                    семья <img src=".\images\ChevronActive.svg" alt=""></h2>
                <p class="rost" style="margin: 0 !important; color: #ABAEB4; font-size: 12px;">3 члена
                    семьи
                </p>
                <div class="profile_img">
                    <a href="#"><img src=".\images\photo_5318846474298788800_y 1.jpg" alt=""></a>
                    <a href="#"><img src=".\images\Ellipse 3.jpg" alt=""></a>
                    <a href="#"><img src=".\images\Ellipse 2.jpg" alt=""></a>
                    <a href="#"><img src=".\images\plus_profile.svg" alt=""></a>
                </div>
            </div>
            <div class="parameters">
                <div class="param_card">
                    <div style="display: flex; align-items: center; gap: 10px;border-radius: 30px 30px 0 0;">
                        <img src=".\images\Frame 42.svg" alt="">
                        <h2 class="rost">Управление домом</h2>
                    </div>
                    <img src=".\images\Chevron.svg" alt="">
                </div>
                <div class="param_card">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <img src=".\images\Frame 42 (1).svg" alt="">
                        <h2 class="rost">Настройки уведомлений</h2>
                    </div>
                    <img src=".\images\Chevron.svg" alt="">
                </div>
                <div class="param_card">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <img src=".\images\Frame 42 (2).svg" alt="">
                        <h2 class="rost">Параметры безопасности</h2>
                    </div>
                    <img src=".\images\Chevron.svg" alt="">
                </div>
                <div class="param_card">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <img src=".\images\Frame 42 (3).svg" alt="">
                        <h2 class="rost">Другие настройки</h2>
                    </div>
                    <img src=".\images\Chevron.svg" alt="">
                </div>
            </div>
            <div class="about" style="background-color: white; border-radius: 30px;">
                <div class="param_card">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <img src=".\images\Frame 42 (4).svg" alt="">
                        <h2 class="rost">Условия польззования</h2>
                    </div>
                    <img src=".\images\Chevron.svg" alt="">
                </div>
                <div class="param_card">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <img src=".\images\Frame 42 (5).svg" alt="">
                        <h2 class="rost">Помощь</h2>
                    </div>
                    <img src=".\images\Chevron.svg" alt="">
                </div>
                <div class="param_card">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <img src=".\images\Frame 42 (6).svg" alt="">
                        <h2 class="rost">Оценить приложение</h2>
                    </div>
                    <img src=".\images\Chevron.svg" alt="">
                </div>
            </div>
        </div>
        <div class="menu">
            <nav class="nav_bar">
                <button class="btn_home">
                    <img src=".\images\svg-path-14 1.svg" alt="#" class="image">
                    <a class="name rost" href=".\profile.php">Главная</a>
                </button>
                <button class="btn_home" href="">
                    <img src=".\images\scene.svg" alt="#" class="image">
                    <a class="name rost" href=".\scene.html">Сценарии</a>
                </button>
                <button class="btn_home">
                    <img src=".\images\more_active.svg" alt="#" class="image">
                    <a class="name rost active" href="#">Ещё</a>
                </button>
            </nav>
        </div>
    </div>
</body>

</html>