<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_post',
        'description',
        'id_user'
    ];

    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_posts', 'id_post', 'id_tag');
    }

    public function components()
    {
        return $this->belongsToMany(Component::class, 'component_posts', 'id_post', 'id_component');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_post');
    }

    public function likes()
    {
        return $this->hasMany(LikeBranch::class, 'id_post');
    }

    public function likesCount()
    {
        return $this->likes->count();
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'id_post');
    }
}
