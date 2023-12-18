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
        <main class="d-flex row">
            <div class="main-text col">
                <h1>PcGeek</h1>
                <h3>Компьютерный форум</h3>
            </div>
            <img class="col" src="/images/125bc2846415e8d1db2e928a68b325f9.png"
                alt="125bc2846415e8d1db2e928a68b325f9.png">
        </main>
        {{-- <div class="all-config row">
            <h1>Готовые сборки</h1>
            <div class="configs" style="margin: 40px 0">
                <div class="d-flex justify-content-center row" style="gap: 40px; flex-wrap: wrap; align-items: center">
                    <div class="card col-3" style="width: 16rem;">
                        <img src="/images/f8cd288b4ff935d48ea60b5fa0fb2933.png" class="card-img-top"
                            alt="f8cd288b4ff935d48ea60b5fa0fb2933.png">
                        <div class="card-body">
                            <h1>lUMEN PRO</h1>
                            <p>автор: Danya253</p>
                            <h4>Intel core i5/i7</h4>
                            <h4>NVIDIA RTX 3060</h4>
                            <h4>32gb DDR4 ОЗУ</h4>
                            <a href="#" style="margin-top: 10px"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="30" height="30" viewBox="0 0 21 21" fill="none">
                                    <circle cx="10.6244" cy="10.9263" r="7.52765" stroke="black" stroke-width="2" />
                                    <path
                                        d="M11.0426 7.16247C11.0426 7.39343 10.8553 7.58067 10.6244 7.58067C10.3934 7.58067 10.2062 7.39343 10.2062 7.16247C10.2062 6.9315 10.3934 6.74426 10.6244 6.74426C10.8553 6.74426 11.0426 6.9315 11.0426 7.16247Z"
                                        fill="black" stroke="black" />
                                    <path d="M10.6244 15.1083V9.25348" stroke="black" stroke-width="2" />
                                </svg></a>
                        </div>
                    </div>
                    <div class="card col-3" style="width: 16rem;">
                        <img src="/images/f8cd288b4ff935d48ea60b5fa0fb2933.png" class="card-img-top"
                            alt="f8cd288b4ff935d48ea60b5fa0fb2933.png">
                        <div class="card-body">
                            <h1>lUMEN PRO</h1>
                            <p>автор: Danya253</p>
                            <h4>Intel core i5/i7</h4>
                            <h4>NVIDIA RTX 3060</h4>
                            <h4>32gb DDR4 ОЗУ</h4>
                            <a href="#" style="margin-top: 10px"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="30" height="30" viewBox="0 0 21 21" fill="none">
                                    <circle cx="10.6244" cy="10.9263" r="7.52765" stroke="black" stroke-width="2" />
                                    <path
                                        d="M11.0426 7.16247C11.0426 7.39343 10.8553 7.58067 10.6244 7.58067C10.3934 7.58067 10.2062 7.39343 10.2062 7.16247C10.2062 6.9315 10.3934 6.74426 10.6244 6.74426C10.8553 6.74426 11.0426 6.9315 11.0426 7.16247Z"
                                        fill="black" stroke="black" />
                                    <path d="M10.6244 15.1083V9.25348" stroke="black" stroke-width="2" />
                                </svg></a>
                        </div>
                    </div>
                    <div class="card col-3" style="width: 16rem;">
                        <img src="/images/f8cd288b4ff935d48ea60b5fa0fb2933.png" class="card-img-top"
                            alt="f8cd288b4ff935d48ea60b5fa0fb2933.png">
                        <div class="card-body">
                            <h1>lUMEN PRO</h1>
                            <p>автор: Danya253</p>
                            <h4>Intel core i5/i7</h4>
                            <h4>NVIDIA RTX 3060</h4>
                            <h4>32gb DDR4 ОЗУ</h4>
                            <a href="#" style="margin-top: 10px"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="30" height="30" viewBox="0 0 21 21" fill="none">
                                    <circle cx="10.6244" cy="10.9263" r="7.52765" stroke="black" stroke-width="2" />
                                    <path
                                        d="M11.0426 7.16247C11.0426 7.39343 10.8553 7.58067 10.6244 7.58067C10.3934 7.58067 10.2062 7.39343 10.2062 7.16247C10.2062 6.9315 10.3934 6.74426 10.6244 6.74426C10.8553 6.74426 11.0426 6.9315 11.0426 7.16247Z"
                                        fill="black" stroke="black" />
                                    <path d="M10.6244 15.1083V9.25348" stroke="black" stroke-width="2" />
                                </svg></a>
                        </div>
                    </div>
                    <div class="card col-3" style="width: 16rem;">
                        <img src="/images/f8cd288b4ff935d48ea60b5fa0fb2933.png" class="card-img-top"
                            alt="f8cd288b4ff935d48ea60b5fa0fb2933.png">
                        <div class="card-body">
                            <h1>lUMEN PRO</h1>
                            <p>автор: Danya253</p>
                            <h4>Intel core i5/i7</h4>
                            <h4>NVIDIA RTX 3060</h4>
                            <h4>32gb DDR4 ОЗУ</h4>
                            <a href="#" style="margin-top: 10px"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="30" height="30" viewBox="0 0 21 21" fill="none">
                                    <circle cx="10.6244" cy="10.9263" r="7.52765" stroke="black"
                                        stroke-width="2" />
                                    <path
                                        d="M11.0426 7.16247C11.0426 7.39343 10.8553 7.58067 10.6244 7.58067C10.3934 7.58067 10.2062 7.39343 10.2062 7.16247C10.2062 6.9315 10.3934 6.74426 10.6244 6.74426C10.8553 6.74426 11.0426 6.9315 11.0426 7.16247Z"
                                        fill="black" stroke="black" />
                                    <path d="M10.6244 15.1083V9.25348" stroke="black" stroke-width="2" />
                                </svg></a>
                        </div>
                    </div>
                    <div class="card col-3" style="width: 16rem;">
                        <img src="/images/f8cd288b4ff935d48ea60b5fa0fb2933.png" class="card-img-top"
                            alt="f8cd288b4ff935d48ea60b5fa0fb2933.png">
                        <div class="card-body">
                            <h1>lUMEN PRO</h1>
                            <p>автор: Danya253</p>
                            <h4>Intel core i5/i7</h4>
                            <h4>NVIDIA RTX 3060</h4>
                            <h4>32gb DDR4 ОЗУ</h4>
                            <a href="#" style="margin-top: 10px"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="30" height="30" viewBox="0 0 21 21" fill="none">
                                    <circle cx="10.6244" cy="10.9263" r="7.52765" stroke="black"
                                        stroke-width="2" />
                                    <path
                                        d="M11.0426 7.16247C11.0426 7.39343 10.8553 7.58067 10.6244 7.58067C10.3934 7.58067 10.2062 7.39343 10.2062 7.16247C10.2062 6.9315 10.3934 6.74426 10.6244 6.74426C10.8553 6.74426 11.0426 6.9315 11.0426 7.16247Z"
                                        fill="black" stroke="black" />
                                    <path d="M10.6244 15.1083V9.25348" stroke="black" stroke-width="2" />
                                </svg></a>
                        </div>
                    </div>
                    <div class="card col-3" style="width: 16rem;">
                        <img src="/images/f8cd288b4ff935d48ea60b5fa0fb2933.png" class="card-img-top"
                            alt="f8cd288b4ff935d48ea60b5fa0fb2933.png">
                        <div class="card-body">
                            <h1>lUMEN PRO</h1>
                            <p>автор: Danya253</p>
                            <h4>Intel core i5/i7</h4>
                            <h4>NVIDIA RTX 3060</h4>
                            <h4>32gb DDR4 ОЗУ</h4>
                            <a href="#" style="margin-top: 10px"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="30" height="30" viewBox="0 0 21 21" fill="none">
                                    <circle cx="10.6244" cy="10.9263" r="7.52765" stroke="black"
                                        stroke-width="2" />
                                    <path
                                        d="M11.0426 7.16247C11.0426 7.39343 10.8553 7.58067 10.6244 7.58067C10.3934 7.58067 10.2062 7.39343 10.2062 7.16247C10.2062 6.9315 10.3934 6.74426 10.6244 6.74426C10.8553 6.74426 11.0426 6.9315 11.0426 7.16247Z"
                                        fill="black" stroke="black" />
                                    <path d="M10.6244 15.1083V9.25348" stroke="black" stroke-width="2" />
                                </svg></a>
                        </div>
                    </div>
                    <div class="card col-3" style="width: 16rem;">
                        <img src="/images/f8cd288b4ff935d48ea60b5fa0fb2933.png" class="card-img-top"
                            alt="f8cd288b4ff935d48ea60b5fa0fb2933.png">
                        <div class="card-body">
                            <h1>lUMEN PRO</h1>
                            <p>автор: Danya253</p>
                            <h4>Intel core i5/i7</h4>
                            <h4>NVIDIA RTX 3060</h4>
                            <h4>32gb DDR4 ОЗУ</h4>
                            <a href="#" style="margin-top: 10px"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="30" height="30" viewBox="0 0 21 21" fill="none">
                                    <circle cx="10.6244" cy="10.9263" r="7.52765" stroke="black"
                                        stroke-width="2" />
                                    <path
                                        d="M11.0426 7.16247C11.0426 7.39343 10.8553 7.58067 10.6244 7.58067C10.3934 7.58067 10.2062 7.39343 10.2062 7.16247C10.2062 6.9315 10.3934 6.74426 10.6244 6.74426C10.8553 6.74426 11.0426 6.9315 11.0426 7.16247Z"
                                        fill="black" stroke="black" />
                                    <path d="M10.6244 15.1083V9.25348" stroke="black" stroke-width="2" />
                                </svg></a>
                        </div>
                    </div>
                    <div class="card col-3" style="width: 16rem;">
                        <img src="/images/f8cd288b4ff935d48ea60b5fa0fb2933.png" class="card-img-top"
                            alt="f8cd288b4ff935d48ea60b5fa0fb2933.png">
                        <div class="card-body">
                            <h1>lUMEN PRO</h1>
                            <p>автор: Danya253</p>
                            <h4>Intel core i5/i7</h4>
                            <h4>NVIDIA RTX 3060</h4>
                            <h4>32gb DDR4 ОЗУ</h4>
                            <a href="#" style="margin-top: 10px"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="30" height="30" viewBox="0 0 21 21" fill="none">
                                    <circle cx="10.6244" cy="10.9263" r="7.52765" stroke="black"
                                        stroke-width="2" />
                                    <path
                                        d="M11.0426 7.16247C11.0426 7.39343 10.8553 7.58067 10.6244 7.58067C10.3934 7.58067 10.2062 7.39343 10.2062 7.16247C10.2062 6.9315 10.3934 6.74426 10.6244 6.74426C10.8553 6.74426 11.0426 6.9315 11.0426 7.16247Z"
                                        fill="black" stroke="black" />
                                    <path d="M10.6244 15.1083V9.25348" stroke="black" stroke-width="2" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
        <div class="forum">
            <h1>Популярные треды</h1>
            <div class="forum-block">
                @foreach ($index_posts as $post)
                    <a href="/forum">
                        <div class="card forum-list">
                            <div class="forum-card">
                                @foreach ($post->tags as $tag)
                                    <span class="badge rounded-pill"
                                        style="background-color: black; color:#fff;">{{ $tag->title_tag }}</span>
                                @endforeach
                                <h3>{{ $post->title_post }}</h3>
                                <p class="short-text">{{ $post->description }}</p>
                                <span>автор: {{ $post->user->login }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
            <a style="text-decoration: none;" class="more" href="/forum">
                <h2>Ещё <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" viewBox="0 0 30 18"
                        fill="none">
                        <path d="M28 2L15 15L2 2" stroke="white" stroke-width="3" />
                    </svg></h2>
            </a>
        </div>
        <div class="your-pc">
            <h1>Теги</h1>
            <div class="genres-block" style="margin-top: 30px;">
                @foreach ($tags as $tag_name)
                    <div class="genres-card-index">
                        <a href="#" >
                            <span>{{ $tag_name->title_tag }}</span>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    {{-- <div class="your-pc">
            <h1>Собери свой компьютер</h1>
            <div class="your-photo black" style="margin: 40px 0">
                <div class="text-photo">
                    <h3>На нашем сайте вы можете собрать свой компьютер и поделиться своей сборкой с пользователями
                    </h3>
                </div>
                <a href="/config" type="button" class="btn btn-cust">Попробовать</a>
            </div>
        </div> --}}
    </div>
    <x-footer></x-footer>
</body>
<x-sign-in></x-sign-in>
<x-sign-up></x-sign-up>

</html>
