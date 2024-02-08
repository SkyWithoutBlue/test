<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200,400;700&family=Roboto:ital,wght@0,400;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reg.css">
    <title>Регистрация</title>
</head>

<body>
<main action="register.php" method="post" >
        <div class="circle"></div>
        <div class="register-form-contsiner">
            <h1 class="form-title">Регистрация</h1>
            <form action="register.php" method="post">
                        <div class="form-fields">
                            <input class="form-field" type="text" placeholder="Логин" name="login">
                            <input class="form-field" type="text" placeholder="Пароль" name="password">
                            <input class="form-field" type="text" placeholder="Подтвержденние пароля" name="repeatpass">
                            <input class="form-field" type="text" placeholder="Почта" name="email">
                        </div>
                        
                    <div class="form-buttons">
                        <button class="button " type="submit">Регистрация</button>
                    <div class="divider">Или</div>
                    <a href="#" class="button button-google">Google</a>
                </div>
            </form>
        </div>

    </main>
</body>

</html>