<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;


Route::get('/cc', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    echo "Cache Cleared";
});


Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('service/{slug}', 'serviceDetail');
        Route::get('/provider-onboard-step-one','stepOne');
        Route::post('/store-onboard-step-one','storeStepOne');
        Route::get('/provider-onboard-step-two/{id}','stepTwo');
        Route::post('/store-onboard-step-two','storeStepTwo');

        Route::get('/thank-you', [HomeController::class, 'thankYou'])->name('thankyou.page');
        Route::get('/about-us','aboutUs');
        Route::get('/privacy-policy','privacyPolicy');
        Route::get('/terms','termsCondition');

        Route::get('/contact-us','contactUs');
        Route::post('/contact-us/store','contactUsStore')->name('contact.store');

    });



    

Route::get('admin/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
