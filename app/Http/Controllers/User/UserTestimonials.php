<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class UserTestimonials extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testinomials', compact("testimonials"));
    }
}
