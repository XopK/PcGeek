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
                    <a href="/addPost" class="btn btn-cust">+ Добавить пост</a>
                </div>
                @foreach ($posts as $post)
                    @php
                        $date = $post->created_at;
                        $newdate = date('d.m.Y', strtotime($date));
                    @endphp
                    <div class="forum-post">
                        <div class="forum-block-info">
                            <div class="block-info">
                                @foreach ($post->tags as $tag)
                                    <span class="badge rounded-pill"
                                        style="background-color: black; color:#fff;">{{ $tag->title_tag }}</span>
                                @endforeach
                                <h1>{{ $post->title_post }}</h1>
                                <p class="short-text">{{ $post->description }}</p>
                                <span>Автор: {{ $post->user->login }}</span>
                                <div class="footer-forum">
                                    <div class="links-forum">
                                        <a href="/branch">
                                            <p><img src="/images/Group 21.svg" alt="Group.svg">Ответить</p>
                                        </a>
                                        <a href="#">
                                            <p><img src="/images/Rectangle 1.svg" alt="Rectangle 1.svg">Избранное</p>
                                        </a>
                                    </div>
                                    <span>{{ $newdate }}</span>
                                </div>
                            </div>
                            @foreach ($post->components as $component)
                            <div class="forum-image"><img src="/images/{{$component->image_components}}"
                                    alt="{{$component->image_components}}">
                            </div>
                            @break
                            @endforeach
                        </div>
                        <div class="buttons-forum" style="margin-left:10px; text-align:center">
                            <button class="like"><img src="/images/Vector 9 (1).svg" alt="up">
                                <p>{{ $post->likes }}</p>
                            </button>
                            <br>
                            <button class="btn diss-like"><img src="/images/Group 23.svg" alt="down"></button>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
