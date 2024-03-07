<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
    ];

    // Permite usar los datos de la tabla User que esta relacionada con Post
    public function user(){
        return $this->belongsTo(User::class);
    }
}
