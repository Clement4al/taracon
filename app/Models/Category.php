<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Str;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = [];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function subCategories(): HasMany
    {
        return $this->hasMany(SubCategory::class);
    }

/**This takes the name of the category (like "Summer Sale"), turns it into a URL-friendly version ("summer-sale"),
and puts that into the slug field of the category. **/
    public static function booted()
    {
        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }

    public function products(): HasManyThrough
    {
        return $this->hasManyThrough(Product::class, SubCategory::class, secondKey: 'sub_category_id', secondLocalKey: 'id');
    }
}
