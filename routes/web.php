<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\CallBackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\user\UserTestimonials;
use App\Http\Controllers\UserCaseController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('services');
})->name('service');

Route::get('/testinomials', [UserTestimonials::class, 'index'])->name('testinomials');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/specialofffer', function () {
    return view('specialoffer');
})->name('specialoffer');

Route::post('/callback', [CallBackController::class, 'store'])->name('callback');

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'adminUsersOnly']], function () {
    Route::get('/', [AdminController::class, 'index'])->name("admin.dashboard");
    Route::resource('/cases', ProblemController::class);
    Route::post('/updatecase', [ProblemController::class, 'updateCase'])->name('cases.updatecase');
    Route::resource('/users', UsersController::class);
    Route::resource('/testimonial', TestimonialController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/video', VideoController::class);
    Route::get('/callback/{callback}/complete', [CallBackController::class, 'markAsCompleted'])->name("callback.complete");
    Route::resource('/callback', CallBackController::class);
});
Route::group(['prefix' => 'user', 'middleware' => ['auth', 'customerUsersOnly']], function () {
    // Route::get('/', [UsersController::class, 'user'])->home;
    Route::get('case', [UserCaseController::class, 'index'])->name('case');
    Route::get('/service', [ServiceController::class, 'user'])->name('service.user');
    Route::post('/testinomails', [TestimonialController::class, 'store'])->name('testimonials');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
