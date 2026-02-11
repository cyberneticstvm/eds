@extends("base")
@section("content")
<div class="ms-hero-page-override ms-hero-img-city ms-hero-bg-primary">
    <div class="container">
        <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Mailing Address - <span class="color-warning"> Student Course Complete </span>Certificate
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
            <form class="form-horizontal">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel6">Mailing Address - Course Complete Certificate</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="txt-student" id="txt-student" placeholder="Student Name" required>
                        </div>
                        <div class="col-md-4">
                            {{ html()->select("course", $courses->pluck("name", "id"), NULL)->class("form-control")->placeholder("Select Course") }}
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" name="txt-email-id" id="txt-email-id" placeholder="Email" required>
                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" name="txt-addr1" id="txt-addr1" placeholder="Address1" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="txt-addr2" id="txt-addr2" placeholder="Address2">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="txt-city" id="txt-city" placeholder="City" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="txt-state" id="txt-state" placeholder="State" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="txt-zip" id="txt-zip" placeholder="Zip Code" required>
                        </div>
                        <div class="col-md-4">
                            {{ html()->select("country", $countries->pluck("name", "id"), NULL)->class("form-control")->placeholder("Select Country") }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-end">
                            <button type="submit" id="btn-submit" class="btn btn-info">Submit Details</button>
                        </div>
                    </div>
                    <div class="msg-cert"></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection