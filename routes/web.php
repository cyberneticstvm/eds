<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/student-feedbacks', 'student_feedbacks')->name('student.feedbacks');
    });
});
