<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Carbon\Carbon;

class HomeController
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function pricing()
    {
        return view('pricing');
    }
    public function notification()
    {
        $notifications = auth()->user()->unreadNotifications;

        return view('notification', compact('notifications'));
    }

    public function blog()
    {
        return view('blog');
    }

    public function paidUsers($chart = null)
    {
        $q = User::whereNotNull('subscription');

        if ($chart == 90) {
            
            $data = [
                
                Carbon::now()->subDays(82)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(90), Carbon::now()->subDays(82)])->sum('paid_amount'),
                Carbon::now()->subDays(75)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(82), Carbon::now()->subDays(75)])->sum('paid_amount'),
                Carbon::now()->subDays(67)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(75), Carbon::now()->subDays(67)])->sum('paid_amount'),
                Carbon::now()->subDays(60)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(67), Carbon::now()->subDays(60)])->sum('paid_amount'),
                Carbon::now()->subDays(52)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(60), Carbon::now()->subDays(52)])->sum('paid_amount'),
                Carbon::now()->subDays(45)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(52), Carbon::now()->subDays(45)])->sum('paid_amount'),
                Carbon::now()->subDays(37)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(45), Carbon::now()->subDays(37)])->sum('paid_amount'),
                Carbon::now()->subDays(30)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(37), Carbon::now()->subDays(30)])->sum('paid_amount'),
                Carbon::now()->subDays(22)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()->subDays(22)])->sum('paid_amount'),
                Carbon::now()->subDays(15)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(22), Carbon::now()->subDays(15)])->sum('paid_amount'),
                Carbon::now()->subDays(7)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(15), Carbon::now()->subDays(7)])->sum('paid_amount'),
                Carbon::now()->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])->sum('paid_amount')
            ];

        } elseif ($chart == 60) {
            
            $data = [
                Carbon::now()->subDays(52)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(60), Carbon::now()->subDays(52)])->sum('paid_amount'),
                Carbon::now()->subDays(45)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(52), Carbon::now()->subDays(45)])->sum('paid_amount'),
                Carbon::now()->subDays(37)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(45), Carbon::now()->subDays(37)])->sum('paid_amount'),
                Carbon::now()->subDays(30)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(37), Carbon::now()->subDays(30)])->sum('paid_amount'),
                Carbon::now()->subDays(22)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()->subDays(22)])->sum('paid_amount'),
                Carbon::now()->subDays(15)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(22), Carbon::now()->subDays(15)])->sum('paid_amount'),
                Carbon::now()->subDays(7)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(15), Carbon::now()->subDays(7)])->sum('paid_amount'),
                Carbon::now()->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])->sum('paid_amount')
            ];
            
        } else {
            
            $data = [
                Carbon::now()->subDays(22)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()->subDays(22)])->sum('paid_amount'),
                Carbon::now()->subDays(15)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(22), Carbon::now()->subDays(15)])->sum('paid_amount'),
                Carbon::now()->subDays(7)->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(15), Carbon::now()->subDays(7)])->sum('paid_amount'),
                Carbon::now()->format('M d') => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])->sum('paid_amount')
            ];
        }
        
        $stats = [
            'yearly_income' => (clone $q)->whereBetween('created_at', [Carbon::now()->subMonths(12), Carbon::now()])->sum('paid_amount'),
            'monthly_income' => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])->sum('paid_amount'),
            'weekly_income' => (clone $q)->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])->sum('paid_amount'),
            'balance' => (clone $q)->sum('paid_amount')
        ];

        $users = $q->get();

        return view('admin.users.paid', compact('users', 'chart', 'data', 'stats'));
    }
}
