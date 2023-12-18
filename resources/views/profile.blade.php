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
    <div class="container">
        <x-header></x-header>
        @php
            $date = Auth::user()->created_at;
            $newdate = date('d.m.Y', strtotime($date));
        @endphp
        <div class="profile-block">
            <img src="/images/profile.svg" alt="profile.svg">
            <h2 style="margin-top: 10px">{{ Auth::user()->login }}</h2>
            <span>на сайте с {{ $newdate }}</span>
            <br>
            <a href="#" class="btn" style="color: white" role="button" data-bs-target="#edit" data-bs-toggle="modal">Редактировать</a>
            
            <div class="user-posts">
                <h1 style="margin-bottom: 20px">Посты</h1>
                @forelse ($user_posts as $post)
                    <div class="user-block-post">
                        <a href="/branch/{{ $post->id }}">
                            <div class="text-user-post">
                                <span>
                                    @foreach ($post->tags as $tag)
                                        <span class="badge rounded-pill"
                                            style="background-color: black; color:#fff;">{{ $tag->title_tag }}</span>
                                    @endforeach
                                </span>
                                <div class="in">
                                    <h3 class="mt-2">{{ $post->title_post }}</h3>
                                    <p class="short-text">{{ $post->description }}</p>
                                </div>
                            </div>
                            <div class="edit-delete">
                                <form action="/deleteBranch/{{ $post->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn  buttons-profile p-2" type="submit"> <img
                                            src="/images/Group 39.svg" alt="Group 39.svg"></button>

                                </form>
                                <div class="btn buttons-profile p-2"><a type="button"
                                        href="/editPost/{{ $post->id }}"><img src="/images/edit.svg"
                                            alt="edit.svg"></a>
                                </div>
                            </div>

                        </a>
                    </div>
                @empty
                    <div class="empty">
                        <h1>Пусто...</h1>
                    </div>
                @endforelse
            </div>

            <div class="favorite-post">
                <h1 style="margin-bottom: 20px">Избранное</h1>
                @forelse ($user_favorite as $favorite)
                    <div class="user-block-post">
                        <a href="/branch/{{ $favorite->post->id }}">
                            <div class="text-user-post">
                                <span>
                                    @foreach ($favorite->post->tags as $tag)
                                        <span class="badge rounded-pill"
                                            style="background-color: black; color:#fff;">{{ $tag->title_tag }}</span>
                                    @endforeach
                                </span>
                                <div class="in">
                                    <h3 class="mt-2">{{ $favorite->post->title_post }}</h3>
                                    <p>{{ $favorite->post->description }}</p>
                                </div>

                            </div>
                            <div class="buttons-profile"><a type="button"
                                    href="/removeFavorite/{{ $favorite->post->id }}"><img src="/images/mark.svg"
                                        alt="mark.svg"></a>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="empty">
                        <h1>Пусто...</h1>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
<x-editpro></x-editpro>

</html>
