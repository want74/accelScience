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

        body {
            margin: 0 auto;
            height: auto;
            background-color: #0D0D0D;
            background-image: url(img/grid.svg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

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

        .btn-burger {
            border: 0;
        }

        .navbar-toggler-icon {
            background-image: url(img/burger.svg) !important;
        }
    </style>
</head>

<body>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4">Collapsed content</h5>
            <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
    </div>

    <button class="navbar-toggler btn-burger" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <div class="row text-center" style="height:100vh;">
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
                                    найтди новых друзей ! </p>
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

        <div class="row" style="height:100vh;">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>