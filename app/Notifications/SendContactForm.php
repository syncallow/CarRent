<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class SendContactForm extends Notification
{

    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable): array
    {
        return [TelegramChannel::class];
    }


    public function toTelegram($notifiable) {

        return TelegramMessage::create()->token('6442478353:AAHAFJZFhImEqUJgmrJAuut85ZeVcKd1evo')
            ->to(-4048738370)
            ->line('*This is the new contact*')
            ->line('*First Name: *' . $notifiable->name)
            ->line('*Last name: *' . $notifiable->lastname)
            ->line('*Phone Number: *' . $notifiable->phone)
            ->line('*Message: *' . $notifiable->message);
    }
}
