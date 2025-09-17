<?php

namespace App\Models;

use App\Models\Concerns\HasMediaAttribute;
use App\Models\Concerns\HasAuthor;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Brand extends Model
{
    use HasMediaAttribute, HasAuthor;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? cloudinary_url($value, 300, true) : null,
            set: fn ($value) => $value
                ? Cloudinary::uploadApi()->upload(
                    $value->getRealPath(),
                    ['folder' => config('cloudinary.folders.brand')]
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

    public static function booted()
    {
        static::creating(function ($brand) {
            $brand->slug = Str::slug($brand->name);
        });
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
