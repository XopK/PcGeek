<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
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

        Post::create([
            'title_post' => $post_data['title_post'],
            'description' => $post_data['description'],
            'likes' => 0,
            'id_user' => $id_user,
        ]);
        foreach ($tags as $tag) {
            $exitTags = Tag::where('title_tag', $tag)->first();

            if (!$exitTags) {
                Tag::create([
                    'title_tag' => $tag
                ]);
            }
        }
        return redirect('/forum')->with('succes', 'Запись создана!');
    }
}
// foreach ($tags as $tag) {
//     $existingTag = Tag::where('title_tag', $tag)->first();

//     if (!$existingTag) {
//         $newTag = Tag::create([
//             'title_tag' => $tag
//         ]);

//         // Получите ID тега и поста
//         $tagId = $newTag->id;
//         $postId = $post->id;

//         // Создайте запись в таблице tagPost
//         TagPost::create([
//             'id_tag' => $tagId,
//             'id_post' => $postId,
//         ]);
//     } else {
//         // Если тег уже существует, проверьте, связан ли он с постом
//         $tagId = $existingTag->id;
//         $postId = $post->id;

//         $existingTagPost = TagPost::where('id_tag', $tagId)->where('id_post', $postId)->first();

//         if (!$existingTagPost) {
//             // Если связи еще нет, создайте запись в таблице tagPost
//             TagPost::create([
//                 'id_tag' => $tagId,
//                 'id_post' => $postId,
//             ]);
//         }
//     }
// }