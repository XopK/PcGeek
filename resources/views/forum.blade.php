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
    <title>PcGeek</title>
</head>

<body>
    <div class="container forum-title">
        <x-header></x-header>
        <h1>Форум</h1>
        <div class="forum-page">
            <div class="forum-list-page">
                <div class="filter d-flex align-items-center">
                    <div class="dropdown">
                        сортировать по:
                        <button class="btn-filter" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Дате добавления
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Названию</a></li>
                            <li><a class="dropdown-item" href="#">Автору</a></li>
                            <li><a class="dropdown-item" href="#">Кол-ву лайков</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-cust">+ Добавить пост</button>
                </div>
                <div class="forum-post">
                    <div class="forum-block-info">
                        <div class="block-info">
                            <h3>Материнские платы, апгрейд</h3>
                            <h1>Второй слот под m2 с радиатором</h1>
                            <p>Второй слот под м2 который с радиатором, работает так же как первый без радиатора?
                                Собираю пк, много мат. плат пересматриваю, пишут то нижний слот м2 где то может медленно
                                работать или еще какие то проблемы. Так как на самом деле?</p>
                            <span>Автор: Danya239</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
