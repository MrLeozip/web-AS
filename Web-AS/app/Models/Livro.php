<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [

        'title',
        'author',
        'publication_year',
        'gender',

    ];

}


