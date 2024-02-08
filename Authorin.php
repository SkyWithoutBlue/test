<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200,400;700&family=Roboto:ital,wght@0,400;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reg.css">
    <title>Вход</title>
</head>

<body>
    <main>
        <div class="circle"></div>
        <div class="register-form-contsiner">
            <h1 class="form-title">
                Войти 
            </h1>
            <form action="login.php" method="post">
            <div class="form-field">
                 <input type="text" placeholder="Логин" name="login">
           </div>
            <div class="form-field">
                <input type="password" placeholder="Пароль" name="password">
            </div>
            <button type="submit" class="button">Войти</button>
                <div class="divider">Или</div>
                <a href="Registration.php" class="button button-google">Регистрация</a>
            </div>
        </div>

    </main>
</body>

</html>