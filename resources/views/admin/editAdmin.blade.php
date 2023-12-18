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
            <h1>Редактировать</h1>
                <form action="/editProfileAdmin/{{Auth::user()->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-floating mb-3">
                        <input type="text" name="login" value="{{Auth::user()->login}}" class="form-control rounded-3" id="floatingInput">
                        <label for="floatingInput">Логин</label>
                        @error('login')
                            <div class="alert alert-danger alert-dismissible">
                                <div class="alert-text">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @enderror

                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control rounded-3" id="floatingInput">
                        <label for="floatingInput">Почта</label>
                        @error('email')
                            <div class="alert alert-danger alert-dismissible">
                                <div class="alert-text">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control rounded-3" id="floatingPassword">
                        <label for="floatingPassword">Пароль</label>
                        @error('password')
                            <div class="alert alert-danger alert-dismissible">
                                <div class="alert-text">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="confirm_password" class="form-control rounded-3"
                            id="floatingPassword">
                        <label for="floatingPassword">Подтвердите пароль</label>
                        @error('confirm_password')
                            <div class="alert alert-danger alert-dismissible">
                                <div class="alert-text">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 mb-2 btn btn-primary btn-lg rounded-3 btn-cost" type="submit">Редактировать</button>
                </form>
        </div>
    </div>
    </div>

</body>


</html>
