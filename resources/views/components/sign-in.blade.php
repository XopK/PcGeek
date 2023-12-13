<div class="modal fade" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5 ">
                <h1>Авторизация</h1>
                <form action="/signIn" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="login_log" class="form-control rounded-3" id="floatingInput">
                        <label for="floatingInput">Логин</label>
                        @error('login_log')
                            <div class="alert alert-danger alert-dismissible">
                                <div class="alert-text">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password_log" class="form-control rounded-3" id="floatingPassword">
                        <label for="floatingPassword">Пароль</label>
                        @error('password_log')
                            <div class="alert alert-danger alert-dismissible">
                                <div class="alert-text">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-cost" type="submit">Войти</button>
                    @if (session('error'))
                        <div class="alert alert-danger " role="alert">
                            {{ session('error') }}
                        </div>
                    @else
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
