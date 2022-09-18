
<?php

$json = file_get_contents('admin/settings.json');
// Decode the JSON file
$settings = json_decode($json, true);

$json_data = file_get_contents('admin/content.json');
// Decode the JSON file
$data = json_decode($json_data, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $settings['title'] ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapp">
        <div class="menu__open">
            <div class="menu-right">
                <div class="menu-close">
                    <span></span>
                    <span></span>
                </div>
                <div class="header__menu">
                    <a href="#about" class="menu__item">Об игре</a>
                    <a href="#box" class="menu__item">Что в коробке?</a>
                    <a href="#how" class="menu__item">Как играть?</a>
                    <a href="#why" class="menu__item">Почему стоит сыграть?</a>
                    <a href="#reviews" class="menu__item">Отзывы</a>
                    <a href="#videos" class="menu__item">Обзоры</a>
                    <a href="#delivery" class="menu__item">Сроки и доставка</a>
                </div>
            </div>

        </div>
        <section class="main">
            <header class="header">
                <div class="container">
                    <div class="header__field">
                        <div class="header__logo"></div>
                        <div class="header__menu">
                            <a href="#about" class="menu__item">Об игре</a>
                            <a href="#box" class="menu__item">Что в коробке?</a>
                            <a href="#how" class="menu__item">Как играть?</a>
                            <a href="#why" class="menu__item">Почему стоит сыграть?</a>
                            <a href="#reviews" class="menu__item">Отзывы</a>
                            <a href="#videos" class="menu__item">Обзоры</a>
                            <a href="#delivery" class="menu__item">Сроки и доставка</a>
                            <a href="mailto:<?php echo $settings['email'] ?>"
                                class="menu__item menu__item-email"><?php echo $settings['email'] ?></a>
                        </div>
                    </div>
                    <div class="header__mob">
                        <div class="header__logo"></div>
                        <div class="header__menu">
                            <a href="mailto:<?php echo $settings['email'] ?>"
                                class="menu__item menu__item-email"><?php echo $settings['email'] ?></a>
                        </div>
                        <div class="menu__burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container">
                <div class="main__content-title">
                    <img src="images/title.png" alt="Авиалинии Юкона">
                </div>
                <div class="main__content-button">
                    <a href="#about" class="main__content-button-a"></a>
                </div>
            </div>
        </section>
        <section class="top__order bg_w">
            <div class="container">
                <div class="top__order-field">
                    <img src="images/box.png" alt="Авиалинии Юкона" class="top__order-box">
                    <div class="top__order-content">
                        <div class="top__order-oldprice"><?php echo $settings['price'] ?><span>руб.</span></div>
                        <div class="top__order-price"><?php echo $settings['price_red'] ?> <span>руб.</span></div>
                        <a href="<?php echo $settings['link'] ?>" target="_blank" class="top__order-button">Заказать</a>
                        <div class="top__order-date">* цена по предзаказу до <span><?php echo date('d.m.Y',strtotime($settings['pre_order'])) ?></span></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about" id="about">
            <div class="container">
                <div class="about__field">
                    <div class="about__content">
                        <p class="section__title">Об игре</p>
                        <p class="about__text"><?php echo $data['about_text'] ?>
                        </p>
                        <div class="about__items">
                            <div class="about__item">
                                <img src="images/people.svg" alt="" class="about__item-icon">
                                <p><?php echo $data['about_players'] ?></p>
                            </div>
                            <div class="about__item">
                                <img src="images/timer.svg" alt="" class="about__item-icon">
                                <p><?php echo $data['about_time'] ?></p>
                            </div>
                            <div class="about__item">
                                <img src="images/child_care.svg" alt="" class="about__item-icon">
                                <p><?php echo $data['about_age'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="about__box">
                        <img src="images/box_2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="box bg_w" id="box">
            <div class="container">
                <div class="airplane"></div>
                <div class="section__title title__df title__center title__margin"><span>Что в коробке?</span></div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="inside__box-item">
                            <div class="inside__box-title"><span>1</span> Игровое поле</div>
                            <img src="images/box/1.png" alt="" class="inside__box-image">
                            <div class="inside__box-title"><span>4</span> планшета игроков</div>
                        </div>

                        <div class="inside__box-item span__second">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="inside__box-item-sm">
                                        <div class="inside__box-title"><span>4</span> фишки <br> игроков</div>
                                        <div class="inside__box-flex"><img src="images/box/2.png" alt=""
                                                style="max-height: 59px;" class="inside__box-image"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="inside__box-item-sm">
                                        <div class="inside__box-title"><span>1</span> черный маркер раундов</div>
                                        <div class="inside__box-flex">
                                            <img src="images/box/3.png" alt="" class="inside__box-image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="inside__box-item-sm_2">
                                        <div class="inside__box-title"><span>24</span> стрелки </div>
                                        <p class="inside__box-title-desc">для приборной панели</p>

                                        <div class="inside__box-flex"><img src="images/box/4.png" alt=""
                                                style="max-height: 140px;" class="inside__box-image"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="inside__box-item-sm">
                                        <div class="inside__box-title"><span>80</span> КУБИКОВ</div>
                                        <div class="inside__box-flex">
                                            <img src="images/box/5.png" alt="" class="inside__box-image"
                                                style="max-height: 140px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="inside__box-item-sm_2">
                                        <div class="inside__box-title"><span>15</span> кубов</div>
                                        <p class="inside__box-title-desc">пассажиров</p>
                                        <div class="inside__box-flex"><img src="images/box/6.png" alt=""
                                                style="max-height: 140px;" class="inside__box-image"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="inside__box-item-sm">
                                        <div class="inside__box-title"><span>4</span> гидроплана</div>
                                        <div class="inside__box-flex">
                                            <img src="images/box/7.png" alt="" class="inside__box-image"
                                                style="max-height: 90px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-12">
                                    <div class="inside__box-item-sm">
                                        <div class="inside__box-title"><span>28</span> переключателей</div>
                                        <div class="inside__box-flex">
                                            <img src="images/box/8.png" alt="" class="inside__box-image"
                                                style="max-height: 180px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="inside__box-item span__third">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="inside__box-item-sm">
                                        <div class="inside__box-title"><span>4</span> карты гидроплана</div>
                                        <div class="inside__box-flex">
                                            <img src="images/box/9.png" alt="" class="inside__box-image"
                                                style="max-height: 240px;">
                                        </div>
                                    </div>
                                    <div class="inside__box-item-sm">
                                        <div class="inside__box-title"><span>9</span> карт целей</div>
                                        <div class="inside__box-flex">
                                            <img src="images/box/10.png" alt="" class="inside__box-image"
                                                style="max-height: 230px;">
                                        </div>
                                    </div>
                                    <div class="inside__box-item-sm">
                                        <div class="inside__box-title"><span>60</span> карт купюр</div>
                                        <div class="inside__box-flex">
                                            <img src="images/box/11.png" alt="" class="inside__box-image"
                                                style="max-height: 200px;">
                                        </div>
                                    </div>
                                    <div class="inside__box-item-sm">
                                        <div class="inside__box-title"><span>72</span> карты билетов</div>
                                        <div class="inside__box-flex">
                                            <img src="images/box/12.png" alt="" class="inside__box-image"
                                                style="max-height: 240px;">
                                        </div>
                                    </div>
                                    <div class="inside__box-item-sm">
                                        <div class="inside__box-title"><span>4</span> карты памятки</div>
                                        <div class="inside__box-flex">
                                            <img src="images/box/13.png" alt="" class="inside__box-image"
                                                style="max-height: 240px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="how_play" id="how">
            <div class="container">
                <div class="section__title title__df title__center title__margin"><span>Как играть?</span></div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="how__play-item">
                            <div class="how__play-flex">
                                <img src="images/how/1.png" alt="" class="how__play-img how__play-img-main">
                                <div class="how__play-img-num-flex"><img src="images/how/num/1.png" alt=""
                                        class="how__play-img how__play-img-num"></div>
                            </div>
                            <div class="how__play-text">Задача игрока — за 6 дней заработать максимальное количество
                                денег,
                                развозя пассажиров по городам Юкона на своем гидроплане. </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="how__play-item">
                            <div class="how__play-flex">
                                <img src="images/how/2.png" alt="" class="how__play-img how__play-img-main">
                                <div class="how__play-img-num-flex"><img src="images/how/num/2.png" alt=""
                                        class="how__play-img how__play-img-num"></div>
                            </div>
                            <div class="how__play-text">На поле находится 13 городов, связанных маршрутами перелётов.
                                Уайтхорс — крупнейший город на Юконе, откуда мы всегда начинаем новый день. </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="how__play-item">
                            <div class="how__play-flex">
                                <img src="images/how/3.png" alt="" class="how__play-img how__play-img-main">
                                <div class="how__play-img-num-flex"><img src="images/how/num/3.png" alt=""
                                        class="how__play-img how__play-img-num"></div>
                            </div>
                            <div class="how__play-text">В каждый город (кроме Уайтхорса) мы случайным образом размещаем
                                по
                                столько маркеров, сколько игроков за столом. Каждый маркер — это требуемая конечная
                                точка
                                пассажиров соответствующего цвета. Самих пассажиров символизируют кубы, которые мы
                                бросаем в
                                начале партии и расставляем их по шести пирсам согласно выпавшим значениям. </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="how__play-item">
                            <div class="how__play-flex">
                                <img src="images/how/4.png" alt="" class="how__play-img how__play-img-main">
                                <div class="how__play-img-num-flex"><img src="images/how/num/4.png" alt=""
                                        class="how__play-img how__play-img-num"></div>
                            </div>
                            <div class="how__play-text">В начале игры на поле выкладывается 3 случайные карты целей,
                                которые
                                дают привилегии игроку за выполнение условий, указанных на картах. </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="how__play-item">
                            <div class="how__play-flex">
                                <img src="images/how/5.png" alt="" class="how__play-img how__play-img-main">
                                <div class="how__play-img-num-flex"><img src="images/how/num/5.png" alt=""
                                        class="how__play-img how__play-img-num"></div>
                            </div>
                            <div class="how__play-text">Каждый игрок выбирает фишки игрока и гидроплана одного цвета,
                                планшет и карточку своего самолета, берёт стартовые 6 карт билетов, топливо и деньги.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="how__play-item">
                            <div class="how__play-flex">
                                <img src="images/how/6.png" alt="" class="how__play-img how__play-img-main">
                                <div class="how__play-img-num-flex"><img src="images/how/num/6.png" alt=""
                                        class="how__play-img how__play-img-num"></div>
                            </div>
                            <div class="how__play-text">Планшет игрока состоит из двух основных частей — приборная
                                панель
                                самолета с индикаторами и переключателями и мини-карта для отметки посещённых городов.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="how__play-item">
                            <div class="how__play-flex">
                                <img src="images/how/7.png" alt="" class="how__play-img how__play-img-main">
                                <div class="how__play-img-num-flex"><img src="images/how/num/7.png" alt=""
                                        class="how__play-img how__play-img-num"></div>
                            </div>
                            <div class="how__play-text">Каждый ход игроки, начиная с первого, поочередно занимают один
                                из
                                свободных пирсов и получает бонус этого пирса. </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="how__play-item">
                            <div class="how__play-flex">
                                <img src="images/how/8.png" alt="" class="how__play-img how__play-img-main">
                                <div class="how__play-img-num-flex"><img src="images/how/num/8.png" alt=""
                                        class="how__play-img how__play-img-num"></div>
                            </div>
                            <div class="how__play-text">После этого игрок должен взять один или несколько кубов одного
                                цвета
                                к себе на гидроплан и получить топливо за остаток свободных мест на гидроплане. </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="how__play-item">
                            <div class="how__play-flex">
                                <img src="images/how/9.png" alt="" class="how__play-img how__play-img-main">
                                <div class="how__play-img-num-flex"><img src="images/how/num/9.png" alt=""
                                        class="how__play-img how__play-img-num"></div>
                            </div>
                            <div class="how__play-text">Далее пилоты начинают совершать перелёты в порядке занятых
                                пирсов.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="how__play-item">
                            <div class="how__play-flex">
                                <img src="images/how/10.png" alt="" class="how__play-img how__play-img-main">
                                <div class="how__play-img-num-flex"><img src="images/how/num/10.png" alt=""
                                        class="how__play-img how__play-img-num"></div>
                            </div>
                            <div class="how__play-text">Игроки по очереди совершают любое количество перелётов, после
                                чего
                                получают доход. </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="how__play-item">
                            <div class="how__play-flex">
                                <img src="images/how/11.png" alt="" class="how__play-img how__play-img-main">
                                <div class="how__play-img-num-flex"><img src="images/how/num/11.png" alt=""
                                        class="how__play-img how__play-img-num"></div>
                            </div>
                            <div class="how__play-text">После этого игроки перебрасывают все кубы, помещают их на
                                соответствующие пирсы, возвращают свои гидропланы в Уайтхорс, и добирают карты билетов.
                                Затем начинается следующий ход. </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="how__play-item">
                            <div class="how__play-flex">
                                <img src="images/how/12.png" alt="" class="how__play-img how__play-img-main">
                                <div class="how__play-img-num-flex"><img src="images/how/num/12.png" alt=""
                                        class="how__play-img how__play-img-num"></div>
                            </div>
                            <div class="how__play-text">После шести ходов игроки получают дополнительные деньги за
                                маркеры
                                одного цвета (которых игрок набрал больше всего), за количество посещённых городов и за
                                специальный индикатор-улучшение, который можно прокачать в ходе игры. Самый
                                предприимчивый
                                становится победителем. </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rules" id="rules">
            <div class="container">
                <div class="rules__content">
                    <div class="rules__main">
                        <div class="rules__title">ПРАВИЛА игры</div>
                        <a href="uploads/rules.pdf" target="_blank" class="rules__link">Скачать <b>PDF</b></a>
                    </div>
                </div>
                <div class="rules__content-sm">
                    <div class="rules__main">
                        <div class="rules__title">ПРАВИЛА игры</div>
                        <img src="images/rules_box_2.png" alt="">
                        <a href="uploads/rules.pdf" target="_blank" class="rules__link">Скачать <b>PDF</b></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="why_play" id="why">
            <div class="container">
                <div class="section__title title__df title__center title__margin title__red title__red-2"><span>ПОЧЕМУ
                        СТОИТ
                        СЫГРАТЬ?</span></div>
                <div class="why__content">
                    <div class="why__img"></div>
                    <div class="why__text">
                        <?php echo $data['why_text'] ?>
                    </div>
                </div>
                <div class="main-carousel">
                    <div class="carousel-cell">
                        <img src="images/slider/1.jpg" alt="">
                    </div>
                    <div class="carousel-cell">
                        <img src="images/slider/2.jpg" alt="">
                    </div>
                    <div class="carousel-cell">
                        <img src="images/slider/3.jpg" alt="">
                    </div>
                    <div class="carousel-cell">
                        <img src="images/slider/1.jpg" alt="">
                    </div>

                </div>
            </div>
        </section>
        <section class="reviews bg_w" id="reviews">
            <div class="container">
                <div class="blue-bg">
                    <div class="section__title title__light title__center title__margin "><span>ОТЗЫВЫ</span></div>
                    <div class="review-items">
                        <div class="review-item">
                            <img src="images/reviews/1.png" alt="Отзыв">
                            <div class="review-content">
                                <div class="review-name">GeekMedia, Юрий Ануфриев:</div>
                                <div class="review-text">«Если вы хотите себе игру с достаточно простыми правилами, но
                                    при
                                    этом глубоким геймплеем,
                                    если вы хотите себе надежную, проверенную временем евро игру с необычной механикой,
                                    я
                                    могу вам смело порекомендовать
                                    Yukon Airways.»</div>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="review-content">
                                <div class="review-name">Geek Media, Сергей Ярушок:</div>
                                <div class="review-text">«Правила игры не очень сложные и вполне логичные,
                                    они написаны подробно и с наглядными примерами.
                                    Просчёт выгодных вариантов и попытка выжать максимум из текущей ситуации заставят
                                    приятно скрипеть ваши мозги.»</div>
                            </div>
                            <img src="images/reviews/1.png" alt="Отзыв">
                        </div>
                        <div class="review-item">
                            <img src="images/reviews/2.png" alt="Отзыв">
                            <div class="review-content">
                                <div class="review-name">Cactus Games:</div>
                                <div class="review-text">«Игра просто потрясающая, мне понравилось в ней абсолютно все.
                                    Игровой процесс здесь не подкачал, все механики очень
                                    лаконично переплетаются между собой. Играть здесь можно действительно по разному и
                                    сложно найти наилучший путь развития.
                                    Эта смесь приятных механик, оформления и темы меня действительно зацепила. Смело
                                    могу
                                    рекомендовать ее вам.»</div>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="review-content">
                                <div class="review-name">Илья Мурсеев, OMGames:</div>
                                <div class="review-text">«Очень приятно нынче встретить подобную игру. Оригинальная
                                    тематика
                                    вкупе с хорошо работающей механикой манит к
                                    приобретению в коллекцию.»</div>
                            </div>
                            <img src="images/reviews/3.png" alt="Отзыв">
                        </div>
                        <div class="review-item">
                            <img src="images/reviews/3.png" alt="Отзыв">
                            <div class="review-content">
                                <div class="review-name">OMGames, Наталья Мурсеева:</div>
                                <div class="review-text">Мне игра понравилась, мне кажется, что таких игр не хватает,
                                    даже с
                                    новичками в нее можно сесть играть, сделано все
                                    классно, карты под лен, деревянные компоненты, разноцветные кубики, прекрасная игра.
                                </div>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="review-content">
                                <div class="review-name">The Dice Tower:</div>
                                <div class="review-text">Увлекательная настольная игра с интересной механикой, в которой
                                    от
                                    игры к игре вы будете пробовать различные стратегии.
                                    Она отличается от других игр, а также она довольно простая в освоении.</div>
                            </div>
                            <img src="images/reviews/4.png" alt="Отзыв">
                        </div>
                        <div class="review-item">
                            <img src="images/reviews/5.png" alt="Отзыв">
                            <div class="review-content">
                                <div class="review-name">Rahdo:</div>
                                <div class="review-text">Я остался очень доволен игрой. Все три составляющие механики —
                                    драфт кубов, погрузка и перевозка пассажиров и построение
                                    собсвенного движка — отлично гармонируют между собой. А дизайн игры и все ее
                                    элементы
                                    вызывают восторг.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why_play video_reviews" id="videos">
            <div class="container">
                <div class="section__title title__df title__center title__margin title__red"><span>обзоры</span></div>
                <div class="video-items">
                    <div class="video-item">
                        <div class="video-frame">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/WcVUaOt15JQ"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="video-bottom">
                            <img src="images/reviews/1.png" alt="">
                            <div class="video-title">GeekMedia</div>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-frame">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/WcVUaOt15JQ"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="video-bottom">
                            <img src="images/reviews/2.png" alt="">
                            <div class="video-title">Cactus Games</div>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-frame">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/WcVUaOt15JQ"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="video-bottom">
                            <img src="images/reviews/4.png" alt="">
                            <div class="video-title">The Dice Tower <span>Обзор на английском языке</span></div>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-frame">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/WcVUaOt15JQ"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="video-bottom">
                            <img src="images/reviews/3.png" alt="">
                            <div class="video-title">OMGames</div>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-frame">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/WcVUaOt15JQ"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="video-bottom">
                            <img src="images/reviews/5.png" alt="">
                            <div class="video-title">Rahdo <span>Обзор на английском языке</span></div>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-frame">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/WcVUaOt15JQ"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="video-bottom">
                            <img src="images/reviews/3.png" alt="">
                            <div class="video-title">OMGames</div>
                        </div>
                    </div>

                </div>
                <div class="sites" id="sites">
                    <div class="section__title title__df title__center title__margin title__sites"><span>страницы игры
                            на
                            сайтах</span></div>
                    <div class="site-items">
                        <a href="https://nastol.io/" target="_blank" class="site-item">
                            <img src="images/s1.png" alt="">
                            <div>nastol.io</div>
                        </a>
                        <a href="https://boardgamegeek.com/" target="_blank" class="site-item">
                            <img src="images/s2.png" alt="">
                            <div>boardgamegeek.com</div>
                        </a>
                        <a href="https://tesera.ru/" target="_blank" class="site-item">
                            <img src="images/s3.png" alt="">
                            <div>tesera.ru</div>
                        </a>
                    </div>

                </div>
            </div>

        </section>
        <div class="order" id="order">
            <div class="order-items">
                <div class="order-left">
                    <div class="order-price">
                        <p><?php echo $settings['price_red'] ?> руб.*</p>
                        <span>* Предзаказ до <?php echo date('d.m.Y',strtotime($settings['pre_order'])) ?></span>
                    </div>
                </div>
                <div class="order-right">
                    <div class="order-price">
                        <p><?php echo $settings['price'] ?> руб.</p>
                        <span>Планируемая РРЦ в России</span>
                    </div>
                </div>
                <div class="order-btn-field">
                    <a href="<?php echo $settings['link'] ?>" target="_blank"  class="order-btn">Заказать</a>
                </div>
            </div>
        </div>
        <section class="delivery" id="delivery">
            <div class="section__title title__df title__center title__margin title__delivery"><span>Сроки и
                    доставка</span>
            </div>
            <div class="delivery-items">
                <div class="delivery-item">
                    <p class="delivery-title">Платная доставка:</p>
                    <p class="delivery-text"><?php echo $data['delivery'] ?></p>
                </div>
                <div class="delivery-item">
                    <p class="delivery-title">Бесплатная доставка:</p>
                    <p class="delivery-text"><?php echo $data['delivery_free'] ?>
                    </p>
                </div>
            </div>
        </section>

        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="socials">
                                <p>Свяжитесь с нами:</p>
                                <div class="icons">
                                    <a target="_blank" href="<?php echo $settings['inst'] ?>" class="inst"></a>
                                    <a target="_blank" href="<?php echo $settings['vk'] ?>" class="vk"></a>
                                    <a target="_blank" href="<?php echo $settings['fb'] ?>" class="fb"></a>
                                </div>
                            </div>
                            <span><?php echo $settings['email'] ?></span>
                            <br><br>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p>Страницы игры на сайтах:</p>
                            <div class="footer-links">
                                <a target="_blank" href="https://nastol.io/">Nastol.io</a>
                                <a target="_blank" href="https://boardgamegeek.com/">BoardGameGeek</a>
                                <a target="_blank" href="https://tesera.ru/">Tesera.ru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <p><?php echo $settings['copyright'] ?></p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>

    
</body>

</html>