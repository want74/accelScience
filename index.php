<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>AccelScience</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

        /*Ну боди, чел ты чё?*/
        body {
            margin: 0 auto;
            height: auto;
            background-color: #0D0D0D;
            background-image: url(img/grid.svg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        /*То что у нас программа?*/
        .spec {
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 48px;
            line-height: 128.19%;
            /* identical to box height, or 62px */

            text-align: center;
            letter-spacing: 0.12em;
        }

        /*Название нашего прокта*/
        .ourProject {
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: 300;
            font-size: 80px;
            line-height: 128.19%;
            /* identical to box height, or 103px */

            text-align: center;
            letter-spacing: 0.12em;
        }

        /*Слоган проекта*/
        .slogan {
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 128.19%;
            /* or 31px */

            text-align: center;
            letter-spacing: 0.12em;
        }

        /*кнопка выбора программы*/
        .btn-choice {
            background: #8080FF;
            border-radius: 4px;
            color: white;
            height: 40px;
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 20px;
        }

        /*Первый текст во втором слайде*/
        .f-text {
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: 300;
            font-size: 62px;
            line-height: 128.19%;
            /* identical to box height, or 103px */

            letter-spacing: 0.12em;

            color: #8080FF;
        }

        /*Второй текст во втором слайде*/
        .s-text {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 128.19%;
            /* or 31px */

            letter-spacing: 0.12em;

            color: #8080FF;
        }

        /* кнопка бургера*/
        .btn-burger {
            border: 0;
        }

        /*Иконка бургера*/
        .navbar-toggler-icon {
            background-image: url(img/burger.svg) !important;
        }

        /*Анимация появления навигатора*/
        .animate {
            margin-left: 43vw;
            transition-property: margin-left;
            transition-duration: 1s;
            transition-timing-function: linear;
        }

        /*Бургер*/
        .burger {
            position: fixed;
            top: 45vh;
        }

        /*Анимация ухода навигатора*/
        .animateback {
            margin-left: 0;
            transition-property: margin-left !important;
            transition-duration: 1s !important;
            transition-timing-function: linear !important;
        }

        /*Лицензия*/
        .lic {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 128.19%;
            /* identical to box height, or 18px */

            letter-spacing: 0.09em;

            color: rgba(255, 255, 255, 0.5);

        }

        /*Лицензия*/
        .lic {
            position: fixed;
            top: 95vh;
            left: 2vw;
        }

        /*Разработано Yaka*/
        .by {
            position: fixed;
            top: 95vh;
            left: 85vw;
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 128.19%;
            /* identical to box height, or 18px */

            letter-spacing: 0.09em;

            color: rgba(255, 255, 255, 0.5);
        }
        
        /*Сектор навигационной панель*/
        .sec {
            height: auto;
            border-bottom: 1px solid #313131;
        }

        /*Стили навигатора*/
        .showed {
            position: fixed !important;
            background: rgba(115, 124, 132, 0.04);
            backdrop-filter: blur(15px);
            height: 100vh;
            position: absolute;
            left: -33vw;
            z-index: 100;
        }

        /*Заголовок навигатора*/
        .headNum {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 128.19%;
            /* identical to box height, or 21px */

            letter-spacing: 0.12em;

            color: #FFFFFF;
        }

        /*Текст навигатора*/
        .headText {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 128.19%;
            /* or 21px */

            letter-spacing: 0.12em;

            color: rgba(255, 255, 255, 0.5);
        }

        /*Уникальный навигатор*/

        .uniq {
            border: 0;
        }

        /*3д модель на фоне1*/
        .bg-huinya1 {
            background-image: url(img/huinya1.svg);
            background-position: center;
            background-size: 100vh 100vh;
            background-repeat: no-repeat;
        }

        /*3д модель на фоне2*/
        .bg-huinya2 {
            background-image: url(img/huinya2.svg);
            background-position: center;
            background-size: 70vh 70vh;
            background-repeat: no-repeat;
        }

        /* Круг на третьем слайде*/
        .circle {
            width: 50px;
            height: 50px;
            background: #8080FF;
            border-radius: 213123px;

            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 128.19%;
            /* identical to box height, or 31px */

            letter-spacing: 0.12em;

            color: #000000;
        }

        /*Заголовок состовляющих программы*/
        .head-prog {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 128.19%;
            /* or 31px */

            letter-spacing: 0.12em;

            color: #8080FF;
        }

        /*Текст состовляющих программы*/
        .text-prog {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 128.19%;
            /* or 21px */

            letter-spacing: 0.12em;

            color: rgba(255, 255, 255, 0.5);
        }

        /*Уникальный заголовок слайд на последнем*/
        .uniqHead {
            font-size: 28px !important;
        }

        /*Границы фиол на последнем слайде*/
        .border-spec {
            border: 1px solid #8080FF;
            box-sizing: border-box;
            border-radius: 14px;
            height: 70px;
        }

        /*Фиол текст на посл слайде*/
        .text-ruki {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 128.19%;
            /* or 21px */

            text-align: center;
            letter-spacing: 0.12em;

            color: #8080FF;
        }

        .huinyaSlide1 {
            width: 300px;
            height: 300px;
            position: relative;
            top: -700px;
            left: 100px;
        }

        .huinyaSlide2 {
            width: 300px;
            height: 300px;
            position: relative;
            top: -300px;
            left: -100px;
        }

        .huinyaSlide3 {
            width: 300px;
            height: 300px;
            position: relative;
            top: -500px;
            left: 300px;
        }
    </style>
</head>

<body>
    <!--Навигатор-->
    <div class="row">
        <div class="col-3 showed">
            <!--Секции навигатора-->
            <div class="row sec">
                <div class="col">
                    <div class="row">
                        <p class="headNum mt-5 mb-4">+7 (914) 277-40-56</p>
                    </div>
                </div>
            </div>
            <div class="row sec">
                <div class="col">
                    <div class="row">
                        <p class="headNum mt-5">Программы</p>
                    </div>
                    <div class="row">
                        <p class="headText mt-2 mb-4">Основная прграмма ACCEL SCIENCE </p>
                    </div>
                </div>
            </div>
            <div class="row sec">
                <div class="col">
                    <div class="row">
                        <p class="headNum mt-5">О нас</p>
                    </div>
                    <div class="row">
                        <p class="headText mt-2 mb-3">О ACCEL SCIENCE</p>
                    </div>
                    <div class="row">
                        <p class="headText mt-2 mb-3">Отзывы</p>
                    </div>
                    <div class="row">
                        <p class="headText mt-2 mb-3">Партнеры</p>
                    </div>
                    <div class="row">
                        <p class="headText mt-2 mb-3">Новости</p>
                    </div>
                    <div class="row">
                        <p class="headText mt-2 mb-3">О нас пишут</p>
                    </div>
                    <div class="row">
                        <p class="headText mt-2 mb-3">Проекты</p>
                    </div>
                </div>
            </div>
            <div class="row sec">
                <div class="col">
                    <div class="row">
                        <p class="headNum mt-5">Лагерь</p>
                    </div>
                    <div class="row">
                        <p class="headText mt-2 mb-3">О проекте</p>
                    </div>
                    <div class="row">
                        <p class="headText mt-2 mb-3">О программе</p>
                    </div>
                    <div class="row">
                        <p class="headText mt-2 mb-3">Родителям</p>
                    </div>
                    <div class="row">
                        <p class="headText mt-2 mb-3">Студентам</p>
                    </div>
                </div>
            </div>
            <div class="row sec uniq">
                <div class="col">
                    <div class="row">
                        <p class="headNum mt-5">Контакты</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Кем сделано-->
    <div class="row by" style="width: 200px;">
        <div class="col">
            <p class="w-100">
                Разработано в YAKA
            </p>
        </div>
    </div>
    <!--Когда сделано-->
    <div class="row lic">
        <p class="">
            <img src="img/c.svg">
            2022-ACCEL SCIENCE
        </p>
    </div>
    <!--Бургер-->
    <button class="btn burger" onclick="hshow()">
        <img src="img/burger.svg" class="burgerimg">
        <img src="img/krest.svg" style="display: none;" class="krestimg">
    </button>
    <!--Контент-->
    <div class="container">
        <!--Слайд 1-->
        <div class="row text-center panel" style="height:100vh;" data-section-name="home" id="home">
            <div class="col-10 mx-auto" style="height:100vh;">
                <div class="row" style="height:100vh; color:white;">
                    <div class="col my-auto">
                        <div class="row">
                            <p class="spec">Программа</p>
                        </div>
                        <div class="row">
                            <h1 class="ourProject">ACCEL SCIENCE </h1>
                        </div>
                        <div class="row mt-5">
                            <div class="col-10 mx-auto">
                                <p class="slogan">прокачай предпринимательские навыки,
                                    запусти свой стартап,
                                    получи поддержку менторов,
                                    найти новых друзей ! </p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6 mx-auto">
                                <button class="btn btn-choice">Выбирай свою стоимость программы</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Слайд 2-->
        <div class="row panel" style="height:100vh;" data-section-name="ad" id="ad">
            <div class="col-10 mx-auto bg-huinya1" style="height:100vh;">
                <div class="row" style="height:100vh; color:white;">
                    <div class="col">
                        <div class="row" style="height: 33vh;">
                            <div class="col-4 ms-auto">
                                <div class="row mt-3">
                                    <h1 class="f-text">$50 млрд</h1>
                                </div>
                                <div class="row">
                                    <p class="s-text">Капитализация компании, построенных нашими менторами </p>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="height: 33vh;">
                            <div class="col-4">
                                <div class="row mt-3">
                                    <h1 class="f-text">2500+</h1>
                                </div>
                                <div class="row">
                                    <p class="s-text">проектов прошли программу</p>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="height: 33vh;">
                            <div class="col-4 ms-auto">
                                <div class="row mt-3">
                                    <h1 class="f-text">$50 млрд</h1>
                                </div>
                                <div class="row">
                                    <p class="s-text">Капитализация компании, построенных нашими менторами </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Слайд 3-->
        <div class="row panel" style="height:100vh;" data-section-name="set" id="set">
            <div class="col-10 mx-auto" style="height:100vh;">
                <div class="row" style="height:100vh; color:white;">
                    <div class="col">
                        <div class="row">
                            <h1 class="spec mx-auto mt-5">Что включает программа</h1>
                        </div>
                        <div class="row mb-5" style="margin-top: 10vh;">
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 circle d-flex">
                                        <p class="my-auto mx-auto">1</p>
                                    </div>
                                    <div class="col head-prog">
                                        <p>
                                            Безлимитный доступ к записям встреч с менторами
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                    </div>
                                    <div class="col text-prog">
                                        <p>
                                            Методология обучения создана таким образом, что присоединиться можно в любой
                                            момент и сразу же начать работать над своим проектом или присоедниться к
                                            команде.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 circle d-flex">
                                        <p class="my-auto mx-auto">2</p>
                                    </div>
                                    <div class="col head-prog">
                                        <p>
                                            Возможность работать в команде с менторами
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                    </div>
                                    <div class="col text-prog">
                                        <p>
                                            После презентации своего проекта на Демо дне, каждый студент имеет
                                            возможность продолжать работать в команде с менторами над своим проектом,
                                            чтобы его запустить.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20vh;">
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 circle d-flex">
                                        <p class="my-auto mx-auto">3</p>
                                    </div>
                                    <div class="col head-prog">
                                        <p>
                                            Онлайн встречи
                                            + Демо Дни

                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                    </div>
                                    <div class="col text-prog">
                                        <p>
                                            2 раза в месяц мы проводим открытые онлайн zoom встречи для ответов на
                                            вопросы, помогаем разобраться в материале, сфокусировать на тренде развития
                                            проекта, строим дружный невторкинг. Раз в 3 месяца мы проводим демо дни, где
                                            каждый сможет запитчить свой стартап перед инвесторами.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 circle d-flex">
                                        <p class="my-auto mx-auto">4</p>
                                    </div>
                                    <div class="col head-prog">
                                        <p>
                                            Особенный опыт
                                            для каждого

                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                    </div>
                                    <div class="col text-prog">
                                        <p>
                                            Таким образом студенты наращивают свои знания и тренеруют навыки
                                            предпринимателя до тех пор, пока не почувствуют, что впитали достаточно для
                                            своего самостоятельного плавания!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Слайд 4-->
        <div class="row panel" style="height:100vh;" data-section-name="wait" id="wait">
            <div class="col-10 mx-auto bg-huinya2" style="height:100vh;">
                <div class="row" style="height:100vh; color:white;">
                    <div class="col">
                        <div class="row">
                            <h1 class="spec mx-auto mt-5">Что тебя ждёт:</h1>
                        </div>
                        <div class="row mt-5">
                            <div class="col-2 circle d-flex">
                                <p class="my-auto mx-auto">1</p>
                            </div>
                            <div class="col-3 text-prog d-flex">
                                <p class="my-auto">
                                    Безлимитный доступ к записям 12 встреч с менторами
                                </p>
                            </div>
                        </div>
                        <div class="row mt-5">

                            <div class="col-3 text-prog d-flex ms-auto">
                                <p class="my-auto">
                                    Чат вопросов и ответов по заданиям программы

                                </p>
                            </div>
                            <div class="col-2 circle d-flex">
                                <p class="my-auto mx-auto">5</p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-2 circle d-flex">
                                <p class="my-auto mx-auto">2</p>
                            </div>
                            <div class="col-3 text-prog d-flex">
                                <p class="my-auto">
                                    Участие в онлайн-zoom встречах 2 раза в месяц

                                </p>
                            </div>
                        </div>
                        <div class="row mt-5">

                            <div class="col-3 text-prog d-flex ms-auto">
                                <p class="my-auto">
                                    Возможность получить личную менторскую поддержку для своего проекта


                                </p>
                            </div>
                            <div class="col-2 circle d-flex">
                                <p class="my-auto mx-auto">6</p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-2 circle d-flex">
                                <p class="my-auto mx-auto">3</p>
                            </div>
                            <div class="col-3 text-prog d-flex">
                                <p class="my-auto">
                                    Возможность презентовать свой проект на демо-дне 1 раз в 3 месяца


                                </p>
                            </div>
                        </div>
                        <div class="row mt-5">

                            <div class="col-3 text-prog d-flex ms-auto">
                                <p class="my-auto">
                                    Выбрать свою оплату за программу

                                </p>
                            </div>
                            <div class="col-2 circle d-flex">
                                <p class="my-auto mx-auto">7</p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-2 circle d-flex">
                                <p class="my-auto mx-auto">4</p>
                            </div>
                            <div class="col-3 text-prog d-flex">
                                <p class="my-auto">
                                    Доступ к комьюнити молодых успешных предпринимателей


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Слайд 4-->
        <div class="row panel" style="height:100vh;" data-section-name="end" id="end">
            <div class="col-10 mx-auto" style="height:100vh;">
                <div class="row" style="height:100vh; color:white;">
                    <div class="col">
                        <div class="row border-spec" style="margin-top: 15vh;">
                            <h1 class="text-white spec uniqHead my-auto">
                                Защита своих проектов перед инвесторами каждые 3 месяца
                            </h1>
                        </div>
                        <div class="row" style="margin-top: 20vh;">
                            <div class="col-6 mx-auto text-center">
                                <div class="row">
                                    <p class="text-ruki">
                                        Все в твоих руках!
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="text-prog">
                                        Мы тебе даем все наши возможности и поддержку! <br><br>

                                        Ты можешь выбрать свою комфортную оплату за программу. Все средства идут в
                                        дальнейшие развитие проекта AccelScience и поддержку молодых предпринимателей!

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <img src="img/huinyaslide1.svg" class="huinyaSlide1">
            <img src="img/huinyaslide2.svg" class="huinyaSlide2">
            <img src="img/huinyaslide3.svg" class="huinyaSlide3">
        </div>
    </div>
    <script src="script/jquery-2.2.1.min.js"></script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="script/jquery.scrollify.js"></script>
    <script>
        let btn = document.querySelector('.burger')
        let burger = document.querySelector('.burgerimg')
        let krest = document.querySelector('.krestimg')
        let showed = document.querySelector('.showed')
        let bul = true

        function hshow() {

            if (bul == true) {
                showed.classList.add('animate');
                showed.classList.remove('animateback');
                burger.style.display = "none"
                krest.style.display = "block"
                bul = false
            } else {
                showed.classList.remove('animate');
                showed.classList.add('animateback');
                burger.style.display = "block"
                krest.style.display = "none"
                bul = true
            }
        }

        $.scrollify({
            section: ".panel",
            scrollbars: false,
            scrollSpeed: 100,
        })
    </script>
</body>

</html>