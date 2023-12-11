<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\ComponentPost;
use App\Models\Post;
use App\Models\Tag;
use App\Models\tagPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $index_posts = Post::with('user', 'tags')->limit(3)->get();
        $tags = Tag::all();
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
            'likes' => 0,
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
        $all_posts = Post::with(['user', 'tags', 'components'])->get();
        
        return view('forum', ['posts' => $all_posts]);
    }

    public function branchShow(Post $id){
        dd($id);
    }
}
