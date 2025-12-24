<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAccountController;
use App\Http\Controllers\AdminController;


Route::middleware('auth')->group(function () {
    
    Route::controller(AdminController::class)->group(function () {
        Route::group(['prefix'=>"admin"], function(){    
       
            Route::get('/dashboard', 'mydashboard')->name('dashboard');
        
            Route::get('/providers', 'providers')->name('providers');
            Route::get('/providers/{id}', 'providersDetails')->name('providers.view');
            Route::get('/enquiry', 'enquiry')->name('enquiry');
            Route::get('/enquiry/{id}', 'enquiryView')->name('enquiry.view');
            Route::post('/enquiry/{id}/update-status', 'updateStatus')->name('enquiry.updateStatus');


            Route::get('/services', 'services');
            Route::get('/add-service', 'addService');
            Route::post('/store-service', 'storeService');
            Route::get('/service/{id}', 'viewService');
            Route::post('/service-update', 'updateService');


            Route::post('/provider/admin/action', 'providerAdminAction');


        });
    });
});

