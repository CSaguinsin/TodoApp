<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path']; // Specify the fillable attributes

    public function getPathAttribute($value)
    {
        return asset('storage/' . $value); // Prepend the 'storage' path to the image path
    }
}
