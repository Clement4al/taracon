<?php

namespace App\Models;

use App\Models\Concerns\HasAuthor;
use App\Notifications\TransferCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Notification;

class Transfer extends Model
{
    use HasAuthor;

    public static function booted()
    {
        static::created(function ($transfer) {
            dispatch(function () use ($transfer) {
                Notification::send(
                    User::notifiable()->admin()->get()->filter->can('manage-stock'),
                    new TransferCreated($transfer)
                );
            })->afterResponse();

        });
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, ProductTransfer::class)
            ->withPivot(['quantity', 'from_location_id', 'to_location_id'])
            ->withTimestamps();
    }
}
