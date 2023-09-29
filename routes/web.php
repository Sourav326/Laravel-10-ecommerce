<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;


//Frontend Routes START ******************************************************

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/privacy-policy',[PageController::class,'privacyPolicy'])->name('privacyPolicy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [OtpController::class, 'profile'])->name('user.profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('isLogin')->group(function () {
    Route::post('verify-mail',[OtpController::class,'login'])->name('user.sverifymail');
    Route::post('register-mail',[OtpController::class,'register'])->name('user.register');
});
Route::match(['get', 'post'],'verify-otp',[OtpController::class,'verifyOTP'])->name('user.verifyotp');
Route::get('resend-otp/{id}',[OtpController::class,'resendVerifyOTP'])->name('user.sendOtp');
Route::get('logout',[OtpController::class,'logout'])->name('user.logout');

Route::get('showView',[OtpController::class,'showView'])->name('showView');

Route::get('brand/{id}',[App\Http\Controllers\BrandController::class,'show'])->name('brand.show');


//Frontend Routes END ******************************************************





//Admin Routes START ******************************************************

Route::prefix('admin')->group(function () {
    
    Route::middleware('admin')->group(function(){
        Route::get('dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
        Route::get('logout',[AdminController::class,'logout'])->name('admin.logout');
        Route::match(['get', 'post'],'update-profile',[AdminController::class,'update'])->name('admin.profile.update');
        Route::post('update-image',[AdminController::class,'updateImage'])->name('admin.profile.updateImage');
        
        Route::match(['get', 'post'],'create-vendor',[AdminController::class,'createVendor'])->name('admin.vendor.create');
        
        //BRANDS
        Route::match(['get', 'post'],'brands/create',[BrandController::class,'create'])->name('admin.brands.create');
        Route::get('brands',[BrandController::class,'index'])->name('admin.brands');
        Route::get('brands/status/{id}',[BrandController::class,'updateStatus'])->name('admin.brands.updateStatus');
        Route::get('brands-category',[BrandController::class,'indexCategory'])->name('admin.brands.catgory');
        Route::match(['get', 'post'],'brands/category/create',[BrandController::class,'createCategory'])->name('admin.brands.category.create');
        Route::get('brand/category/{id}',[BrandController::class,'categoryDestroy'])->name('admin.brands.catgory.delete');
        
    });
    
    
    Route::match(['get', 'post'], 'login', [AdminController::class,'login'])->name('admin.login');
});


//Admin Routes END ******************************************************