@extends("base")
@section("content")
<div class="ms-hero-page-override ms-hero-img-city ms-hero-bg-primary">
    <div class="container">
        <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Submit Your Feedback and
                <span class="color-warning">Mailing Address</span>
            </h1>
            <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 fw-300 animated fadeInUp animation-delay-7">Please call me directly at
                <span class="color-warning"> 267.718.1533</span>, and I would be more than happy to talk to you about your career goals and training needs.
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="card card-primary card-hero animated fadeInUp animation-delay-7">
        <div class="card-body">
            {{ html()->form('POST')->route('submit.feedback.form')->class("form-horizontal")->attribute("id", "contact-form")->open() }}
            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
            <input type="hidden" name="stype" value="2">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel6">Submit Your Feedback and Mailing Address</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="student_name" id="txt-student" placeholder="Student Name" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="trainer_name" id="txt-trainer" placeholder="Trainer Name" required>
                    </div>
                    <div class="col-md-4">
                        {{ html()->select("course_id", $courses->pluck("name", "id"), NULL)->class("form-control")->placeholder("Select Course")->required() }}
                    </div>
                    <div class="col-md-6">
                        <textarea class="form-control" rows="5" name="feedback" id="txt-feedback" placeholder="Feedback" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="email" class="form-control" name="student_email" id="txt-email-id" placeholder="Email" required>
                    </div>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="address_1" id="txt-addr1" placeholder="Address1" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="address_2" id="txt-addr2" placeholder="Address2" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="city" id="txt-city" placeholder="City" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="state" id="txt-state" placeholder="State" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="zip_code" id="txt-zip" placeholder="Zip Code" required>
                    </div>
                    <div class="col-md-4">
                        {{ html()->select("country", $countries->pluck("name", "id"), NULL)->class("form-control")->placeholder("Select Country") }}
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