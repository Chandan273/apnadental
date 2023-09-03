<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/* Admin Routes */

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'index']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('post-login', [AuthController::class,'postLogin'])->name('login.post');
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::view('/add-service', 'admin/add_service');
    Route::view('/all-services', 'admin/all_services');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::view('/add-listing', 'admin/add_listing');
    Route::view('/add-doctor', 'admin/add_doctor');
    Route::view('/bookings', 'admin/bookings');
    Route::view('/bookmarks', 'admin/bookmarks');
    Route::view('/charts', 'admin/charts');
    Route::view('/doctor-profile', 'admin/doctor_profile');
    Route::view('/messages', 'admin/messages');
    Route::view('/reviews', 'admin/reviews');
    Route::view('/tables', 'admin/tables');
    Route::view('/user-profile', 'admin/user_profile');
});

Route::get('/', [SearchController::class, 'index']);
Route::view('/404', 'apnadental/404');
Route::view('/login', 'apnadental/login');
Route::view('/register', 'apnadental/register');
Route::view('/blog', 'apnadental/blog');
Route::view('/about-us', 'apnadental/about');
Route::get('/doctors', [DoctorController::class, 'index']);
Route::view('/contact-us', 'apnadental/contact');
Route::get('/search-location', [SearchController::class, 'searchLocation']);
Route::post('/search-doctors', [SearchController::class, 'searchDoctors']);
Route::get('/doctor-details/{id}', [DoctorController::class, 'showDoctorDetails']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
//Route::get('/projects/apnadental/{slug}', [DoctorController::class, 'showDoctorDetailsBySlug']);