<?php
    session_start();
    include "connect.php";
    $query1 = mysqli_query($con, "SELECT * FROM projects");
?>


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

        .btn-inline-choice {
            border: 1px solid #8080FF;
            box-sizing: border-box;
            border-radius: 4px;
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            /* identical to box height, or 133% */

            text-align: center;
            letter-spacing: -0.24px;

            color: rgba(255, 255, 255, 0.5);
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

        /*Карточка проекта*/
        .cardPr {
            background: rgba(50, 50, 255, 0.21);
            backdrop-filter: blur(26px);
            /* Note: backdrop-filter has minimal browser support */

            border-radius: 11px;
            height: 150px;
        }

        .t-text {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 128.19%;
            /* or 21px */

            text-align: center;
            letter-spacing: 0.12em;

            color: rgba(255, 255, 255, 0.5);
        }

        .d {
            color: white;
        }

        input {
            background: #282828 !important;
            border: 1px solid #8080FF !important;
            box-sizing: border-box !important;
            border-radius: 6px !important;
            height: 5vh;
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



        <!--Слайд 3-->
        <div class="row panel" style="height:100vh;" data-section-name="set" id="set">
            <div class="col-10 mx-auto" style="height:100vh;">
                <div class="row" style="height:100vh; color:white;">
                    <form action="newins.php" method="post">
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
                                                Вставьте ссылку YouTube презентацию
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">
                                        </div>
                                        <div class="col text-prog">
                                            <input type="text" name="yt" class="form-control text-white"
                                                placeholder="Вставить">
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
                                                Вставьте ссылку OneDrive
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">
                                        </div>
                                        <div class="col text-prog">
                                            <input type="text" name="word" class="form-control text-white"
                                                placeholder="Вставить">
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
                                            Тема вашего проекта
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">
                                        </div>
                                        <div class="col text-prog">
                                            <input type="text" name="title" class="form-control text-white"
                                                placeholder="Тема">
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
                                                Необходимая сумма

                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">
                                        </div>
                                        <div class="col text-prog">
                                            <input type="text" name="money" class="form-control text-white"
                                                placeholder="XXX XXX руб">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <button class="btn btn-choice w-50 mx-auto">
                                    Отправить заявку
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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