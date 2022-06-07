<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // 'posts' пишется по конвенции, тоесть у одной категории может быть много постов
    public function posts() {
        return $this->hasMany(Post::class); // не удалось со 2 и 3 аргументами ", 'post_id', 'id'"
    }
}
