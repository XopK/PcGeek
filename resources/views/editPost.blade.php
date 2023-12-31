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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <title>PcGeek</title>
</head>

<body>
    <div class="container branch-title" style="text-align: center">
        <x-header></x-header>
        <h1>Редактирование поста</h1>
        <div class="addPosts" style="margin-top: 30px">
            <form action="/update/{{ $edit->id }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-floating mb-3">
                    <input type="text" name="title_post" value="{{ $edit->title_post }}"
                        class="form-control rounded-3" id="floatingInput">
                    <label for="floatingInput">Название поста</label>
                    @error('title_post')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                
                <div class="form-floating mb-3">
                    <textarea name="description" style="height: 200px" class="form-control rounded-3" id="floatingInput" rows="5">{{ $edit->description }}</textarea>
                    <label for="floatingInput">Текст поста</label>
                    @error('description')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="tags-div d-flex mb-3">
                    @foreach ($edit->tags as $tag)
                        <span class="badge d-flex align-items-center rounded-pill"
                            style="background-color: black; color:#fff;">{{ $tag->title_tag }}<a href="/editPost/deleteTag/{{$tag->id}}?param={{$edit->id}}"><span style="width: 20px; color:#fff" class="material-symbols-outlined">
                                close
                                </span></a></span>
                    @endforeach
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="tags" class="form-control rounded-3" id="floatingPassword">
                    <label for="floatingPassword">Теги (вводите через запятую и без пробелов)</label>
                    @error('tags')
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
            @if (session('succes'))
                <div class="alert alert-success alert-dismissible mt-3">
                    <div class="alert-text">
                        {{ session('succes') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            @else
            @endif
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
