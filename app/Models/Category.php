<?php

namespace App\Models;

use App\Models\Concerns\HasAuthor;
use App\Models\Concerns\HasMediaAttribute;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory, HasMediaAttribute, HasAuthor;

    protected $fillable = ['name', 'slug', 'image'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? cloudinary_url($value, 400, true) : null,
            set: fn ($value) => $value
                ? Cloudinary::uploadApi()->upload(
                    $value->getRealPath(),
                    ['folder' => config('cloudinary.folders.category')]
                )['public_id']
                : null
        )->withoutObjectCaching();
    }

    public function thumbnail(): Attribute
    {
        return Attribute::get(
            fn () => $this->getRawOriginal('image')
                ? cloudinary_url($this->getRawOriginal('image'), 100, true)
                : null
        );
    }

    /**This takes the name of the category (like "Summer Sale"), turns it into a URL-friendly version ("summer-sale"),
    and puts that into the slug field of the category. **/
    protected static function booted()
    {
        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }


    public function subCategories(): HasMany
    {
        return $this->hasMany(SubCategory::class);
    }

    public function name(): Attribute
    {
        return Attribute::get(fn ($value) => str($value)->title());
    }

    public function products(): HasManyThrough
    {
        return $this->hasManyThrough(Product::class, SubCategory::class, secondKey: 'sub_category_id', secondLocalKey: 'id');
    }
}

