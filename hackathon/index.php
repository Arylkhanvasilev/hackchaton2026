<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>

<!-- Форма авторизации -->

    <form action="vendor/signin.php" method="post">
        <label style="color: #FF4F12;">Логин</label>
        <input style="border-bottom: 2px solid #FF4F12;" type="text" name="login" placeholder="Введите свой логин">
        <label style="color: #FF4F12;">Пароль</label>
        <input style="border-bottom: 2px solid #FF4F12;" type="password" name="password" placeholder="Введите пароль">
        <button style="background-color: #7700FF; color: white;" type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href=".\register.php" style="color: #7700FF">зарегистрируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>