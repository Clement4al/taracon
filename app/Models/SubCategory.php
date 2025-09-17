<?php

namespace App\Models;

use App\Models\Concerns\HasAuthor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class SubCategory extends Model
{
    /** @use HasFactory<\Database\Factories\SubCategoryFactory> */
    use HasFactory, HasAuthor;

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public static function booted()
    {
        static::creating(function ($subCategory) {
            $subCategory->slug = Str::slug($subCategory->name);
        });
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
