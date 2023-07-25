<?php

use Hamiddj\ContactUs\Controllers\User\ContactController;
use Hamiddj\ContactUs\Controllers\Admin\ContactController as AdminContactController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'],function(){
   Route::group(['prefix' => 'admin','middleware' => ['auth:'.(config('smartticket.user_guard') ?? 'web')]],function(){
      Route::get('contact-us',[AdminContactController::class,'index']);
      Route::get('contact-us/{id}',[AdminContactController::class,'show']);
   });
   Route::get('contact-us',[ContactController::class,'create']);
   Route::post('contact-us',[ContactController::class,'store']);
});