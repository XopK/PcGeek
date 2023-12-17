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
        <h1>{{ $branch->title_post }}</h1>
        <div class="title-branch">
            <div class="forum-post">
                <div class="forum-block-info">
                    <div class="block-info text-branch">
                        <div class="profile-user">
                            <img src="/images/Group 29.svg" alt="Group 29.svg">
                            <div class="profile-text">
                                <h3>{{ $branch->user->login }}</h3>
                                <p>Автор поста</p>
                                @php
                                    $diff_post = $branch->created_at->diffForHumans();
                                    $idBranch = null;
                                    $currentUserFavorites = [];
                                    if (Auth::user()) {
                                        $idBranch = $branch->id;
                                        $currentUserFavorites = Auth::user()
                                            ->favorites->pluck('id_post')
                                            ->toArray();
                                    }

                                @endphp
                                <span>{{ $diff_post }}</span>
                            </div>
                        </div>
                        <p>{{ $branch->description }}</p>
                        <div class="footer-forum">
                            <div class="links-forum">
                                @if (in_array($idBranch, $currentUserFavorites))
                                    <a href="/removeFavorite/{{ $branch->id }}">
                                        <p><img src="/images/mark.svg" alt="mark.svg">В избранном</p>
                                    </a>
                                @else
                                    <a href="/favorite/{{ $branch->id }}">
                                        <p><img src="/images/Rectangle 1.svg" alt="Rectangle 1.svg">Избранное</p>
                                    </a>
                                @endif
                            </div>
                        </div>
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible mt-3">
                                <div class="alert-text">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @else
                        @endif
                    </div>
                </div>

                <div class="buttons-forum" style="margin-left:10px; text-align:center">
                    <a href="/like/{{ $branch->id }}" class="btn like"><img src="/images/Vector 9 (1).svg"
                            alt="up">
                        <span>{{ $branch->likesCount() }}</span>
                    </a>
                    <br>
                    <a href="/disslike/{{ $branch->id }}" class="btn diss-like"><img src="/images/Group 23.svg"
                            alt="down"></a>
                </div>

            </div>

        </div>
        <div class="config-branch" style="text-align: center">
            <h2>Конфигурация</h2>
            @foreach ($branch->components as $components)
                <div class="config-component ">
                    <div class="image-config-component"><img
                            src="/storage/imgComponents/{{ $components->image_components }}"
                            alt="{{ $components->image_component }}"></div>
                    <div class="text-branch-component">
                        <h3>{{ $components->title_component }}</h3>
                        <span>[{{ $components->config_component }}]</span>
                        <p>{{ $components->sale }}₽</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div id="comm" class="comment">
            <h3>Комментарии</h3>
            <form action="/branch/comment/{{ $branch->id }}" class="d-flex" method="POST">
                @csrf
                <input class="form-control form-control-lg" name="comment" type="text"
                    placeholder="напишите комментарий" style="width: 85%" aria-label=".form-control-lg example">
                <button type="submit" class="btn btn-primary mx-2">Отправить</button>
            </form>
            @if (session('errorLike'))
                <div class="alert alert-danger alert-dismissible mt-3" style="width: 94%">
                    <div class="alert-text">
                        {{ session('errorLike') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            @else
            @endif
            <div class="comment-list">
                @forelse ($comments as $comment)
                    @php
                        $diff = $comment->created_at->diffForHumans();
                    @endphp
                    <hr>
                    <div class="comment-user">
                        <div class="comment-img">
                            <img src="/images/Group 31.svg" alt="Group 31.svg">
                            <div class="comment-img-name">
                                <h2>{{ $comment->users->login }}</h2>
                                @if ($comment->users->id == $branch->user->id)
                                    <p class="m-0" style="font-size: 14px">Автор поста</p>
                                @endif
                                <span>{{ $diff }}</span>
                            </div>
                        </div>
                        <div class="message">
                            <p>{{ $comment->comment }}</p>
                        </div>
                        <div class="footer-message">
                            <a href="/likeComment/{{ $comment->id }}" class="btn btn-like"><img
                                    src="/images/Group 32.svg" alt="Group 32.svg"></a>
                            <span>{{ $comment->likesCommCount() }}</span>
                            <a href="/disslikeComment/{{ $comment->id }}" class="btn btn-disslike"><img
                                    src="/images/Group 33.svg" alt="Group 33.svg"></a>
                        </div>
                    </div>
                @empty
                    <hr>
                    <div class="comment-user">
                        <h1 style="color: white; text-align:center">Будьте первым!</h1>
                        <h5 style="color: white; text-align:center">оставьте комментарий</h5>
                    </div>
                    <hr>
                @endforelse
            </div>
        </div>

    </div>
    <x-footer></x-footer>
</body>
<x-sign-in></x-sign-in>
<x-sign-up></x-sign-up>

</html>
