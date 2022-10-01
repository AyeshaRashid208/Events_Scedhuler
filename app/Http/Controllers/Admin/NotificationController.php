<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Listeners\SendAllUserNotification;
use App\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;

        return view('admin/notification.index', compact('notifications'));
    }
    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
    public function sendAll(Request $request)
    {

        $user_notification = Auth()->user();
        $user_notification->SendAllUserNotification(User::all(), $request->notification);
        return back();
    }
}
