<?php

namespace App\Models\Concerns;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait HasMediaAttribute
{
    /**
     * Upload the given file to Cloudinary in the specified folder
     * and return the secure URL of the uploaded file.
//     *
//     * @param  \Illuminate\Http\UploadedFile|string  $value
//     * @param  string  $folder
//     * @return mixed
//     */
//    public function uploadAndReturnPath($value, string $folder): mixed
//    {
//        if ($value instanceof UploadedFile || Str::startsWith($value, 'http')) {
//            $uploaded = Cloudinary::uploadApi()->upload($value instanceof UploadedFile ? $value->getRealPath() : $value, ['folder' => $folder]);
//            // store only the public_id (not full URL)
//            return $uploaded['public_id'] ?? null;
//        }
//        return $value;
//    }
    public function uploadAndReturnPath($value, string $folder): mixed
    {
        if ($value instanceof UploadedFile || Str::startsWith($value, 'http')) {
            return Cloudinary::upload((string) $value, ['folder' => $folder])->getFileName();
            // Todo: Send a PR to cloudinary to fix this return typehint error.
        }

        return $value;
    }
}
