<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tag',
        'id_post',
    ];
}
