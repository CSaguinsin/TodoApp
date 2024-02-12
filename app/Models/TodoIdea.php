<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoIdea extends Model
{
    use HasFactory;

    protected $table = 'todo_tables';
    protected $fillable = [
        'content',
        'title',
        'image'
    ];
}
