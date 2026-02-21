@extends("base")
@section("content")
<div class="ms-hero-page-override ms-hero-img-city ms-hero-bg-primary">
    <div class="container">
        <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Our Students <span class="color-warning">Feedback</span>
            </h1>
            <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 fw-300 animated fadeInUp animation-delay-7">"See what students wanna say about <span class="color-warning">our training...</span>"</p>
            <button type="button" class="btn btn-info btn-raised" data-bs-toggle="modal" data-bs-target="#myModal5"> Submit a new Feedback<div class="ripple-container"></div></button>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-hero animated slideInUp animation-delay-8 mb-6">
                <ul class="ms-timeline">
                    @forelse($feedbacks as $key => $feedback)
                    <li class="ms-timeline-item wow materialUp">
                        <div class="ms-timeline-date">
                            <time class="timeline-time" datetime="">{{ $feedback->feedback_date->format('Y') }} <span>{{ $feedback->feedback_date->format('M, d') }}</span></time>
                            <i class="ms-timeline-point"></i>
                        </div>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Trainer: {{ $feedback->trainer_name }}</h3>
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote blockquote-color-bg-light withripple">
                                    {{ $feedback->feedback }}
                                    <div class="text-end">{{ $feedback->student_name }}<br>{{ $feedback->location }}, {{ $feedback->country }}</div>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    @empty
                    @endforelse
                </ul>
            </div>
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-warning">
                    <div class="d-flex justify-content-center">
                        {!! $feedbacks->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="modal modal-info" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel6">Submit your Feedback</h3>
            </div>
            {{ html()->form('POST')->route('submit.feedback.form')->attribute("id", "contact-form")->open() }}
            <input type="hidden" name="stype" value="1">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="student_name" id="txt-student" placeholder="Student Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="trainer_name" id="txt-trainer" placeholder="Trainer Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            {{ html()->select("course_id", $courses->pluck("name", "id"), NULL)->class("form-control")->placeholder("Select Course")->required() }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <textarea class="form-control" rows="3" name="feedback" id="txt-feedback" placeholder="Feedback" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="msg-feed"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn  btn-info btn-submit">Submit Feedback</button>
            </div>
            {{ html()->form()->close() }}
        </div>
    </div>
</div>
@endsection