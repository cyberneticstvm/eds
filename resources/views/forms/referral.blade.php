@extends("base")
@section("content")
<div class="ms-hero-page-override ms-hero-img-city ms-hero-bg-primary">
    <div class="container">
        <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Daniel's <span class="color-warning"> Student Referral</span> Program
            </h1>
            <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 fw-300 animated fadeInUp animation-delay-7">"“Get rewarded for every successful referral. The more you share, the more you earn!" -<span class="color-warning text-uppercase">Daniel</span></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="card card-primary card-hero animated fadeInUp animation-delay-7">
        <div class="card-body">
            {{ html()->form('POST')->route('submit.referral.form')->class("form-horizontal")->attribute("id", "contact-form")->open() }}
            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel6">Submit Your Referral</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <h5 class="color-primary">Your Information</h5>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="student_name" id="txt-student" placeholder="Name" required>
                    </div>
                    <div class="col-md-4">
                        <input type="email" class="form-control" name="student_email" id="txt-email-id" placeholder="Email" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="student_phone" id="txt-addr1" placeholder="Phone Number" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5 class="color-primary">Student You Are Referring</h5>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="ref_name" id="txt-student" placeholder="Name" required>
                    </div>
                    <div class="col-md-4">
                        <input type="email" class="form-control" name="ref_email" id="txt-email-id" placeholder="Email" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="ref_phone" id="txt-addr1" placeholder="Phone Number" required>
                    </div>
                    <div class="col-md-4">
                        {{ html()->select("course_id", $courses->pluck("name", "id"), NULL)->class("form-control")->placeholder("Select Course")->required() }}
                    </div>
                </div>
                <div class="row">
                    <div class="col text-end">
                        <button type="submit" class="btn btn-info btn-submit">Submit Details</button>
                    </div>
                </div>
                <div class="msg-cert"></div>
            </div>
            {{ html()->form()->close() }}
        </div>
    </div>
</div>
@endsection