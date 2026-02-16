<?php

namespace App\Http\Controllers;

use App\Mail\FormSubmitNotificationEmail;
use App\Models\Blog;
use App\Models\CertificateRequest;
use App\Models\Country;
use App\Models\Course;
use App\Models\FormSubmit;
use App\Models\Referral;
use App\Models\StudentFeedback;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stevebauman\Location\Facades\Location;

class WebController extends Controller
{
    private $courses, $admin_email;
    function __construct()
    {
        $this->admin_email = "vijoysasidharan@yahoo.com";
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
        $courses = $this->courses;
        return view('feedbacks', compact('title', 'description', 'keywords', 'feedbacks', 'courses'));
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
        $stype = "";
        if ($request->submit_type == 17):
            $inputs = $request->validate([
                'contact_email' => 'required|email',
                'submit_type' => 'required',
            ]);
            $stype = "Subscription";
        endif;
        if ($request->submit_type == 10):
            $inputs = $request->validate([
                'contact_name' => 'required',
                'contact_email' => 'required|email',
                'contact_phone' => 'required',
                'submit_type' => 'required',
            ]);
            $stype = "Course Enquiry";
        endif;
        if ($request->submit_type == 11):
            $inputs = $request->validate([
                'contact_name' => 'required',
                'contact_email' => 'required|email',
                'contact_phone' => 'required',
                'message' => 'required',
                'submit_type' => 'required',
            ]);
            $stype = "Contact";
        endif;
        FormSubmit::create($inputs);
        $data = [
            "stype" => $stype,
            "name" => $request->contact_name ?? "NA",
            "email" => $request->contact_email,
            "phone" => $request->contact_phone ?? "NA",
            "message" => $request->message ?? "NA"
        ];
        Mail::to($this->admin_email)->send(new FormSubmitNotificationEmail($data));
        return redirect()->route('message');
    }

    function submit_feedback_form(Request $request)
    {
        $inputs = $request->validate([
            'student_name' => 'required',
        ]);
        if ($request->stype == 1 || $request->stype == 2):
            $location = Location::get($request->ip);
            $inputs["trainer_name"] = $request->trainer_name;
            $inputs["course_id"] = $request->course_id;
            $inputs["feedback"] = $request->feedback;
            $inputs["rating"] = 5;
            $inputs["feedback_date"] = Carbon::now();
            $inputs["status"] = 13; // Pending
            $inputs["ip_address"] = $location->ip;
            $inputs["location"] = $location->regionName;
            $inputs["country"] = $location->countryName;
            StudentFeedback::create($inputs);
        endif;
        if ($request->stype == 2 || $request->stype == 3):
            CertificateRequest::create([
                "student_name" => $request->student_name,
                "student_email" => $request->student_email,
                "course_id" => $request->course_id,
                "address_1" => $request->address_1,
                "address_2" => $request->address_2,
                "city" => $request->city,
                "state" => $request->state,
                "zip_code" => $request->zip_code,
                "country" => $request->country,
                "cert_id" => uniqueId(CertificateRequest::class, "cert_id"),
                "status" => 16,
            ]);
        endif;
        return redirect()->route('message');
    }

    function submit_referral_form(Request $request)
    {
        $inputs = $request->validate([
            'student_name' => 'required',
            'student_email' => 'required|email',
            'student_phone' => 'required',
            'ref_name' => 'required',
            'ref_email' => 'required|email',
            'ref_phone' => 'required',
            'course_id' => 'required',
        ]);
        Referral::create($inputs);
        return redirect()->route('message');
    }

    function cert_auth(string $id)
    {
        $certificate = CertificateRequest::findOrFail(decrypt($id));
        $courses = Course::where("parent_id", $certificate->course_id)->pluck("name")->explode("\n");
        return view("cert_auth", compact('certificate', 'courses'));
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
