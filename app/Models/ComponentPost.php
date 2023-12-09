<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentPost extends Model
{
    use HasFactory;

    protected $fillable = ['id_post', 'id_component'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }

    public function component()
    {
        return $this->belongsTo(Component::class, 'id_component');
    }
}
