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
        'likes',
        'id_user'
    ];

    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
