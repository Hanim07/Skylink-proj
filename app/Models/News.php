<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NewsCategory;

class News extends Model
{
    public function category()
{
    return $this->belongsTo(NewsCategory::class, 'news_category_id');
}

}
