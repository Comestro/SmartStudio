<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\BookingController;
use App\Models\Gallery;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LetterPadController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\YoutubeVideoController;
use App\Models\Category;
use Illuminate\Http\Request;


use App\Models\youtubeVideo;

use function Pest\Laravel\post;
use function Symfony\Component\String\b;


// Route::get('/', function () {
//     return view('public.home');
// })->name('home');

// Route::get('/portfolio', function () {
//     return view('public.portfolio');
// })->name('portfolio');

Route::get("/generate/key", function(){
    Artisan::command("key:generate");
    return "Key generated successfully";
});


Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/gallery', [GalleryController::class, 'galleryCalling'])->name('gallery');



Route::get('/service', function () {
    return view('public.service');
})->name('service');

Route::get('/about', function () {
    return view('public.about');
})->name('about');

Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');


// Route::get('/video', function () {
//     $data['videos']=youtubeVideo::all();
//     return view('public.video', $data);
// })->name('video');


Route::get('/video', [YoutubeVideoController::class, 'callingVideo'])->name('video');

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

Route::get('/', function () {
    $categories['categories'] = Category::all();
    $categories['Filtercategories'] = Category::whereNotNull('cat_image')
        ->where('cat_image', '!=', '')
        ->get();
    return view('/public.home', $categories);
})->name('home');


Route::get('/', function (Request $request) {
    $categories = Category::all();

    $selectedCategorySlug = $request->input('category_slug');

    $galleriesQuery = Gallery::with(['images', 'category'])
        ->whereHas('images', function ($query) {
            $query->whereNotNull('image_path')
                ->where('image_path', '!=', '');
        });

    if ($selectedCategorySlug) {

        $category = Category::where('cat_slug', $selectedCategorySlug)->first();


        if ($category) {
            $galleriesQuery->where('category_id', $category->id);
        }
    }


    $galleries = $galleriesQuery->paginate(12);

    return view('public.home', [
        'categories' => $categories,
        'galleries' => $galleries,
        'selectedCategorySlug' => $selectedCategorySlug,
    ]);
})->name('home');





// admin category
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {

    // dashboard
    // Route::get('/dashboard', function () {

    // })->name('dashboard');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');



    // category
    Route::controller(CategoryController::class)->prefix('category')->group(function () {
        Route::match(['get', 'post'], '/', 'manageCategory')->name('category');
        Route::get('/editcategory/{id}', 'editCategory')->name('category.edit');
        Route::put('/editcategory/{id}', 'updateCategory')->name('category.update');

        Route::delete('/trash/{id}', 'trashCategory')->name('category.trash');
    });

    // gallery
    Route::controller(GalleryController::class)->prefix('gallery')->group(function () {

        Route::match(["get", "post"], "/insert", "insertGallery")->name("gallery.insertGallery");
        Route::get("/managegallery", "manageGallery")->name("gallery.manageGallery");
        Route::get("/viewgallery/{id}", "viewGallery")->name("gallery.viewGallery");
        Route::get('/editgallery/{id}', 'editGallery')->name('gallery.edit');
        Route::put('/editgallery/{id}', 'updateGallery')->name('gallery.update');
        Route::delete('/trash/{id}', 'trashGallery')->name('gallery.trash');

        Route::delete('/delete-image/{imageId}', 'deleteImage')->name('gallery.deleteImage');
    });



    // contact
    Route::get('/contact-list', [ContactController::class, 'ManageContact'])->name('admin.contact.list');
    Route::get('/contact-list/{id}', [ContactController::class, 'viewContact'])->name('admin.contact.view');

    // banner
    Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('/banners', [BannerController::class, 'index'])->name('admin.banners.index');
    Route::post('/banner/{id}/toggle-status', [BannerController::class, 'toggleStatus'])->name('admin.banner.toggleStatus');
    Route::get('/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::put('/banner/edit/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::get('/delete/{id}', [BannerController::class, 'destroy'])->name('banner.delete');

    Route::get('/users', [UserController::class, 'index'])->name('admin.user.index');

    Route::resource('managead',AdController::class);
    Route::resource('youtube-videos', YoutubeVideoController::class);
    Route::post('/video/{id}/toggle-status', [YoutubeVideoController::class, 'toggleStatus'])->name('admin.video.toggleStatus');
    Route::controller(BannerController::class)->prefix('banner')->group(function () {

        Route::get('/create', 'create')->name('banner.create');
        Route::post('/store', 'store')->name('banner.store');
        Route::get('/banners', 'index')->name('admin.banners.index');
        Route::post('/banner/{id}/toggle-status', 'toggleStatus')->name('admin.banner.toggleStatus');
        // Route::get('/delete/{id}', [BannerController::class, 'destroy'])->name('banner.delete');
        Route::delete('/trash/{id}', 'trashBanner')->name('banner.trash');
    });

    // youtubevideo

    Route::resource('youtube-videos', YoutubeVideoController::class);
    Route::post('/video/{id}/toggle-status', [YoutubeVideoController::class, 'toggleStatus'])->name('admin.video.toggleStatus');
    Route::get('/youtube-video/edit/{id}', [YoutubeVideoController::class, 'edit'])->name('youtube-video.edit');
    Route::put('/youtube-video/edit/{id}', [YoutubeVideoController::class, 'update'])->name('youtube-video.update');
    Route::delete('/video/trash/{id}', [YoutubeVideoController::class, 'trashYoutubeVideo'])->name('youtube-video.trash');
});

Route::delete('admin/budget/trash/{id}', [BudgetController::class, 'destroy'])->name('budget.trash');

Route::get('/admin/budget', [BudgetController::class, 'BudgetView'])->name('budget.show');
Route::get('/admin/budget/{id}', [BudgetController::class, 'BudgetEdit'])->name('budget.edit');
Route::put('/admin/budget/update/{id}', [BudgetController::class, 'updateBudget'])->name('budget.update');
Route::post('/admin/budget', [BudgetController::class, 'CategoryPrice'])->name('budget.create');
Route::match(["get", "post"], '/budget', [BudgetController::class, 'index'])->name('budget.index');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/letter/create', [LetterPadController::class, 'create'])->name('letter.create');
Route::post('/letter', [LetterPadController::class, 'store'])->name('letter.store');
Route::get('/letter/{id}', [LetterPadController::class, 'show'])->name('letter.show');
