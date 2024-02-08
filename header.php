<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200,400;700&family=Roboto:ital,wght@0,400;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная страница - Администратор</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body style="background-color: #faf6f4;">


<!--Header-->
    <header class="header" >
        <div class="container">
           <div class="header__inner">

            <div class="user">
                 <div class="user__avatar">
                    <img src="assets/images/photo_avata.jpg" alt="">
                 </div>
                 <div class="user__content">
                    <div class="user__name">Степанова<br>Александра</div>
                    <div class="user__prof">Дизайнер Интерьеров</div>
                 </div>
            </div>

           <nav class="nav" id="nav">
            <a class="nav__link" href="#" data-modal="#modal_project_1">Работы</a>
            <a class="nav__link" href="#about" >Обо мне</a>
            <a class="nav__link" href="comment.php">Отзывы</a>
            <a class="nav__link" href="#" data-modal="#modal_contact">Контакты</a>
            <a class="nav__link nav__link--btn" href="createProject.php">Добавить проект</a>
           </nav>

                  <button class="burger" type="button" id="navToggle">
                     <img class="burger__icon" src="assets/images/menu.png" alt=""> 
                  </button>
           </div>
        </div>
    </header>