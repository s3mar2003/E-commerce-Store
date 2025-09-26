<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NewOrderNotification extends Notification
{
    use Queueable;

    public $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('New Order Received')
                    ->line("You have a new order #{$this->order->id}")
                    ->action('View Order', url("/orders/{$this->order->id}"));
    }

    public function toDatabase($notifiable)
    {
        return [
            'order_id' => $this->order->id,
            'amount' => $this->order->total,
            'message' => 'New order received'
        ];
    }
}
