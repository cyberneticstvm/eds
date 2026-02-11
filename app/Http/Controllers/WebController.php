<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Country;
use App\Models\Course;
use App\Models\FormSubmit;
use App\Models\StudentFeedback;
use Illuminate\Http\Request;

class WebController extends Controller
{
    private $courses;
    function __construct()
    {
        $this->courses = Course::where("status", 1)->whereIn('id', [1, 2, 4, 5, 7, 16])->get();
    }
    function index()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('index', compact('title', 'description', 'keywords'));
    }

    function about()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('about', compact('title', 'description', 'keywords'));
    }

    function why_we_are()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('faqs.why_we_are', compact('title', 'description', 'keywords'));
    }

    function why_online_training()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('faqs.why_online_training', compact('title', 'description', 'keywords'));
    }

    function how_to_find()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('faqs.how_to_find', compact('title', 'description', 'keywords'));
    }

    function why_dba_and_bi()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('faqs.why_dba_and_bi', compact('title', 'description', 'keywords'));
    }

    function sql_server_jobs()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('faqs.sql_server_jobs', compact('title', 'description', 'keywords'));
    }

    function sql_training_db_concept()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('faqs.sql_training_db_concept', compact('title', 'description', 'keywords'));
    }

    function data_wh_concept()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('faqs.data_wh_concept', compact('title', 'description', 'keywords'));
    }

    function sql_server_dba()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $feedbacks = StudentFeedback::where('course_id', 1)->where("status", 12)->latest()->paginate(25);
        return view('courses.sql_server_dba', compact('title', 'description', 'keywords', 'feedbacks'));
    }

    function sql_server_bi()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $feedbacks = StudentFeedback::where('course_id', 2)->where("status", 12)->latest()->paginate(25);
        return view('courses.sql_server_bi', compact('title', 'description', 'keywords', 'feedbacks'));
    }

    function azure_admin()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $feedbacks = StudentFeedback::where('course_id', 4)->where("status", 12)->latest()->paginate(25);
        return view('courses.azure_admin', compact('title', 'description', 'keywords', 'feedbacks'));
    }

    function azure_fabric()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $feedbacks = StudentFeedback::where('course_id', 5)->where("status", 12)->latest()->paginate(25);
        return view('courses.azure_fabric', compact('title', 'description', 'keywords', 'feedbacks'));
    }

    function azure_ai()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $feedbacks = StudentFeedback::where('course_id', 16)->where("status", 12)->latest()->paginate(25);
        return view('courses.azure_ai', compact('title', 'description', 'keywords', 'feedbacks'));
    }

    function aws_solution()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $feedbacks = StudentFeedback::where('course_id', 7)->where("status", 12)->latest()->paginate(25);
        return view('courses.aws_solution', compact('title', 'description', 'keywords', 'feedbacks'));
    }

    function videos()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('videos', compact('title', 'description', 'keywords'));
    }

    function student_feedbacks()
    {
        $title = "Empire Data Systems | Student Feedback";
        $description = "SQL Server Training - Hosted By Daniel AG, 16 Years Experienced Data Architect - 90 Hours - $750 per Student";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, SQL Server BI Training, SQL Server Performance Tuning Training, Hadoop Training, Bigdata Training, SSAS Training, SSRS Training, SSIS Training";
        $feedbacks = StudentFeedback::where("status", 12)->latest()->paginate(25);
        return view('feedbacks', compact('title', 'description', 'keywords', 'feedbacks'));
    }

    function blogs()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $blogs = Blog::latest()->paginate(15);
        return view('blogs', compact('title', 'description', 'keywords', 'blogs'));
    }

    function blog_details(int $id, string $title)
    {
        $blog = Blog::findOrFail($id);
        $title = $blog->title;
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('blog', compact('title', 'description', 'keywords', 'blog'));
    }

    function contact()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('contact', compact('title', 'description', 'keywords'));
    }

    function refund_policy()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('policy.refund', compact('title', 'description', 'keywords'));
    }

    function privacy_policy()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('policy.privacy', compact('title', 'description', 'keywords'));
    }

    function terms_of_service()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('policy.terms', compact('title', 'description', 'keywords'));
    }

    function student_feedback()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $courses = $this->courses;
        $countries = Country::all();
        return view('forms.feedback', compact('title', 'description', 'keywords', 'courses', 'countries'));
    }

    function student_details()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $courses = $this->courses;
        $countries = Country::all();
        return view('forms.student', compact('title', 'description', 'keywords', 'courses', 'countries'));
    }

    function referral()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $courses = $this->courses;
        return view('forms.referral', compact('title', 'description', 'keywords', 'courses'));
    }

    function message()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        return view('message', compact('title', 'description', 'keywords'));
    }

    function submit_form(Request $request)
    {
        if ($request->submit_type == 17):
            $inputs = $request->validate([
                'contact_email' => 'required|email',
                'submit_type' => 'required',
            ]);
        endif;
        if ($request->submit_type == 10):
            $inputs = $request->validate([
                'contact_name' => 'required',
                'contact_email' => 'required|email',
                'contact_phone' => 'required',
                'submit_type' => 'required',
            ]);
        endif;
        if ($request->submit_type == 11):
            $inputs = $request->validate([
                'contact_name' => 'required',
                'contact_email' => 'required|email',
                'contact_phone' => 'required',
                'message' => 'required',
                'submit_type' => 'required',
            ]);
        endif;
        FormSubmit::create($inputs);
        return redirect()->route('message');
    }

    function sitemap()
    {
        return response()->view('sitemap')->header('Content-Type', 'text/xml');
    }

    function robots()
    {
        return response()->view('robots')->header('Content-Type', 'text/plain');
    }
}
