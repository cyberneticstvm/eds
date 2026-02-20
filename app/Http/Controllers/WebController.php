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
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

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
        $title = "SQL Server DBA, Azure Fabric & AWS Training | Daniel AG (MCT USA)";
        $description = "Live instructor-led SQL Server DBA, Azure Fabric, Azure SQL, AWS & Azure AI training by USA-based Microsoft Certified Trainer Daniel AG. Hands-on labs, recordings & real-world projects.";
        $keywords = "";
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Empire Data Systems LLC',
            'url' => 'https://empiredatasystems.com',
            'logo' => 'https://empiredatasystems.com/assets/img/favicon.png',
        ];
        return view('index', compact('title', 'description', 'keywords', 'schema'));
    }

    function about()
    {
        $title = "About Empire Data Systems | SQL, Azure & AI Training Experts USA";
        $description = "Empire Data Systems provides instructor-led SQL Server, Azure, Fabric & AI training in the USA. Led by Microsoft Certified Trainer Daniel AG with 15+ years of industry experience.";
        $keywords = "";
        $schema = [];
        return view('about', compact('title', 'description', 'keywords', 'schema'));
    }

    function why_we_are()
    {
        $title = "Why Our Training Is THE BEST in the USA | Daniel AG (MCT)";
        $description = "Learn why Daniel AG delivers SQL Server, Azure, Azure Fabric & AI training from the USA. Supporting American IT professionals with live online classes aligned to the US job market";
        $keywords = "";
        $schema = [];
        return view('faqs.why_we_are', compact('title', 'description', 'keywords', 'schema'));
    }

    function why_online_training()
    {
        $title = "Benefits of Live Online SQL & Azure Training in USA";
        $description = "Advance your IT career with live online SQL Server, Azure, AWS & Fabric training. Designed for USA professionals with evening Classes, labs and real-world projects.";
        $keywords = "";
        $schema = [];
        return view('faqs.why_online_training', compact('title', 'description', 'keywords', 'schema'));
    }

    function how_to_find()
    {
        $title = "How to Find a Good SQL & Azure Trainer | USA IT Professionals Guide";
        $description = "Learn how to choose the right SQL Server, Azure or AI trainer in the USA. Discover key factors like certifications, experience, hands-on labs and real-world expertise.";
        $keywords = "";
        $schema = [];
        return view('faqs.how_to_find', compact('title', 'description', 'keywords', 'schema'));
    }

    function why_dba_and_bi()
    {
        $title = "SQL Server DBA, Azure Fabric & AWS Training | Daniel AG (MCT USA)";
        $description = "Live instructor-led SQL Server DBA, Azure Fabric, Azure SQL, AWS & Azure AI training by USA-based Microsoft Certified Trainer Daniel AG. Hands-on labs, recordings & real-world projects.";
        $keywords = "";
        $schema = [];
        return view('faqs.why_dba_and_bi', compact('title', 'description', 'keywords', 'schema'));
    }

    function sql_server_jobs()
    {
        $title = "SQL Server DBA, Azure Fabric & AWS Training | Daniel AG (MCT USA)";
        $description = "Live instructor-led SQL Server DBA, Azure Fabric, Azure SQL, AWS & Azure AI training by USA-based Microsoft Certified Trainer Daniel AG. Hands-on labs, recordings & real-world projects.";
        $keywords = "";
        $schema = [];
        return view('faqs.sql_server_jobs', compact('title', 'description', 'keywords', 'schema'));
    }

    function sql_training_db_concept()
    {
        $title = "SQL Database Concepts Training USA | SQL Fundamentals Course";
        $description = "Learn SQL database concepts including tables, keys, normalization & joins. Live instructor-led SQL fundamentals training in the USA by Daniel AG, Microsoft Certified Trainer (MCT)";
        $keywords = "";
        $schema = [];
        return view('faqs.sql_training_db_concept', compact('title', 'description', 'keywords', 'schema'));
    }

    function data_wh_concept()
    {
        $title = "Data Warehousing Fundamentals & ETL Training USA";
        $description = "Master data warehouse fundamentals, ETL processes, star schema & dimensional modeling. Live online training for USA professionals by Microsoft Certified Trainer Daniel AG";
        $keywords = "";
        $schema = [];
        return view('faqs.data_wh_concept', compact('title', 'description', 'keywords', 'schema'));
    }

    function sql_server_dba()
    {
        $title = "SQL Server DBA, Azure SQL & SQL Training | Daniel AG (MCT USA)";
        $description = "Live instructor-led SQL Server DBA, Azure SQL DBA & SQL Programming training by USA-based Microsoft Certified Trainer Daniel AG. Hands-on labs, recordings & real-world projects";
        $keywords = "";
        $schema = [];
        $feedbacks = StudentFeedback::where('course_id', 1)->where("status", 12)->latest()->paginate(25);
        return view('courses.sql_server_dba', compact('title', 'description', 'keywords', 'feedbacks', 'schema'));
    }

    function sql_server_bi()
    {
        $title = "SSIS, SSRS, SSAS & Power BI Training USA | SQL Server BI Course";
        $description = "Live instructor-led SQL Server Business Intelligence (SSIS, SSRS, SSAS & Power BI) training for USA professionals. Hands-on labs, real-world projects & career-focused BI development skills.";
        $keywords = "";
        $schema = [];
        $feedbacks = StudentFeedback::where('course_id', 2)->where("status", 12)->latest()->paginate(25);
        return view('courses.sql_server_bi', compact('title', 'description', 'keywords', 'feedbacks', 'schema'));
    }

    function azure_admin()
    {
        $title = "Microsoft Azure Administration (AZ-104) Training USA | Daniel AG (MCT)";
        $description = "Live instructor-led Microsoft Azure Administration (AZ-104) training for USA professionals. Hands-on labs, real-world scenarios & AZ-104 certification exam preparation by MCT Daniel AG.";
        $keywords = "";
        $schema = [];
        $feedbacks = StudentFeedback::where('course_id', 4)->where("status", 12)->latest()->paginate(25);
        return view('courses.azure_admin', compact('title', 'description', 'keywords', 'feedbacks', 'schema'));
    }

    function azure_fabric()
    {
        $title = "Microsoft Fabric (DP-600 & DP-700) Training USA | Data Engineering Course";
        $description = "Live instructor-led Microsoft Fabric training for DP-600 & DP-700 certification. Covers Data Factory, Databricks & Lakehouse architecture with hands-on labs for USA professionals.";
        $keywords = "";
        $schema = [];
        $feedbacks = StudentFeedback::where('course_id', 5)->where("status", 12)->latest()->paginate(25);
        return view('courses.azure_fabric', compact('title', 'description', 'keywords', 'feedbacks', 'schema'));
    }

    function azure_ai()
    {
        $title = "Microsoft Azure AI Engineer (AI-102) Training USA | Certification Course";
        $description = "Live instructor-led Microsoft Azure AI Engineer (AI-102) training for USA professionals. Hands-on labs, real-world AI solutions & certification exam preparation.";
        $keywords = "";
        $schema = [];
        $feedbacks = StudentFeedback::where('course_id', 16)->where("status", 12)->latest()->paginate(25);
        return view('courses.azure_ai', compact('title', 'description', 'keywords', 'feedbacks', 'schema'));
    }

    function aws_solution()
    {
        $title = "AWS Solutions Architect (SAA-C03) Training USA | Associate Certification";
        $description = "Live instructor-led AWS Solutions Architect Associate (SAA-C03) training for USA professionals. Hands-on labs, real-world architecture scenarios & certification exam preparation.";
        $keywords = "";
        $schema = [];
        $feedbacks = StudentFeedback::where('course_id', 7)->where("status", 12)->latest()->paginate(25);
        return view('courses.aws_solution', compact('title', 'description', 'keywords', 'feedbacks', 'schema'));
    }

    function videos()
    {
        $title = "Watch Live SQL & Azure Training Videos | Daniel AG (MCT USA)";
        $description = "Preview real live SQL Server, Azure, AWS & Azure Fabric classes delivered by Microsoft Certified Trainer Daniel AG. See our interactive, hands-on teaching approach before enrolling";
        $keywords = "";
        $schema = [];
        return view('videos', compact('title', 'description', 'keywords', 'schema'));
    }

    function student_feedbacks()
    {
        $title = "Student Testimonials | SQL, Azure, AWS & Fabric Training USA";
        $description = "Read real feedback from USA professionals trained by Daniel AG (MCT). Reviews on SQL Server, Azure, Fabric & AI courses with hands-on, instructor-led learning.";
        $keywords = "";
        $feedbacks = StudentFeedback::where("status", 12)->latest()->paginate(25);
        $courses = $this->courses;
        $schema = [];
        return view('feedbacks', compact('title', 'description', 'keywords', 'feedbacks', 'courses', 'schema'));
    }

    function blogs()
    {
        $title = "SQL Server DBA, Azure Fabric & AWS Blog | Daniel AG (MCT USA)";
        $description = "Live instructor-led SQL Server DBA, Azure Fabric, Azure SQL, AWS & Azure AI training by USA-based Microsoft Certified Trainer Daniel AG. Hands-on labs, recordings & real-world projects.";
        $keywords = "";
        $blogs = Blog::latest()->paginate(15);
        $schema = [];
        return view('blogs', compact('title', 'description', 'keywords', 'blogs', 'schema'));
    }

    function blog_details(int $id, string $title)
    {
        $blog = Blog::findOrFail($id);
        $title = "SQL Server DBA, Azure Fabric & AWS Blog | Daniel AG (MCT USA)";
        $description = $blog->title;
        $keywords = "";
        $schema = [];
        return view('blog', compact('title', 'description', 'keywords', 'blog', 'schema'));
    }

    function contact()
    {
        $title = "Contact Daniel AG | SQL, Azure & Cloud Training USA";
        $description = "Contact Daniel AG (MCT USA) for SQL Server, Azure, Fabric & AI training. Reach out for course details, enrollment assistance and live instructor-led training schedules.";
        $keywords = "";
        $schema = [];
        return view('contact', compact('title', 'description', 'keywords', 'schema'));
    }

    function refund_policy()
    {
        $title = "Refund Policy | Empire Data Systems USA";
        $description = "Review our refund policy for SQL Server, Azure, Fabric & AI training programs. Transparent enrollment and refund terms for USA professionals training with Daniel AG (MCT).";
        $keywords = "";
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "WebPage",
            "name" => "Refund Policy",
            "about" => "Training enrollment refund policy",
            "publisher" => [
                "@type" => "Organization",
                "name" => "Empire Data Systems"
            ]
        ];
        return view('policy.refund', compact('title', 'description', 'keywords', 'schema'));
    }

    function privacy_policy()
    {
        $title = "Privacy Policy | Empire Data Systems USA";
        $description = "Read our privacy policy for SQL Server, Azure, Fabric & AI training programs. Learn how we collect, use and protect personal information of our students.";
        $keywords = "";
        $schema = [];
        return view('policy.privacy', compact('title', 'description', 'keywords', 'shema'));
    }

    function terms_of_service()
    {
        $title = "Terms & Conditions | Empire Data Systems USA";
        $description = "Official terms and conditions governing SQL Server, Azure, Fabric & AI training programs offered in the USA by Empire Data Systems and Microsoft Certified Trainer Daniel AG.";
        $keywords = "";
        $schema = [];
        return view('policy.terms', compact('title', 'description', 'keywords', 'schema'));
    }

    function student_feedback()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $courses = $this->courses;
        $countries = Country::all();
        $schema = [];
        return view('forms.feedback', compact('title', 'description', 'keywords', 'courses', 'countries', 'schema'));
    }

    function student_details()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $courses = $this->courses;
        $countries = Country::all();
        $schema = [];
        return view('forms.student', compact('title', 'description', 'keywords', 'courses', 'countries', 'schema'));
    }

    function referral()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $courses = $this->courses;
        $schema = [];
        return view('forms.referral', compact('title', 'description', 'keywords', 'courses', 'schema'));
    }

    function message()
    {
        $title = "SQL Server, Azure, AWS Training - Empire Data Systems";
        $description = "Training in SQL Server DBA,SQL,TSQL,SSIS, Power BI,Azure Administration, Azure Data Engineering, Dev(Sec)Ops - By Daniel AG";
        $keywords = "SQL Server Database Administartion Training, SQL Server Business Intelligence Training, SQL Server Training, SQL Server DBA Training, MSBI Training, Azure Data Engineering Training,Dev(Sec)Ops Training";
        $schema = [];
        return view('message', compact('title', 'description', 'keywords', 'schema'));
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
        if ($request->submit_type == 11):
            $inputs = $request->validate([
                'contact_name' => 'required',
                'contact_email' => 'required|email',
                'contact_phone' => 'required',
                'submit_type' => 'required',
            ]);
            $stype = "Course Enquiry";
        endif;
        if ($request->submit_type == 10):
            $inputs = $request->validate([
                'contact_name' => 'required',
                'contact_email' => 'required|email',
                'contact_phone' => 'required',
                'message' => 'required',
                'submit_type' => 'required',
            ]);
            $stype = "Contact";
        endif;
        //FormSubmit::create($inputs);
        $data = [
            "stype" => $stype,
            "name" => $request->contact_name ?? "NA",
            "email" => $request->contact_email,
            "phone" => $request->contact_phone ?? "NA",
            "message" => $request->message ?? "NA"
        ];
        try {
            Mail::to($this->admin_email)->send(new FormSubmitNotificationEmail($data));
        } catch (TransportExceptionInterface $e) {
            return redirect()->back()->with("message", $e->getMessage());
        }

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
        //Referral::create($inputs);
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
