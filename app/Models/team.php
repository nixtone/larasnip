<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    public function user() {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
