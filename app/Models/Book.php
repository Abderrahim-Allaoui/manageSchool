<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'title',
        'author',
        'isbn',
        'publisher',
        'year_of_publication',
        'num_copies',
    ];
}
