<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table='articles';
    protected $fillable=[
        'id',
        'country',
        'article_title',
        'article_content',
        'url'
    ];

}
