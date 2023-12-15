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
        <div class="col p-4 form-add-comp">
            <h1 class="mb-3">Редактирование компонента</h1>
            <form action="/admin/components/update/{{ $edits->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="titleСomponent" class="form-label">Назвавние компонента</label>
                    <input type="text" value="{{ $edits->title_component }}" class="form-control"
                        name="title_component" id="titleСomponent">
                    @error('title_component')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="configСomponent" class="form-label">Характеристики компонента</label>
                    <input type="text" class="form-control" value="{{ $edits->config_component }}"
                        name="config_component" id="configСomponent">
                    @error('config_component')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Фотография компонента</label>
                    <input class="form-control" type="file" name="updateComponent" id="formFile">
                    @error('image_components')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale" class="form-label">Цена</label>
                    <input type="number" value="{{ $edits->sale }}" name="sale" class="form-control"
                        id="sale">
                    @error('sale')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-outline-warning">Редактировать</button>
                @if (session('succes'))
                    <div class="alert alert-success alert-dismissible mt-3">
                        <div class="alert-text">
                            {{ session('succes') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    </div>
                @endif
            </form>
        </div>
    </div>
    </div>

</body>


</html>
