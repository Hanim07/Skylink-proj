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
        'features' => 'array'
    ];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }



    public function getPriceFormattedAttribute()
    {
        preg_match('/[\d\.]+/', $this->price, $matches);
        $numericPrice = isset($matches[0]) ? (float)$matches[0] : 0;

        return '$' . number_format($numericPrice, 2);
    }


}
