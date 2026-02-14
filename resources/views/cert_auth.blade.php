@extends("base")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card animated fadeInUp animation-delay-7 color-primary withripple">
                <div class="card-block-big color-dark">
                    <div class="text-center">
                        <h1 class="color-primary">Certificate of Authenticity</h1>
                    </div>
                </div>
            </div>
            <div class="card animated fadeInUp animation-delay-9 color-primary withripple">
                <div class="card-block-big color-dark text-center list-group-item withripple">
                    <p class="text-primary"><u>Student Name</u>
                    <p>
                        <strong class="color-warning">{{ strtoupper($certificate->student_name) }}</strong>

                    <p class="text-primary"><u>Course Details</u>
                    <p>
                        <strong class="color-warning">{{ $courses }}</strong>
                    <p class="text-primary"><u>Certificate ID</u>
                    <p>
                        <strong class="color-warning">{{ $certificate->course->code . $certificate->cert_id }}</strong>
                    <p class="text-primary"><u>Course Completed On</u>
                    <p>
                        <strong class="color-warning">{{ strtoupper($certificate->created_at_formt('m-d-Y')) }}</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection