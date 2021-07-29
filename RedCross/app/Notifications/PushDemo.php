<?php

namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
class PushDemo extends Notification
{
    use Queueable;
    
    
    
    public function via($notifiable)
    {
        return [WebPushChannel::class];
    }
    public function toWebPush($notifiable, $notification)
    {
        return (new WebPushMessage)
            ->title('There is a blood campaign very soon')
            ->icon('/notification-icon.png')
            ->body('You will be informed soon for more details')
            ->action('View App', 'notification_action');
    }
    
}