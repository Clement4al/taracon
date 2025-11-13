<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Casts\Attribute;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Str;

trait UserAttributes
{
    use ChecksUserState, HasMediaAttribute;

    public function name(): Attribute
    {
        return Attribute::get(fn () => Str::title(
            $this->first_name.' '.$this->last_name
        ));
    }

    public function photo(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                // If no uploaded photo -> choose default avatar based on gender
                $value ??= $this->gender->isMale()
                    ? config("cloudinary.defaults.photos.male")
                    : config("cloudinary.defaults.photos.female");
                // Always return a properly transformed Cloudinary URL
                return cloudinary_url($value, [ "height" => 220, "width" => 220, "crop" => "fill", "gravity" => "face",]);
            },

            set: function ($value) {
                // If no file was uploaded, keep existing value
                if (!$value) {
                    return null;
                }
                // Upload photo → return public_id only
                return Cloudinary::uploadApi()->upload($value->getRealPath(), ['folder' => config('cloudinary.folders.user')])['public_id'];
            }
        )->withoutObjectCaching();
    }

}
