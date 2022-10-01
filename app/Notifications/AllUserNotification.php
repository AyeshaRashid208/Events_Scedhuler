<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Request;

class AllUserNotification extends Notification
{
    protected $user;
    protected $request1;
    public function __construct($user, $request1)
    {
        $this->user = $user;
        $this->request = $request1;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'notification' => $this->request,
        ];
    }
}
