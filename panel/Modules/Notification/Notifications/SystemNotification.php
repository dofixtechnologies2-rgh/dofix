<?php

namespace Modules\Notification\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class SystemNotification extends Notification
{
    use Queueable;

    protected string $message;
    protected array $data;

    public function __construct(string $message, array $data = [])
    {
        $this->message = $message;
        $this->data = $data;
    }

    // Must specify database channel
    public function via($notifiable)
    {
        return ['database'];
    }

    // This is what will be stored in notifications.data column
    public function toDatabase($notifiable)
    {
        return array_merge($this->data, ['message' => $this->message]);
    }
}
