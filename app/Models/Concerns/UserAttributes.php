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
                // If no uploaded photo → generate avatar
                if (! $value) {
                    return "https://ui-avatars.com/api?background=eef6ff&color=0062D1&name=". urlencode($this->name). "&format=svg";
                }
                // Photo exists → return Cloudinary URL
                return cloudinary_url($value, [ 'height'  => 220, 'width'   => 220, 'crop' => 'fill', 'gravity' => 'face', ]);
            },
            set: function ($value) {
                // No upload → keep existing DB value
                if (! $value) {
                    return $this->attributes['photo'] ?? null;
                }
                // Upload photo → return public_id only
                return Cloudinary::uploadApi()->upload(
                    $value->getRealPath(), ['folder' => config('cloudinary.folders.user')])['public_id'];
            }
        )->withoutObjectCaching();
    }
    }
