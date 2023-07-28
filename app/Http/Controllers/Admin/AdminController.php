<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Problem;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\User;
use App\Notifications\CallBackNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function index()
    {
        // $notifications = auth()->user()->notify(new CallBackNotification());
        $data =   [
            'users' => User::customer()->count(),
            'cases' => Problem::count(),
            'services' => Service::count(),
            'testimonials' => Testimonial::count(),
        ];
        return view('admin.dashboard', compact('data'));
    }
}
