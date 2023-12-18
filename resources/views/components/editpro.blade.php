<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5 ">
                <h1>Редактировать</h1>
                <form action="/editProfile/{{Auth::user()->id}}" method="POST">
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
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-cost" type="submit">Редактировать</button>
                </form>
            </div>
        </div>
    </div>
</div>
