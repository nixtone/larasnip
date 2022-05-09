<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes; // мягкое удаление

    protected $table = 'posts';
    protected $guarded = false; // или false или []
    // protected $fillable = ['title', 'content']; // Более уточненный вариант вместо "protected $guarded = [];"
}
