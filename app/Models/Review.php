<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = [
        'reviews',
    ];

    protected $fillable = [
        'title',
        'score',
        'content',
        'user_id',
        'restaurant_id',
    ];
    public function posts(){
        $this->hasMany(Post::class);
    } 
}
