<?php

namespace App\Listeners;

use App\Notifications\AllUserNotification;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendAllUserNotification
{
    public function handle($event)
    {
        
        $admins = User::whereHas('roles', function ($query) {
                $query->where('id','!=', 1);
            })->get();
        Notification::send($admins, new AllUserNotification($event->user,$event->request->input('notification')));
    }
}
