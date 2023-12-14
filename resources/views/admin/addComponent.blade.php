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
            <h1 class="mb-3">Добавление компонента</h1>
            <form action="">
                <div class="mb-3">
                    <label for="titleСomponent" class="form-label">Назвавние компонента</label>
                    <input type="text" class="form-control" id="titleСomponent">
                </div>
                <div class="mb-3">
                    <label for="configСomponent" class="form-label">Характеристики компонента</label>
                    <input type="text" class="form-control" id="configСomponent">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Фотография компонента</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="sale" class="form-label">Цена</label>
                    <input type="number" class="form-control" id="sale">
                </div>
                <button type="submit" class="btn btn-outline-primary">Добавление</button>
            </form>
        </div>
    </div>
    </div>

</body>

</html>
