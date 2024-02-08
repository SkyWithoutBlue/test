<?php
    require('./db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200,400;700&family=Roboto:ital,wght@0,400;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная страница</title>
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
                    <a class="nav__link nav__link--btn" href="index.php">Выйти</a>
                </nav>

                <button class="burger" type="button" id="navToggle">
                   <img class="burger__icon" src="assets/images/menu.png" alt=""> 
                </button>
            </div>
        </div>
    </header>

<!--Intro-->
<section class="intro">
    <div class="container">
        <div class="intro__inner">
            <div class="intro_content">
                <h2 class="intro__subtitle">Привет, я</h2>
                <h1 class="intro__title">Степанова Александра</h1>
                <div class="intro__text">Дизайнер Интерьеров</div>

                <div class="social">
                   <a class="social__link" href="https://vk.com/sasha.design75">
                    <img src="assets/images/vk.png" alt="">
                   </a>
                   <a class="social__link" href="https://instagram.com/sasha_design_chita?igshid=YTBlamZudGQ1N2Rh&utm_source=qr">
                    <img src="assets/images/instagram.png" alt="">
                   </a>
                   <a class="social__link" href="https://t.me/Alexandra_Stepanova_88">
                    <img src="assets/images/telegram.png" alt="">
                   </a>
                </div>

                <a class="btn" href="Authorin.php">Войти</a>
                <button class="btn" type="button" data-modal="#modal_list">Прайс Лист</button>

            </div> 
           <!--<img class="intro__photo" src="assets/images/photo_item.jpg" alt="">-->
        </div><!--/.intro__inner-->
    </div><!--/.container-->
</section>

<?php




?>

<!--Works-->
<div class="works">
    <div class="container">
        <div class="works__nav">
            <a class="works__nav-link" href="#" data-filter="Все работы">Все работы</a>
            <a class="works__nav-link" href="#" data-filter="Квартира">Квартира</a>
            <a class="works__nav-link" href="#" data-filter="Баня">Баня</a>
            <a class="works__nav-link" href="#" data-filter="Дом">Дом</a>
        </div>


        <div class="portfolio" id="portfolio">
            <?php
                    $q = $connection->query("SELECT * FROM `works`");
                    $res = $q->fetchAll();
                    foreach($res as $item){
                        printf(
                            '<div class="portfolio__col" data-cat="%s">
                            <div class="work" data-modal="#modal_project_%d">
                                <img class="work__image" src="assets/images/%s" alt="">
                                <div class="work__content">
                                    <div class="work__cat"> Категория: %s</div>
                                    <div class="work__title">
                                        %s
                                        <time class="work__date" datetime="2019-11-22 19:00">
                                            %d
                                        </time>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ', $item['category'], $item['id'], $item['card_image'], $item['category'], $item['title'], $item['date']
                        );
                    }
            ?>
        </div>    
    </div><!--/.container-->
</div><!--/.works-->

<!--About-->
<section class="about" id="about">
    <div class="container">
        <div class="about__inner">
            <div class="about__photo">
                <img class="img" src="assets\images\фон1.png" alt="">
            </div>

            <div class="about__content">
                <h3 class="about__title">ОБО МНЕ</h3>
                <h2 class="about__bigtitle">КТО Я ТАКАЯ</h2>
                <div class="about__text">
                    <p>Свою карьеру как Дизайнер-интерьеров я начала 13 лет назад. Начинала я в городе Курган, в компании "АрхИдея", изначально я пришла туда работать 
                        как мастер по декоративной штукатурке,делала образцы, выходила работать на объукты (в основном делала панно). 
                    </p>
                    <p>Потом появился срочный заказ на дизайн - преокт гостиницы, а действующий дизайнер был в отпуске. Ну и мои работодатели не побоялись отдать его мне, не опытному 
                        специалисту.Проект выполнили, реализовали в жизнь. Затем пошли один за другим новые объукты. 
                    </p>
                    <p>С этого все началось!</p>
                </div>
                <a class="btn" href="Authorin.php">Войти</a>
                <button class="btn" type="button" data-modal="#modal_list">Прайс Лист</button>
            </div><!--/.about__content-->     
        </div><!--/.about__inner-->
    </div><!--/.container-->
</section>



<!--/.Reviews-->
<!--<div class="reviews" id="reviews">
    <div class="container">
         <div class="reviews__item">
            <div class="reviews__text">
                <p>Отзыв какой то тут должен быть, по повод работ, которые делать дизайнер</p>
                <p>Сухарики можно использовать, как самостоятельный продукт и заменить им кратковременный перекус, они хорошо утоляют чувство голода. Но ими нельзя постоянно питаться. А вот в качестве вредной вкусняшки прекрасно подойдёт. Сухарики можно применять в качестве закуски к пиву или томатному (можно любому овощному) соку, мне нравится добавлять их в суп-пюре, особенно в чечевичный или гороховый. Обожаю всевозможные салаты, мясные и овощные. Мне вообще нравится сочетание овощей и мяса, гармонично дополняют друг друга, а с добавлением в салат сухариков Хрусteam появляется новый вкус. Любители хрустящего оценят. С сухариками любой салат съедается быстро, от такого ребёнок никогда не откажется. Ржаные сухарики содержат растительную клетчатку.</p>
            </div>
            <div class="reviews__author">
                <img class="reviews__photo" src="https://placehold.it/103/333" alt="">
                <div class="reviews__name">Эдварт Млечного</div>
                <div class="reviews__company">Гость</div>
                <div class="reviews__rating">
                    <img class="reviews__star" src="assets\images\star.png" width="13" height="13" alt="">
                    <img class="reviews__star" src="assets\images\star.png" width="13" height="13" alt="">
                    <img class="reviews__star" src="assets\images\star.png" width="13" height="13" alt="">
                    <img class="reviews__star" src="assets\images\star.png" width="13" height="13" alt="">
                    <img class="reviews__star reviews__star--unactive" src="assets\images\star.png" width="13" height="13" alt="">
                </div>
            </div>
         </div><!--/.reviews__item-->
    <!--</div><!--/.container-->
<!--</div><!--/.reviews-->

<!--/.News-->
<section class="news">
    <div class="container">
        <div class="news__header">
        <h3 class="news__title">Новости</h3>
        <div class="news__text">иногда я пишу что-нибудь </div>
        </div>
        <?php
    $q = $connection->query("SELECT * FROM `news`");
    $res = $q->fetchAll();
    
    foreach($res as $item) {
        printf(
            '<div class="articles__col" style="display: inline-block;", " font-size: 0;">
                <div class="articles__item">
                    <div class="articles__header">
                        <a href="https://www.artpole.ru/catalog/arkh_paneli_gips.html">
                            <img class="articles__photo" src="assets/images/%s" alt="">
                        </a>
                    </div>
                    <div class="articles__content">
                        <h4 class="articles__title">
                            <a href="https://www.artpole.ru/catalog/arkh_paneli_gips.html">%s</a>
                        </h4>
                        <div class="articles__cat">Категория: %s</div>
                        <div class="articles__text">
                            <p>%s</p>
                        </div>
                    </div>
                    <a class="btn btn--sm" href="https://www.artpole.ru/catalog/arkh_paneli_gips.html">Подробнее</a>
                </div>
            </div>',
            $item['images'],
            $item['title_news'],
            $item['category'],
            $item['description']
        );
    }
    ?>
    
        </div>
    </div>
</section>



<!--Footer-->
<footer class="footer">
    <div class="container">

        <div class="footer__inner">
            <div class="footer__credits">
                <div class="footer__copyright">
                    &copy; 2023
                </div>
                <div class="footer__social">
                    <a href="https://vk.com/sasha.design75" target="_blank">
                        <img class="footer__social-icont" src="assets/images/social_vk.png" width="24" alt="">
                    </a>
                    <a href="https://instagram.com/sasha_design_chita?igshid=YTBlamZudGQ1N2Rh&utm_source=qr" target="_blank">
                        <img class="footer__social-icont" src="assets/images/instagram_social.png" width="24" alt="">
                    </a>
                    <a href="https://t.me/Alexandra_Stepanova_88" target="_blank">
                        <img class="footer__social-icont" src="assets/images/telegram_social.png" width="24" alt="">
                    </a>
                </div>
            </div><!--footer__social-->
            <nav class="footer__nav">
                <a class="footer__nav-link" href="#" data-modal="#modal_project_1">Работы</a>
                <a class="footer__nav-link" href="#about">Обо мне</a>
                <a class="footer__nav-link" href="#reviews">Отзывы</a>
                <a class="footer__nav-link" href="#" data-modal="#modal_contact">Контакты</a>
                <a class="footer__nav-link footer__nav-link---btn" href="Authorin.php">Войти</a>
            </nav>
        </div><!--footer__inner-->
         
    </div><!--Container-->
</footer><!--Footer-->



<!--Modals-->
<div class="modal" id="modal_project_1">
    <div class="modal__dialog">
        
        <button class="modal__close" type="button" data-close>
            <img src="assets/images/modal-close.png" alt="Close">
        </button>

        <div class="modal-work">
            <div class="modal-worl__preview">
                <div data-slider="slick">
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Bathhouse/1.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Bathhouse/2.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Bathhouse/3.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Bathhouse/4.png"alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Bathhouse/5.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Bathhouse/6.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Bathhouse/7.png" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-work__content">
                <div class="modal-work__header">
                    <h3 class="modal-work__title">Баня в Смоленке</h3>
                    <div class="modal-work__info">
                        Категория: Баня <span class="modal-work__info-divider">|</span> 2023
                    </div>
                </div>
                <div class="modal-worl__client">
                    <div class="modal-worl__client-title">Клиент:</div>
                    <div class="modal-worl__client-fio">Имя Фамилия</div>
                </div>
                <div class="modal-worl__text">
                    <p>Какие были требования у клиента к этой работе.
                        Когда человек сознательно или интуитивно выбирает себе в жизни какую-то цель, жизненную задачу, он невольно дает себе оценку. По тому, ради чего человек живет, можно судить и о его самооценке - низкой или высокой.
                    </p>
                    <p>Если человек живет, чтобы приносить людям добро, облегчать их страдания, давать людям радость, то он оценивает себя на уровне этой своей человечности. Он ставит себе цель, достойную человека.
                        Только такая цель позволяет человеку прожить свою жизнь с достоинством и получить настоящую радость.</p>
                </div>

                <div class="modal-work__footer">
                    <button class="modal-work__btn slickPrev" type="button">
                        <img src="assets/images/back.png" height="11" alt="">
                        Предыдущая
                    </button>
                    <button class="modal-work__btn slickNext" type="button">
                        Следующая
                        <img src="assets/images/next.png" height="11"  alt="">
                    </button>
                </div>

            </div><!--modal-work__content-->
        </div><!--Modal-work-->

    </div><!--Modal-dialog-->
</div><!--Modal-->


<div class="modal" id="modal_project_2">
    <div class="modal__dialog">
        
        <button class="modal__close" type="button" data-close>
            <img src="assets/images/modal-close.png" alt="Close">
        </button>

        <div class="modal-work">
            <div class="modal-worl__preview">
                <div data-slider="slick">
                    <div>
                        <img class="modal-worl__photo" src="assets/images/House/1.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/House/2.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/House/3.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/House/4.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/House/5.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/House/6.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/House/7.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/House/8.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/House/9.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/House/10.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/House/11.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/House/12.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-work__content">
                <div class="modal-work__header">
                    <h3 class="modal-work__title">Дом с печкой</h3>
                    <div class="modal-work__info">
                        Категория: Дом <span class="modal-work__info-divider">|</span> 2023
                    </div>
                </div>
                <div class="modal-worl__client">
                    <div class="modal-worl__client-title">Клиент:</div>
                    <div class="modal-worl__client-fio">Имя Фамилия</div>
                </div>
                <div class="modal-worl__text">
                    <p>Какие были требования у клиента к этой работе.
                        Когда человек сознательно или интуитивно выбирает себе в жизни какую-то цель, жизненную задачу, он невольно дает себе оценку. По тому, ради чего человек живет, можно судить и о его самооценке - низкой или высокой.
                    </p>
                    <p>Если человек живет, чтобы приносить людям добро, облегчать их страдания, давать людям радость, то он оценивает себя на уровне этой своей человечности. Он ставит себе цель, достойную человека.
                        Только такая цель позволяет человеку прожить свою жизнь с достоинством и получить настоящую радость.</p>
                </div>

                <div class="modal-work__footer">
                    <button class="modal-work__btn slickPrev" type="button">
                        <img src="assets/images/back.png" height="11" alt="">
                        Предыдущая
                    </button>
                    <button class="modal-work__btn slickNext" type="button">
                        Следующая
                        <img src="assets/images/next.png" height="11"  alt="">
                    </button>
                </div>

            </div><!--modal-work__content-->
        </div><!--Modal-work-->

    </div><!--Modal-dialog-->
</div><!--Modal-->

<div class="modal" id="modal_project_3">
    <div class="modal__dialog">
        
        <button class="modal__close" type="button" data-close>
            <img src="assets/images/modal-close.png" alt="Close">
        </button>

        <div class="modal-work">
            <div class="modal-worl__preview">
                <div data-slider="slick">
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/1.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/2.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/3.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/4.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/5.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/6.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/7.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/8.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/9.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/10.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/11.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/12.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/13.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/14.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/15.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/16.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/17.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/18.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/19.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/20.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/21.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_1/22.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-work__content">
                <div class="modal-work__header">
                    <h3 class="modal-work__title">Квартира в Калининграде</h3>
                    <div class="modal-work__info">
                        Категория: Квартира <span class="modal-work__info-divider">|</span> 2023
                    </div>
                </div>
                <div class="modal-worl__client">
                    <div class="modal-worl__client-title">Клиент:</div>
                    <div class="modal-worl__client-fio">Имя Фамилия</div>
                </div>
                <div class="modal-worl__text">
                    <p>Какие были требования у клиента к этой работе.
                        Когда человек сознательно или интуитивно выбирает себе в жизни какую-то цель, жизненную задачу, он невольно дает себе оценку. По тому, ради чего человек живет, можно судить и о его самооценке - низкой или высокой.
                    </p>
                    <p>Если человек живет, чтобы приносить людям добро, облегчать их страдания, давать людям радость, то он оценивает себя на уровне этой своей человечности. Он ставит себе цель, достойную человека.
                        Только такая цель позволяет человеку прожить свою жизнь с достоинством и получить настоящую радость.</p>
                </div>

                <div class="modal-work__footer">
                    <button class="modal-work__btn slickPrev" type="button">
                        <img src="assets/images/back.png" height="11" alt="">
                        Предыдущая
                    </button>
                    <button class="modal-work__btn slickNext" type="button">
                        Следующая
                        <img src="assets/images/next.png" height="11"  alt="">
                    </button>
                </div>

            </div><!--modal-work__content-->
        </div><!--Modal-work-->

    </div><!--Modal-dialog-->
</div><!--Modal-->


<div class="modal" id="modal_project_4">
    <div class="modal__dialog">
        
        <button class="modal__close" type="button" data-close>
            <img src="assets/images/modal-close.png" alt="Close">
        </button>

        <div class="modal-work">
            <div class="modal-worl__preview">
                <div data-slider="slick">
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/17.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/1.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/2.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/3.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/4.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/5.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/6.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/7.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/8.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/9.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/10.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/11.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/12.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/13.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/14.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/15.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_2/16.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-work__content">
                <div class="modal-work__header">
                    <h3 class="modal-work__title">Квартира на Матвеева</h3>
                    <div class="modal-work__info">
                        Категория: Квартира <span class="modal-work__info-divider">|</span> 2023
                    </div>
                </div>
                <div class="modal-worl__client">
                    <div class="modal-worl__client-title">Клиент:</div>
                    <div class="modal-worl__client-fio">Имя Фамилия</div>
                </div>
                <div class="modal-worl__text">
                    <p>Какие были требования у клиента к этой работе.
                        Когда человек сознательно или интуитивно выбирает себе в жизни какую-то цель, жизненную задачу, он невольно дает себе оценку. По тому, ради чего человек живет, можно судить и о его самооценке - низкой или высокой.
                    </p>
                    <p>Если человек живет, чтобы приносить людям добро, облегчать их страдания, давать людям радость, то он оценивает себя на уровне этой своей человечности. Он ставит себе цель, достойную человека.
                        Только такая цель позволяет человеку прожить свою жизнь с достоинством и получить настоящую радость.</p>
                </div>

                <div class="modal-work__footer">
                    <button class="modal-work__btn slickPrev" type="button">
                        <img src="assets/images/back.png" height="11" alt="">
                        Предыдущая
                    </button>
                    <button class="modal-work__btn slickNext" type="button">
                        Следующая
                        <img src="assets/images/next.png" height="11"  alt="">
                    </button>
                </div>

            </div><!--modal-work__content-->
        </div><!--Modal-work-->

    </div><!--Modal-dialog-->
</div><!--Modal-->

<div class="modal" id="modal_project_5">
    <div class="modal__dialog">
        
        <button class="modal__close" type="button" data-close>
            <img src="assets/images/modal-close.png" alt="Close">
        </button>

        <div class="modal-work">
            <div class="modal-worl__preview">
                <div data-slider="slick">
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/1.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/2.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/3.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/4.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/5.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/6.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/7.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/8.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/9.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/10.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/11.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/12.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/13.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/14.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/15.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/16.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/17.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/18.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/19.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/20.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/21.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/22.png" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images//Flat_3/23.png" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-work__content">
                <div class="modal-work__header">
                    <h3 class="modal-work__title">Квартира на Острове</h3>
                    <div class="modal-work__info">
                        Категория: Квартира <span class="modal-work__info-divider">|</span> 2023
                    </div>
                </div>
                <div class="modal-worl__client">
                    <div class="modal-worl__client-title">Клиент:</div>
                    <div class="modal-worl__client-fio">Имя Фамилия</div>
                </div>
                <div class="modal-worl__text">
                    <p>Какие были требования у клиента к этой работе.
                        Когда человек сознательно или интуитивно выбирает себе в жизни какую-то цель, жизненную задачу, он невольно дает себе оценку. По тому, ради чего человек живет, можно судить и о его самооценке - низкой или высокой.
                    </p>
                    <p>Если человек живет, чтобы приносить людям добро, облегчать их страдания, давать людям радость, то он оценивает себя на уровне этой своей человечности. Он ставит себе цель, достойную человека.
                        Только такая цель позволяет человеку прожить свою жизнь с достоинством и получить настоящую радость.</p>
                </div>

                <div class="modal-work__footer">
                    <button class="modal-work__btn slickPrev" type="button">
                        <img src="assets/images/back.png" height="11" alt="">
                        Предыдущая
                    </button>
                    <button class="modal-work__btn slickNext" type="button">
                        Следующая
                        <img src="assets/images/next.png" height="11"  alt="">
                    </button>
                </div>

            </div><!--modal-work__content-->
        </div><!--Modal-work-->

        
    </div><!--Modal-dialog-->
</div><!--Modal-->
<div class="modal" id="modal_project_6">
    <div class="modal__dialog">
        
        <button class="modal__close" type="button" data-close>
            <img src="assets/images/modal-close.png" alt="Close">
        </button>

        <div class="modal-work">
            <div class="modal-worl__preview">
                <div data-slider="slick">
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1.jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (1).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (2).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (3).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (4).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (5).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (6).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (7).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (8).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (9).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (10).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (11).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (12).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (13).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (14).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (15).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (16).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (17).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (18).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (19).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (20).jpg" alt="">
                    </div>

                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (21).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (22).jpg" alt="">
                    </div>
                    <div>
                        <img class="modal-worl__photo" src="assets/images/Flat_4/1 (23).jpg" alt="">
                    </div>

                </div>
            </div>
            <div class="modal-work__content">
                <div class="modal-work__header">
                    <h3 class="modal-work__title">Квартира на Проезжей, 20</h3>
                    <div class="modal-work__info">
                        Категория: Квартира <span class="modal-work__info-divider">|</span> 2023
                    </div>
                </div>
                <div class="modal-worl__client">
                    <div class="modal-worl__client-title">Клиент:</div>
                    <div class="modal-worl__client-fio">Имя Фамилия</div>
                </div>
                <div class="modal-worl__text">
                    <p>Какие были требования у клиента к этой работе.
                        Когда человек сознательно или интуитивно выбирает себе в жизни какую-то цель, жизненную задачу, он невольно дает себе оценку. По тому, ради чего человек живет, можно судить и о его самооценке - низкой или высокой.
                    </p>
                    <p>Если человек живет, чтобы приносить людям добро, облегчать их страдания, давать людям радость, то он оценивает себя на уровне этой своей человечности. Он ставит себе цель, достойную человека.
                        Только такая цель позволяет человеку прожить свою жизнь с достоинством и получить настоящую радость.</p>
                </div>

                <div class="modal-work__footer">
                    <button class="modal-work__btn slickPrev" type="button">
                        <img src="assets/images/back.png" height="11" alt="">
                        Предыдущая
                    </button>
                    <button class="modal-work__btn slickNext" type="button">
                        Следующая
                        <img src="assets/images/next.png" height="11"  alt="">
                    </button>
                </div>

            </div><!--modal-work__content-->
        </div><!--Modal-work-->
    </div><!--Modal-dialog-->
</div><!--Modal-->






 <!--Modal-list-->   
<div class="modal" id="modal_list">
    <div class="modal__dialog">
        
        <button class="modal__close" type="button" data-close>
            <img src="assets/images/modal-close.png" alt="Close">
        </button>
       
        <div class="modal__content">
            <h3 class="modal__title text-center">Прайс лист</h3>
            <div class="text-center">
                <a class="btn btn--thin" href="#">Скачать pdf</a>
                <a class="btn btn--thin" href="#">Печать</a>
           </div>
           <div class="timeline">
            <div class="timeline__col timeline__col--left">
                <h4 class="timeline__title">В полный пакет дизайн-проекта входит</h4>
                <div class="timeline__item">
                    <div class="timeline__number">1</div>
                    <h5 class="timeline__text">Выезд на замер и составление обмерного плана</h5>
                    <div class="timeline__number">2</div>
                    <h5 class="timeline__text">План перепланировки и план после перепланировки</h5>
                    <div class="timeline__number">3</div>
                    <h5 class="timeline__text">План расстановки мебели</h5>
                    <div class="timeline__number">4</div>
                    <h5 class="timeline__text">План пола</h5>
                    <div class="timeline__number">5</div>
                    <h5 class="timeline__text">План потолка</h5>
                    <div class="timeline__number">5</div>
                    <h5 class="timeline__text">План потолка</h5>
                    <div class="timeline__number">6</div>
                    <h5 class="timeline__text">План расстановки светильников</h5>
                    <div class="timeline__number">7</div>
                    <h5 class="timeline__text">План расстановки выключателей</h5>
                </div>
            </div>
            <div class="timeline_col timeline__col--right">
                <div class="timeline__item">
                    <div class="timeline__number">8</div>
                    <h5 class="timeline__text">План растановки розеток</h5>
                    <div class="timeline__number">9</div>
                    <h5 class="timeline__text">Развертки по стенам</h5>
                    <div class="timeline__number">10</div>
                    <h5 class="timeline__text">Раскладка плитки</h5>
                    <div class="timeline__number">11</div>
                    <h5 class="timeline__text">3D виуализация</h5>
                    <div class="timeline__number">12</div>
                    <h5 class="timeline__text">Подбор и просчет отделочных материалов</h5>
                   <div class="timeline__number">13</div>
                    <h5 class="timeline__text">Подбор мебели и текстиля</h5>
                   <div class="timeline__number">14</div>
                   <h5 class="timeline__text">Подбор светильников</h5>
                   <div class="timeline__number">15</div>
                    <h5 class="timeline__text">Ведение проекта в течении ремонтных работ</h5>
                </div>
            </div>
           </div><!--timeline-->
           <div class="text-center">
            <a class="btn" href="Authorin.php">Войти</a>
           </div>
        </div><!--modal__content-->
            </div><!--modal-work__content-->
        </div><!--Modal-work-->
    </div><!--Modal-dialog-->
</div><!--Modal-->



<!--Modal-contact--> 
<div class="modal" id="modal_contact">
    <div class="modal__dialog modal__dialog--sm">
        
        <button class="modal__close" type="button" data-close>
            <img src="assets/images/modal-close.png" alt="Close">
        </button>
    
            <div class="contact">
                <div class="contact__left">
                    <h3 class="modal__title mb-0">Контакты</h3>
                    <div class="modal__subtitle">
                        Позвоните мне или отправьте запрос
                    </div>

                    <ul class="contact__info">
                        <li class="contact__info-item">
                            <img class="contact__info-icon" src="assets/images/telephone.png" alt="">
                            8-914-433-40-52
                        </li>
                        <li class="contact__info-item">
                            <img class="contact__info-icon" src="assets/images/mail.png" alt="">
                            AlexandraStepanova88@gmail.com
                        </li>
                    </ul> 

                    <form class="form" action="/" method="post">
                        <div class="form__group">
                            <label class="form__label" for="input-email">Адрес электронной почты</label>
                            <input class="form__input" name="input-email" type="text" id="input-email" placeholder="Адрес электронной почты">
                        </div>
                    </form>
                    <div class="form__group">
                        <label class="form__label" for="input-text">Запрос</label>
                        <textarea class="form__textarea" name="input-text" id="input-text" placeholder="Введите ваш запрос..."></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn" type="submit">Отправить</button>
                    </div>
                </form>   
                </div><!--Contact__left-->
            </div><!--Contact-->
    </div><!--Modal-dialog-->
</div><!--Modal-->




<!--JS-->
<script src="js/slick.min.js"></script>
<script src="js/app.js"></script>

</body>
</html>