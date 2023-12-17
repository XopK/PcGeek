<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeComment extends Model
{
    use HasFactory;

    protected $fillable = ['id_user', 'id_comment'];

    protected $table = 'like_comments';

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class, 'id_comment');
    }
}
