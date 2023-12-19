<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
        li>a{
            color: white
        }
    </style>
    <title>PcGeek</title>
</head>

<body>
    <div class="container forum-title">
        <x-header></x-header>
        <h1>Карта сайта</h1>

        <ul>
            <li><a href="#">Главная</a>
                <ul>
                    <li><a href="#">Популярные треды</a></li>
                    <li><a href="#">Теги</a></li>
                </ul>
            </li>
            <li><a href="#">Форум</a>
                <ul>
                    <li><a href="#">Добавить пост</a></li>
                    <li><a href="#">Ветки</a></li>
                </ul>
            </li>
            @auth
                <li><a href="#">Личный кабинет</a>
                    <ul>
                        <li><a href="#">Редактировать профиль</a></li>
                        <li><a href="#">Мои посты</a>
                            <ul>
                                <li><a href="#">Редактировать</a></li>
                                <li><a href="#">Удалить</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Избранные</a></li>
                    </ul>
                </li>
            @endauth


        </ul>
    </div>
    </div>
    <x-footer></x-footer>
</body>
<x-sign-in></x-sign-in>
<x-sign-up></x-sign-up>

</html>
