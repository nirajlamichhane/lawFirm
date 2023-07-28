<?php


namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $reviews = Testimonial::with('user')->get();
        $services = Service::all();
        $videos = Video::all();
        $testimonial = auth()->user() ? auth()->user()->testimonial : null;
        return view('home', compact('testimonial', 'videos', 'reviews', 'services'));
    }
}
