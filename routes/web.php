<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\YoutubeVideoController;
use App\Models\Category;

use function Pest\Laravel\post;
use function Symfony\Component\String\b;

Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/portfolio', function () {
    return view('public.portfolio');
})->name('portfolio');

Route::get('/gallery', function () {
    return view('public.gallery');
})->name('gallery');


Route::get('/service', function () {
    return view('public.service');
})->name('service');

Route::get('/about', function () {
    return view('public.about');
})->name('about');

Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');

Route::get('/video', function () {
    return view('public.video');
})->name('video');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/create-users', [UserController::class, 'createUsers']);

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Register Routes
Route::get('/register', [RegisterController::class, 'signupform'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::get('/booking', [BookingController::class, 'index'])->name('category.view');
Route::get('/booking/{category}', function ($category) {
    $data['categorySlug'] = $category;
    return view('public.insertForm', $data);
})->name('category.name');

Route::post('/booking/{category}', [BookingController::class, 'store'])->name('category.store');
Route::get('admin/checkschedule', [BookingController::class, 'showBooking'])->name('booking.show');







// admin category

Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        // dashboard
        Route::get('/dashboard', function () {
            $data['categoryImage']=Category::all();
            return view('admin.dashboard',$data);
        })->name('dashboard');


        // category
        Route::controller(CategoryController::class)->prefix('category')->group(function () {
            Route::match(['get', 'post'], '/', 'manageCategory')->name('category');
            Route::get( '/editcategory/{id}', 'editCategory')->name('category.edit');
            Route::put( '/editcategory/{id}', 'updateCategory')->name('category.update');

            Route::get('/delete/{id}', 'deleteCategory')->name('category.delete');
        });
         // gallery
         Route::controller(GalleryController::class)->prefix('gallery')->group(function(){
           
            Route::match(["get","post"],"/insert","insertGallery")->name("gallery.insertGallery");
            Route::get("/managegallery","manageGallery")->name("gallery.manageGallery");
            Route::get('/delete/{id}', 'deleteGallery')->name('gallery.delete');
        });



        // contact
        Route::get('/contact-list', [ContactController::class, 'ManageContact'])->name('admin.contact.list');

        Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
        Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
        Route::get('/banners', [BannerController::class, 'index'])->name('admin.banners.index');
        Route::post('/banner/{id}/toggle-status', [BannerController::class, 'toggleStatus'])->name('admin.banner.toggleStatus');
        Route::get('/delete/{id}', [BannerController::class, 'destroy'])->name('banner.delete');
        

        
       
        
     
 

        Route::resource('youtube-videos', YoutubeVideoController::class);
        Route::post('/video/{id}/toggle-status', [YoutubeVideoController::class, 'toggleStatus'])->name('admin.video.toggleStatus');



    });
});
Route::get('/admin/budget',[BudgetController::class,'BudgetView'])->name('budget.show');
Route::get('/admin/budget/{id}', [BudgetController::class, 'BudgetEdit'])->name('budget.edit');
Route::post('/admin/budget/update', [BudgetController::class, 'BudgetUpdate'])->name('budget.update');
Route::post('/admin/budget',[BudgetController::class,'CategoryPrice'])->name('budget.create');
Route::match(["get","post"],'/budget', [BudgetController::class, 'index'])->name('budget.index');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');