<?php

namespace App\Models;

use App\Models\Concerns\HasMediaAttribute;
use App\Models\Concerns\HasAuthor;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasMediaAttribute, HasAuthor;

    protected $guarded = [];
    public function src(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? cloudinary_url($value, 1000, true) : null,
            set: fn ($value) => $value ? Cloudinary::uploadApi()->upload($value->getRealPath(), ['folder' => config('cloudinary.folders.product')]
            )['public_id'] : null )->withoutObjectCaching();
    }

    public function thumbnail(): Attribute
    {
        return Attribute::get(fn () => $this->getRawOriginal('src')
                ? cloudinary_url($this->getRawOriginal('src'), 100, true) : null
        );
    }

    public function medium(): Attribute
    {
        return Attribute::get(fn () => $this->getRawOriginal('src')
            ? cloudinary_url($this->getRawOriginal('src'), 300, true) : null
        );
    }

    /**
     * Get a transformed version of the image.
     */
    public function transform($transformation): string
    {
        return cloudinary_url($this->getRawOriginal('src'), $transformation);
    }
}

//    public function src(): Attribute
//    {
//        return Attribute::make(
//            get: fn ($value) => cloudinary_url($value, [
//                'height' => 500,
//                'width' => 500,
//                'crop' => 'pad',
//                'background' => 'auto',
//            ]),
//            set: fn ($value) => $this->uploadAndReturnPath(
//                $value,
//                config('cloudinary.folders.product')
//            )
//        )->withoutObjectCaching();
//    }
//
//    public function thumbnail(): Attribute
//    {
//        return Attribute::get(fn () => $this->transform([
//            'width' => 200,
//            'height' => 150,
//            'crop' => 'fill',
//        ]));
//    }
//
//    public function transform(array $transformation): ?string
//    {
//        $src = $this->getRawOriginal('src');
//
//        if (! $src) {
//            return null;
//        }
//
//        // since your DB stores public IDs, this will generate a valid Cloudinary URL
//        return cloudinary_url($src, $transformation);
//    }
//}
