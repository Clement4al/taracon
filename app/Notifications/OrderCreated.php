<?php

namespace App\Notifications;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderCreated extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(protected Order $order)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("New Order from {$this->order->user->name} #{$this->order->id}")
            ->line("**{$this->order->user->name}** just placed an order for the following products;")
            ->lines($this->order->products->map($this->buildLine(...)))
            ->action('View order', route('orders.show', $this->order));
    }

    public function buildLine(Product $product): string
    {
        return " - {$product->name} ({$product->pivot->quantity}) - ₦" . number_format($product->pivot->amount);
    }
}
