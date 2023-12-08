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
    <div class="container branch-title" style="text-align: center">
        <x-header></x-header>
        <h1>Добавление поста</h1>
        <div class="addPosts" style="margin-top: 30px">
            <form action="/addPost/create" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="title_post" class="form-control rounded-3" id="floatingInput">
                    <label for="floatingInput">Название поста</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea name="description" class="form-control rounded-3" id="floatingInput" rows="5"></textarea>
                    <label for="floatingInput">Текст поста</label>

                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="tags" class="form-control rounded-3" id="floatingPassword">
                    <label for="floatingPassword">Теги (вводите через запятую и без пробелов)</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" name="component" aria-label="Default select example">
                        @forelse ($components as $component)
                            <option value="{{ $component->id }}">
                                {{ $component->title_component }} {{ $component->sale }}₽</option>
                        @empty
                            <option disabled selected value="0"></option>
                        @endforelse

                    </select>
                    <label for="floatingPassword">Выберите компонент</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-cost" type="submit">Опубликовать</button>
            </form>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
