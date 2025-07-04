<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NewsCategory;

class News extends Model
{


protected $fillable = [
    'title',
    'slug',
    'news_category_id',
    'excerpt',
    'content',
    'image'
];


    public function category()
{
    return $this->belongsTo(NewsCategory::class, 'news_category_id');
}



}
