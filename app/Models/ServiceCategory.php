<?php

// app/Models/ServiceCategory.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name'];
   


    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }
    // Get children (subcategories)
    public function children()
    {
        return $this->hasMany(ServiceCategory::class, 'parent_id');
    }

    // Get parent (optional)
    public function parent()
    {
        return $this->belongsTo(ServiceCategory::class, 'parent_id');
    }
}
