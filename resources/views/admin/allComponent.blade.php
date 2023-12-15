<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/style/adminStyle.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Admin-panel</title>
</head>

<body>

    <div class="container-fluid">
        <x-admin-sidebar></x-admin-sidebar>
        <div class="col p-4 all-comp">
            <div class="text-comp d-flex align-items-center justify-content-between mb-3">
                <h1>Компоненты</h1>
                <a href="/admin/addComponent" class="btn btn-primary">+Добавить компонент</a>
            </div>

            <div class="all-components d-flex gap-3 flex-wrap">
                @forelse ($components as $component)
                    <div class="card" style="width: 14rem;">
                        <img src="/storage/imgComponents/{{ $component->image_components }}" class="card-img-top"
                            alt="{{ $component->image_components }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $component->title_component }}</h5>
                            <p class="card-text mb-2">{{ $component->config_component }}</p>
                            <h3 class="card-title">{{ $component->sale }}₽</h3>
                            <a href="/admin/components/edit/{{ $component->id }}"
                                class="btn btn-warning mt-auto">Редактировать</a>
                            <form class="d-flex " action="/admin/components/delete/{{ $component->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger flex-fill mt-auto" value="Удалить">
                            </form>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    </div>

</body>


</html>
