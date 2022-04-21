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
        /*Линии пагинации*/
        .line {
            width: 100px !important;
            height: 1px !important;
            border: 2px solid white !important;
        }
        /*пагинация слайдов*/
        .pagination {
            position: fixed;
            left: 80vw;
            top: 40vh;
            height: 100px;
            width: 200px;
        }
        /*Сектор навигационной панель*/
        .sec {
            
        }
    </style>
</head>

<body>
    <!--Пагинация-->
    <div class="pagination d-block">
        <a href="#home" class="">
            <div class="line active"></div>
        </a>
        <a href="#ad" class="">
            <div class="line my-4"></div>
        </a>
        <a href="#set" class="">
            <div class="line"></div>
        </a>
    </div>
    <!--Навигатор-->    
    <div class="col-3 showed">
        <!--Секции навигатора-->
        <div class="row sec">

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
            <div class="col-10 mx-auto" style="height:100vh;">
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