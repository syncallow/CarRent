<?php

namespace App\Notifications;

use App\Models\Car;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramFile;
use NotificationChannels\Telegram\TelegramMessage;

class NewOrder extends Notification
{
    use Queueable;

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
        $car = Car::whereId($notifiable->car_id)->first();

        if($notifiable->user_id) {
           $user = User::whereId($notifiable->user_id)->first();

            return TelegramMessage::create()->token('6442478353:AAHAFJZFhImEqUJgmrJAuut85ZeVcKd1evo')
                ->to(-1001619167138)
                ->line('*Customer Name:* ' . $user->name)
                ->line('*Customer Phone:* ' . $user->phone)
                ->line('*Selected Car:* ' . $car->title)
                ->line('*Book Starts:* ' . Carbon::parse($notifiable->book_start_date)->isoFormat('MMMM Do YYYY'))
                ->line('*Book Ends:* ' . Carbon::parse($notifiable->book_end_date)->isoFormat('MMMM Do YYYY'))
                ->line('*Total Price:* ' . $notifiable->total_price);

        }else {
            return TelegramMessage::create()->token('6442478353:AAHAFJZFhImEqUJgmrJAuut85ZeVcKd1evo')
                ->to(-1001619167138)
                ->line('*Customer Name:* ' . $notifiable->guest_name)
                ->line('*Customer Lastname:* ' . $notifiable->guest_lastname)
                ->line('*Customer Phone:* ' . $notifiable->guest_phone)
                ->line('*Selected Car:* ' . $car->title)
                ->line('*Book Starts:* ' . Carbon::parse($notifiable->book_start_date)->isoFormat('MMMM Do YYYY'))
                ->line('*Book Ends:* ' . Carbon::parse($notifiable->book_end_date)->isoFormat('MMMM Do YYYY'))
                ->line('*Total Price:* ' . $notifiable->total_price);
        }
    }

}
