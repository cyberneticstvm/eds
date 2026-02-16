<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('about-us.html', 'about')->name('about');
        Route::get('our-live-class-videos.html', 'videos')->name('videos');
        Route::get('students-feedback.html', 'student_feedbacks')->name('student.feedbacks');
        Route::get('sql-server-training-blogs.html', 'blogs')->name('blogs');
        Route::get('blog/{id}/{title}', 'blog_details')->name('blog.details');
        Route::get('contact-us.html', 'contact')->name('contact');
        Route::get('certificate-authentication/{id}', 'cert_auth')->name('cert.auth');
        Route::get('message', 'message')->name('message');
        Route::get('sitemap.xml', 'sitemap')->name('sitemap');
        Route::get('robots.txt', 'robots')->name('robots');
    });
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('why-we-are-in-usa.html', 'why_we_are')->name('faq.why.we.are');
        Route::get('why-online-training.html', 'why_online_training')->name('faq.why.online.training');
        Route::get('how-to-find-good-trainer.html', 'how_to_find')->name('faq.how.to.find');
        Route::get('why-dba-bi-career.html', 'why_dba_and_bi')->name('faq.why.dba.and.bi');
        Route::get('sql-server-jobs.html', 'sql_server_jobs')->name('faq.sql.server.jobs');
        Route::get('sql-training-database-concept.html', 'sql_training_db_concept')->name('faq.sql.training.db.concept');
        Route::get('data-warehouse-concept.html', 'data_wh_concept')->name('faq.data.wh.concept');
    });
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('sql-server-dba-training.html', 'sql_server_dba')->name('course.sql.dba');
        Route::get('sql-server-bi-training.html', 'sql_server_bi')->name('course.sql.bi');
        Route::get('microsoft-azure-training.html', 'azure_admin')->name('course.azure.admin');
        Route::get('microsoft-azure-fabric-training.html', 'azure_fabric')->name('course.azure.fabric');
        Route::get('microsoft-azure-ai-solution-training.html', 'azure_ai')->name('course.azure.ai');
        Route::get('aws-solutions-architect-associate-training.html', 'aws_solution')->name('course.aws.solution');
    });
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('refund-policy.html', 'refund_policy')->name('refund.policy');
        Route::get('privacy-policy.html', 'privacy_policy')->name('privacy.policy');
        Route::get('terms-and-conditions.html', 'terms_of_service')->name('terms.of.service');
    });
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('student-feedback.html', 'student_feedback')->name('feedback');
        Route::get('student-details.html', 'student_details')->name('student.details');
        Route::get('referral.html', 'referral')->name('referral');
    });
    Route::prefix('form')->controller(WebController::class)->group(function () {
        Route::post('submit', 'submit_form')->name('submit.form');
        Route::post('submit-feedback', 'submit_feedback_form')->name('submit.feedback.form');
        Route::post('submit-referral', 'submit_referral_form')->name('submit.referral.form');
    });
});
