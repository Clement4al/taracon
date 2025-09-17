<?php

namespace App\Observers;

use App\Models\Product;
use App\Models\User;
use App\Notifications\ProductDeleted;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class ProductObserver
{
    /**
     * Handle the Product "saving" event.
     */
    public function saving(Product $product): void
    {
        if ($product->isDirty('name')) {
            $product->slug = Str::slug($product->name);
        }
    }

    /**
     * Handle the Product "deleted" event.
     */
    public function deleted(Product $product): void
    {
        Notification::send(
            User::notifiable()->admin()->get()->filter->can('manage-shop'),
            new ProductDeleted($product)
        );
    }
}
