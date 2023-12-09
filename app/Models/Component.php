<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_component',
        'config_component',
        'image_components',
        'sale'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'component_posts', 'id_component', 'id_post');
    }
}
