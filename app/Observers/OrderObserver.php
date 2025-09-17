<?php

namespace App\Observers;

use App\Models\Order;
use App\Models\User;
use App\Notifications\OrderCreated;
use App\Notifications\OrderDelivered;
use Illuminate\Support\Facades\Notification;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     */
    public function created(Order $order): void
    {
        defer(function () use ($order) {
            cart()->empty();

            Notification::send(User::notifiable()->admin()->get(), new OrderCreated($order));
        });
    }

    /**
     * Handle the Order "updated" event.
     */
    public function updated(Order $order): void
    {
        if ($order->wasDelivered()) {
            $order->user->notify(new OrderDelivered($order));
        }
    }

    /**
     * Handle the Order "deleted" event.
     */
    public function deleted(Order $order): void
    {
        $order->products()->each(
            fn ($product) => $product->pivot->update(['location_id' => null])
        );
    }
}
