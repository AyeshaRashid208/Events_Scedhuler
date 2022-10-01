<?php

namespace App;

use App\Listeners\SendAllUserNotification;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function sendAllUserNotification($user, $notification)
    {
        $this->notify(new SendAllUserNotification($user, $notification));
    }
}
