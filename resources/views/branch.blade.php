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
    <div class="container branch-title">
        <x-header></x-header>
        <h1>{{$branch->title_post}}</h1>
        <div class="title-branch">
            <div class="forum-post">
                <div class="forum-block-info">
                    <div class="block-info text-branch">
                        <div class="profile-user">
                            <img src="/images/Group 29.svg" alt="Group 29.svg">
                            <div class="profile-text">
                                <h3>{{$branch->user->login}}</h3>
                                <p>Автор поста</p>
                                <span>10 минут назад</span>
                            </div>
                        </div>
                        <p>{{$branch->description}}</p>
                        <div class="footer-forum">
                            <div class="links-forum">
                                <a href="#">
                                    <p><img src="/images/Rectangle 1.svg" alt="Rectangle 1.svg">Избранное</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons-forum" style="margin-left:10px; text-align:center">
                    <button class="like"><img src="/images/Vector 9 (1).svg" alt="up">
                        <p>{{$branch->likes}}</p>
                    </button>
                    <br>
                    <button class="btn diss-like"><img src="/images/Group 23.svg" alt="down"></button>
                </div>

            </div>

        </div>
        <div class="config-branch" style="text-align: center">
            <h2>Конфигурация компьютера</h2>
            @foreach ($branch->components as $components)
            <div class="config-component">
                <div class="image-config-component"><img src="/storage/imgComponents/{{$components->image_components}}"
                        alt="{{$components->image_component}}"></div>
                <div class="text-branch-component">
                    <h3>{{$components->title_component}}</h3>
                    <span>[{{$components->config_component}}]</span>
                    <p>{{$components->sale}}₽</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="comment">
            <h3>Комментарии</h3>
            <input class="form-control form-control-lg" type="text" placeholder="напишите комментарий"
                style="width: 93%" aria-label=".form-control-lg example">

            <div class="comment-list">
                <hr>
                <div class="comment-user">
                    <div class="comment-img">
                        <img src="/images/Group 31.svg" alt="Group 31.svg">
                        <div class="comment-img-name">
                            <h2>Asdf1</h2>
                            <span>2 минуты назад</span>
                        </div>
                    </div>
                    <div class="message">
                        <p>Смотрите характеристики и спеки, там все написано.</p>
                    </div>
                    <div class="footer-message">
                        <button class="btn btn-like"><img src="/images/Group 32.svg" alt="Group 32.svg"></button>
                        <span>0</span>
                        <button class="btn btn-disslike"><img src="/images/Group 33.svg" alt="Group 33.svg"></button>
                    </div>
                </div>
                <hr>
                <div class="comment-user">
                    <div class="comment-img">
                        <img src="/images/Group 31.svg" alt="Group 31.svg">
                        <div class="comment-img-name">
                            <h2>Asdf1</h2>
                            <span>2 минуты назад</span>
                        </div>
                    </div>
                    <div class="message">
                        <p>Смотрите характеристики и спеки, там все написано.</p>
                    </div>
                    <div class="footer-message">
                        <button class="btn btn-like"><img src="/images/Group 32.svg" alt="Group 32.svg"></button>
                        <span>0</span>
                        <button class="btn btn-disslike"><img src="/images/Group 33.svg" alt="Group 33.svg"></button>
                    </div>
                </div>
                <hr>
                <div class="comment-user">
                    <div class="comment-img">
                        <img src="/images/Group 31.svg" alt="Group 31.svg">
                        <div class="comment-img-name">
                            <h2>Asdf1</h2>
                            <span>2 минуты назад</span>
                        </div>
                    </div>
                    <div class="message">
                        <p>Смотрите характеристики и спеки, там все написано.</p>
                    </div>
                    <div class="footer-message">
                        <button class="btn btn-like"><img src="/images/Group 32.svg" alt="Group 32.svg"></button>
                        <span>0</span>
                        <button class="btn btn-disslike"><img src="/images/Group 33.svg" alt="Group 33.svg"></button>
                    </div>
                </div>
                <hr>
                <div class="comment-user">
                    <div class="comment-img">
                        <img src="/images/Group 31.svg" alt="Group 31.svg">
                        <div class="comment-img-name">
                            <h2>Asdf1</h2>
                            <span>2 минуты назад</span>
                        </div>
                    </div>
                    <div class="message">
                        <p>Смотрите характеристики и спеки, там все написано.</p>
                    </div>
                    <div class="footer-message">
                        <button class="btn btn-like"><img src="/images/Group 32.svg" alt="Group 32.svg"></button>
                        <span>0</span>
                        <button class="btn btn-disslike"><img src="/images/Group 33.svg" alt="Group 33.svg"></button>
                    </div>
                </div>
                <hr>
                <div class="comment-user">
                    <div class="comment-img">
                        <img src="/images/Group 31.svg" alt="Group 31.svg">
                        <div class="comment-img-name">
                            <h2>Asdf1</h2>
                            <span>2 минуты назад</span>
                        </div>
                    </div>
                    <div class="message">
                        <p>Смотрите характеристики и спеки, там все написано.</p>
                    </div>
                    <div class="footer-message">
                        <button class="btn btn-like"><img src="/images/Group 32.svg" alt="Group 32.svg"></button>
                        <span>0</span>
                        <button class="btn btn-disslike"><img src="/images/Group 33.svg" alt="Group 33.svg"></button>
                    </div>
                </div>
                <hr>
                <div class="comment-user">
                    <div class="comment-img">
                        <img src="/images/Group 31.svg" alt="Group 31.svg">
                        <div class="comment-img-name">
                            <h2>Asdf1</h2>
                            <span>2 минуты назад</span>
                        </div>
                    </div>
                    <div class="message">
                        <p>Смотрите характеристики и спеки, там все написано.</p>
                    </div>
                    <div class="footer-message">
                        <button class="btn btn-like"><img src="/images/Group 32.svg" alt="Group 32.svg"></button>
                        <span>0</span>
                        <button class="btn btn-disslike"><img src="/images/Group 33.svg" alt="Group 33.svg"></button>
                    </div>
                </div>
                <hr>
                <div class="comment-user">
                    <div class="comment-img">
                        <img src="/images/Group 31.svg" alt="Group 31.svg">
                        <div class="comment-img-name">
                            <h2>Asdf1</h2>
                            <span>2 минуты назад</span>
                        </div>
                    </div>
                    <div class="message">
                        <p>Смотрите характеристики и спеки, там все написано.</p>
                    </div>
                    <div class="footer-message">
                        <button class="btn btn-like"><img src="/images/Group 32.svg" alt="Group 32.svg"></button>
                        <span>0</span>
                        <button class="btn btn-disslike"><img src="/images/Group 33.svg" alt="Group 33.svg"></button>
                    </div>
                </div>
                <hr>
                <div class="comment-user">
                    <div class="comment-img">
                        <img src="/images/Group 31.svg" alt="Group 31.svg">
                        <div class="comment-img-name">
                            <h2>Asdf1</h2>
                            <span>2 минуты назад</span>
                        </div>
                    </div>
                    <div class="message">
                        <p>Смотрите характеристики и спеки, там все написано.</p>
                    </div>
                    <div class="footer-message">
                        <button class="btn btn-like"><img src="/images/Group 32.svg" alt="Group 32.svg"></button>
                        <span>0</span>
                        <button class="btn btn-disslike"><img src="/images/Group 33.svg" alt="Group 33.svg"></button>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
<x-sign-in></x-sign-in>
<x-sign-up></x-sign-up>

</html>
