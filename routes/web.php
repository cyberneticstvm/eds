<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('about', 'about')->name('about');
        Route::get('student-feedbacks', 'student_feedbacks')->name('student.feedbacks');
    });
    Route::prefix('faqs')->controller(WebController::class)->group(function () {
        Route::get('why-we-are-number-one-in-usa', 'why_we_are')->name('faq.why.we.are');
        Route::get('why-online-training', 'why_online_training')->name('faq.why.online.training');
        Route::get('how-to-find-a-good-trainer', 'how_to_find')->name('faq.how.to.find');
        Route::get('why-dba-and-bi-career', 'why_dba_and_bi')->name('faq.why.dba.and.bi');
        Route::get('sql-server-jobs', 'sql_server_jobs')->name('faq.sql.server.jobs');
        Route::get('sql-server-training-database-concept', 'sql_training_db_concept')->name('faq.sql.training.db.concept');
        Route::get('data-warehouse-concept', 'data_wh_concept')->name('faq.data.wh.concept');
    });
});
