<?php

use App\Http\Controllers\Admin\ArchanaiController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CheckoutController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\HomamController;
use App\Http\Controllers\Admin\OfferControlelr;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PlansController;
use App\Http\Controllers\Admin\RitualController;
use App\Http\Controllers\Admin\VasthuController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\user\AjaxController;
use App\Http\Controllers\user\BookingController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\Web\PakcageController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\StoreController;
use App\Models\User;
use App\Models\Vasthu;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Route::get('/check_query', function () {

   // return ;
    DB::enableQueryLog();
    $user =  User::with(['subscription'])->find(1);
    return $user->subscription->count();
        //  return DB::getQueryLog();
});


Route::get('/', function () {
    return view('web.home');
});
Auth::routes();
Route::get('/packages',[PakcageController::class,'index'])->name('package');
Route::get('/services/{id}',[ServiceController::class,'services'])->name('services');
Route::get('/about-us',[HomeController::class,'about'])->name('about');
Route::get('/service-centres',[HomeController::class,'services'])->name('centre');
Route::get('/events',[HomeController::class,'events'])->name('events');
Route::get('/contact-us',[HomeController::class,'contact'])->name('contact');
Route::get('/checkout',[HomeController::class,'proceed'])->name('checkout');
Route::get('/guest-login',[GuestController::class,'index'])->name('guest');

Route::get('/collections/igl-coating',[ProductController::class,'iglCollection'])->name('collection.igl');
Route::get('/collections/stek-automative',[ProductController::class,'stekCollection'])->name('collection.stek');

Route::post('/ajax-create',[UserController::class,'create'])->name('ajax.create');
Route::post('/ajax-login',[UserController::class,'doLogin'])->name('ajax.doLogin');

Route::get('/about-us',[HomeController::class,'about'])->name('about');
Route::get('/lighting',[HomeController::class,'lighting'])->name('lighting');
Route::get('/food-products',[HomeController::class,'food_products'])->name('food.products');

Route::get('/metal-fabrication-products',[HomeController::class,'metal_fabrication_products'])->name('metal.products');

Route::get('/offers',[HomeController::class,'offers'])->name('offers');
Route::get('/contact-us',[HomeController::class,'contact'])->name('contact');

 Route::get('/checkout/{id}/{slug}',[HomeController::class,'checkout'])->name('checkout');
 Route::post('/checkout',[HomeController::class,'checkout_post'])->name('checkout.post');








Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
    Route::post('/ajaxRequest', [AjaxController::class, 'cars'])->name('ajaxRequest.post');
 Route::resource('dashboard', DashboardController::class, ['names' => 'dashboard']);
 Route::resource('booking', BookingController::class, ['names' => 'booking']);


});
// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
 Route::resource('dashboard', AdminDashboardController::class,['names' => 'admin.dashboard']);

 Route::resource('category', CategoryController::class,['names' => 'admin.category']);
 Route::resource('offers', OfferControlelr::class,['names' => 'admin.offers']);
 Route::resource('checkout', CheckoutController::class,['names' => 'admin.checkout']);
//  Route::resource('package', PackageController::class,['names' => 'admin.package']);
//  Route::resource('plans', PlansController::class,['names' => 'admin.plans']);


//  Route::get('/options-list/{id}',[OptionController::class,'options'])->name('admin.option.index');
//  Route::get('/options/create/{id}',[OptionController::class,'options_add'])->name('admin.option.create');
// Route::post('/options/store',[OptionController::class,'store'])->name('admin.option.store');
// Route::get('/options/edit/{id}',[OptionController::class,'edit'])->name('admin.option.edit');
// Route::put('/options/update/{id}',[OptionController::class,'update'])->name('admin.option.update');
// Route::delete('/options/delete/{id}',[OptionController::class,'destroy'])->name('admin.option.delete');


// Route::resource('archanai', ArchanaiController::class,['names' => 'admin.archanai']);

// Route::resource('homam-parikaram', HomamController::class,['names' => 'admin.homam']);
// Route::resource('vasthu', VasthuController::class,['names' => 'admin.vasthu']);
// Route::resource('rituals-for-ancestors', RitualController::class,['names' => 'admin.ritual']);

});


Route::group(['middleware' => 'prevent-back-history'],function(){
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
