<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Component;
use App\Models\ComponentPost;
use App\Models\Favorite;
use App\Models\LikeBranch;
use App\Models\LikeComment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\tagPost;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $index_posts = Post::with('user', 'tags')->limit(3)->get();
        $tags = Tag::limit(6)->get();
        return view('index', ['index_posts' => $index_posts, 'tags' => $tags]);
    }

    public function show()
    {
        $component = Component::all();
        return view('addPost', ['components' => $component]);
        // dd($component);
    }

    public function addPost(Request $request)
    {
        $request->validate([
            'title_post' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'component' => 'required',
        ], [
            "title_post.required" => "Поле обязательно для заполнения!",
            "description.required" => "Поле обязательно для заполнения!",
            "tags.required" => "Поле обязательно для заполнения!",
            "component.required" => "Поле обязательно для заполнения!",
        ]);

        $post_data = $request->all();
        $id_user = Auth::user()->id;
        $tags = explode(',', $post_data['tags']);

        $post = Post::create([
            'title_post' => $post_data['title_post'],
            'description' => $post_data['description'],
            'id_user' => $id_user,
        ]);
        foreach ($post_data['component'] as $components) {
            ComponentPost::create([
                'id_post' => $post->id,
                'id_component' => $components,
            ]);
        }
        foreach ($tags as $tag) {
            $exitTags = Tag::where('title_tag', $tag)->first();

            if (!$exitTags) {
                $newTag = Tag::create([
                    'title_tag' => $tag
                ]);

                $tagId = $newTag->id;
                $postId = $post->id;

                tagPost::create([
                    'id_tag' => $tagId,
                    'id_post' => $postId,
                ]);
            } else {
                $tagId = $exitTags->id;
                $postId = $post->id;

                $existingTagPost = TagPost::where('id_tag', $tagId)->where('id_post', $postId)->first();

                if (!$existingTagPost) {
                    TagPost::create([
                        'id_tag' => $tagId,
                        'id_post' => $postId,
                    ]);
                }
            }
        }
        return redirect('/forum')->with('succes', 'Запись создана!');
    }

    public function showForum()
    {
        $all_posts = Post::with(['user', 'tags', 'components'])->latest()->paginate(10);

        return view('forum', ['posts' => $all_posts]);
    }

    public function SortForum($sort)
    {
        if ($sort == 1) {
            $all_posts = Post::with(['user', 'tags', 'components'])->orderBy('title_post', 'asc')->paginate(10);
        } elseif ($sort == 2) {
            $all_posts = Post::with(['user', 'tags', 'components'])->withCount('likes')->orderBy('likes_count', 'desc')->paginate(10);
        } else {
            // Обработка других случаев, если необходимо
            // Например, сортировка по умолчанию или обработка некорректных значений $sort
        }

        return view('forum', ['posts' => $all_posts]);
    }

    public function branchShow($id)
    {
        $data = Post::with('components', 'user', 'favorites')->where('id', $id)->get()->first();
        $comment = Comment::with('users')->where('id_post', $id)->get();

        return view('branch', ['branch' => $data, 'comments' => $comment]);
    }

    public function addComment(Request $request, $branch)
    {
        $comment = $request->all();
        $id_user = Auth::user()->id;

        $addComent = Comment::create([
            'comment' => $comment['comment'],
            'id_user' => $id_user,
            'id_post' => $branch,
        ]);
        return redirect()->back()->with('succes', 'Комментарий оставлен');
    }

    public function likePost($like)
    {
        $user = Auth::user();
        $existingLike = LikeBranch::where('id_user', $user->id)
            ->where('id_post', $like)
            ->first();

        if ($existingLike) {
            return redirect()->back()->with('error', 'Вы не можете поставить лайк!');
        } else {
            LikeBranch::create([
                'id_user' => $user->id,
                'id_post' => $like,
            ]);
            return redirect()->back()->with('succes', 'Лайк поставлен!');
        }
    }

    public function disslikePost($disslike)
    {
        $user = Auth::user();
        $existingDiss = LikeBranch::where('id_user', $user->id)
            ->where('id_post', $disslike)
            ->first();

        if ($existingDiss) {
            $existingDiss->delete();
            return redirect()->back()->with('succes', 'Лайк убран!');
        } else {
            return redirect()->back()->with('error', 'Вы не можете поставить лайк!');
        }
    }

    public function likeComment($like)
    {
        $user = Auth::user();
        $existingLike = LikeComment::where('id_user', $user->id)
            ->where('id_comment', $like)
            ->first();

        if ($existingLike) {
            return redirect()->back()->with('error', 'Вы не можете поставить лайк!');
        } else {
            LikeComment::create([
                'id_user' => $user->id,
                'id_comment' => $like,
            ]);
            return redirect()->back()->with('succes', 'Лайк поставлен!');
        }
    }

    public function disslikeComment($disslike)
    {
        $user = Auth::user();
        $existingDiss = LikeComment::where('id_user', $user->id)
            ->where('id_comment', $disslike)
            ->first();

        if ($existingDiss) {
            $existingDiss->delete();
            return redirect()->back()->with('succes', 'Лайк убран!');
        } else {
            return redirect()->back()->with('errorLike', 'Вы не можете поставить лайк!');
        }
    }

    public function FavoriteAdd($favorite)
    {
        $user = Auth::user();

        $existingFavorite = Favorite::where('id_user', $user->id)
            ->where('id_post', $favorite)
            ->first();

        if ($existingFavorite) {
            return redirect()->back()->with('error', 'Вы уже добавили пост в избранное!');
        } else {
            Favorite::create([
                'id_user' => $user->id,
                'id_post' => $favorite,
            ]);
            return redirect()->back()->with('succes', 'Добавлено в избранное!');
        }
    }

    public function FavoriteRemove($favorite)
    {
        $user = Auth::user();
        $existingRemove = Favorite::where('id_user', $user->id)
            ->where('id_post', $favorite)
            ->first();

        if ($existingRemove) {
            $existingRemove->delete();
            return redirect()->back()->with('succes', 'Убранно из избранного!');
        } else {
            return redirect()->back()->with('errorLike', 'Вы не можете добавить в избранное!');
        }
    }

    public function deleteBranch(Post $delete)
    {
        $delete->delete();

        return redirect()->back()->with('succes', 'Пост удален!');
    }

    public function editPost($edit)
    {
        $edit = Post::where('id', $edit)->with('tags')->get()->first();

        return view('editPost', ['edit' => $edit]);
    }

    public function updatePost(Request $request, Post $update)
    {
        $request->validate([
            'title_post' => 'required',
            'description' => 'required',
        ], [
            "title_post.required" => "Поле обязательно для заполнения!",
            "description.required" => "Поле обязательно для заполнения!",
        ]);

        $update_post = $request->all();

        if ($update_post['tags']) {
            $tags = explode(',', $update_post['tags']);

            foreach ($tags as $tag) {
                $existingTag = Tag::where('title_tag', $tag)->first();

                if (!$existingTag) {
                    // Если тег не существует, создаем новый
                    $newTag = Tag::create([
                        'title_tag' => $tag
                    ]);

                    // Создаем связь между постом и новым тегом
                    TagPost::create([
                        'id_tag' => $newTag->id,
                        'id_post' => $update->id
                    ]);
                } else {
                    // Если тег существует, проверяем, не создана ли уже связь между постом и тегом
                    $existingTagPost = TagPost::where('id_tag', $existingTag->id)->where('id_post', $update->id)->first();

                    if (!$existingTagPost) {
                        // Если связи нет, создаем ее
                        TagPost::create([
                            'id_tag' => $existingTag->id,
                            'id_post' => $update->id,
                        ]);
                    }
                }
            }
            return redirect()->back()->with('succes', 'Тег(и) добавлен(ы)!');
        } else {
            // Если нет тегов, обновляем пост
            $update->update([
                'title_post' => $update_post['title_post'],
                'description' => $update_post['description'],
            ]);

            return redirect()->back()->with('succes', 'Пост обновлен!');
        }
    }


    public function deleteTag(Request $request, $tagid)
    {

        $deleteTag = tagPost::where('id_post', $request->input('param'))->where('id_tag', $tagid)->first();

        if ($deleteTag) {
            $deleteTag->delete();
            return redirect()->back()->with('succes', 'Тег удален!');
        } else {
            return redirect()->back()->with('error', 'Ошибка удаления!');
        }
    }

    public function searchTags(Request $request)
    {
        $tags = $request->input('tags');

        $tagsArray = explode(',', $tags);

        $posts = Post::with(['user', 'tags', 'components'])
            ->where(function ($query) use ($tagsArray) {
                foreach ($tagsArray as $tag) {
                    $query->orWhereHas('tags', function ($q) use ($tag) {
                        $q->where('title_tag', 'like', '%' . $tag . '%');
                    });
                }
            })
            ->paginate(10);

        return view('forum', ['posts' => $posts]);
    }

    public function showPostAdmin(){
        $all_posts = Post::with(['user', 'tags', 'components'])->latest()->paginate(10);

        return view('admin.index', ['posts' => $all_posts]);
    }
}
