<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\DentalController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CSVController;
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
    Route::get('/add-brand', [BrandController::class, 'index']);
    Route::get('/all-brands', [BrandController::class, 'allBrands'])->name('brands.all');
    Route::delete('/brands/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');
    Route::post('/brands/store', [BrandController::class, 'store'])->name('brands.store');
    Route::get('/brands/{id}/edit', [BrandController::class, 'edit'])->name('brands.edit');
    Route::put('/brands/{id}', [BrandController::class, 'update'])->name('brands.update');
    Route::get('/add-category',[BlogController::class, 'blogCategory']);
    Route::post('/categories', [BlogController::class, 'storeCategory'])->name('category.store');
    Route::get('/add-categories',[BlogController::class, 'viewCategories']);
    Route::get('categories/{category}/edit', [BlogController::class, 'editCategory'])->name('category.edit');
    Route::patch('categories/{category}', [BlogController::class, 'updateCategory'])->name('category.update');
    Route::delete('categories/{category}', [BlogController::class, 'deleteCategory'])->name('category.destroy');
    Route::get('/add-blog',[BlogController::class, 'Blog'])->name('blog.create');
    Route::post('/blogs', [BlogController::class, 'storeBlog'])->name('blog.store');
    Route::get('/all-blogs',[BlogController::class, 'allBlogs'])->name('blogs.all');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');

    Route::get('/add-slider',[SliderController::class, 'create'])->name('slider.create');
    Route::post('/sliders', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/all-sliders',[SliderController::class, 'index'])->name('sliders.index');
    Route::get('/sliders/{id}/edit', [SliderController::class, 'edit'])->name('sliders.edit');
    Route::put('/sliders/{id}', [SliderController::class, 'update'])->name('sliders.update');
    Route::delete('/sliders/{id}', [SliderController::class, 'destroy'])->name('sliders.destroy');

    Route::get('/add-dental-service',[DentalController::class, 'create'])->name('dental.create');
    Route::post('/dentals', [DentalController::class, 'store'])->name('dental.store');
    Route::get('/all-dental-services',[DentalController::class, 'index'])->name('dentals.index');
    Route::get('/dentals/{id}/edit', [DentalController::class, 'edit'])->name('dentals.edit');
    Route::put('/dentals/{id}', [DentalController::class, 'update'])->name('dentals.update');
    Route::delete('/dentals/{id}', [DentalController::class, 'destroy'])->name('dentals.destroy');

    Route::get('/import-csv', [CSVController::class, 'create'])->name('import.create');
    Route::get('/all-imports', [CSVController::class, 'index'])->name('import.index');
    Route::post('/import', [CSVController::class, 'store'])->name('import.store');

});

Route::get('/', [SearchController::class, 'index']);
Route::view('/404', 'apnadental/404');
Route::view('/login', 'apnadental/login');
Route::view('/register', 'apnadental/register');
Route::view('/blog', 'apnadental/blog');
Route::view('/about-us', 'apnadental/about');
Route::view('/service', 'apnadental/service');
Route::get('/doctors', [DoctorController::class, 'index']);
Route::view('/contact-us', 'apnadental/contact');
Route::get('/search-location', [SearchController::class, 'searchLocation']);
Route::post('/search-doctors', [SearchController::class, 'searchDoctors']);
Route::get('/doctor-details/{id}', [DoctorController::class, 'showDoctorDetails']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::view('/doctor', 'apnadental/doctor');

//Route::get('/projects/apnadental/{slug}', [DoctorController::class, 'showDoctorDetailsBySlug']);