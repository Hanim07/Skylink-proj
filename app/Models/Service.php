<?php

// app/Models/Service.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug', 'title', 'desc', 'image', 'price', 'features', 'category_id'
    ];

    protected $casts = [
        'features' => 'array',
        
    ];
    

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }



    public function getPriceFormattedAttribute()
{
    return is_numeric($this->price) ? '' . number_format($this->price, 2) : $this->price;
}

}
