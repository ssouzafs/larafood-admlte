<?php

use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::controller(PlanController::class)->group(function() {
        Route::get('/planos', 'index')->name('plans.index');
    });

});

