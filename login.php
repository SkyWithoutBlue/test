<?php
require_once('db.php');

$login = isset($_POST['login']) ? trim($_POST['login']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

if (empty($login) || empty($password)) {
    echo "Заполните все поля!";
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";
    $result = $connection->query($sql);

    if ($result->rowCount() > 0) {
        $user = $result->fetch(PDO::FETCH_ASSOC);

        if ($user['role'] === 'admin') {
            // Перенаправить на страницу для администратора
            header('Location: admin.php');
            exit();
        } else {
            // Перенаправить на главную страницу
            header('Location: user.php');
            exit();
        }
    } else {
        echo "Нет такого пользователя!";
    }
}
