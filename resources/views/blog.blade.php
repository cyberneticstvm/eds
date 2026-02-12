@extends("base")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card animated materialUp animation-delay-5">
                <div class="card-block card-block-big" ng-app="blogApp" ng-controller="blogCtrl">
                    <h1 class="no-mt ">{{ $blog->title }}</h1>
                    <div class="mb-4 ">
                        <img src="{{ asset('/assets/img/demo/daniel50.jpg') }}" alt="Daniel AG" class="img-circle mr-1 "> by <a href="javascript:void(0) ">{{ $blog->author }}</a>
                        <span class="ml-1 hidden-xs "><i class="zmdi zmdi-time mr-05 color-info "></i> <span class="color-medium-dark ">{{ $blog->created_at->format('M d, Y') }}</span></span>
                        <span class="ml-1 "><i class="zmdi zmdi-star color-warning mr-05 "></i><i class="zmdi zmdi-star color-warning mr-05 "></i><i class="zmdi zmdi-star color-warning mr-05 "></i><i class="zmdi zmdi-star color-warning mr-05 "></i><i class="zmdi zmdi-star color-warning mr-05 "></i></span>
                    </div>
                    <div class="blog">
                        {!! $blog->content !!}
                    </div>
                    <hr class="dotted">
                    <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Statistics Says It All</h2>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="panel panel panel-info panel-dark text-center">
                                <div class="panel-body">
                                    <h2 class="counter">16</h2>
                                    <i class="fa fa-4x fa-coffee"></i>
                                    <p class="mt-2 no-mb lead small-caps">Years of Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="panel panel panel-danger panel-dark text-center">
                                <div class="panel-body">
                                    <h2 class="counter">3000</h2>
                                    <i class="fa fa-4x fa-heart"></i>
                                    <p class="mt-2 no-mb lead small-caps">Gratified Students</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="panel panel panel-warning panel-dark text-center">
                                <div class="panel-body">
                                    <h2 class="counter">100</h2>
                                    <i class="fa fa-4x fa-briefcase"></i>
                                    <p class="mt-2 no-mb lead small-caps">Training Batches</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="panel panel panel-success panel-dark text-center">
                                <div class="panel-body">
                                    <h2 class="counter">9600</h2>
                                    <i class="fa fa-4x fa-group"></i>
                                    <p class="mt-2 no-mb lead small-caps">Training Hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="dotted">
                    <div class="row contact">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <div class="card animated fadeInUp animation-delay-9 color-primary withripple">
                                <div class="card-block-big color-dark">
                                    <h2 class="color-primary text-center">Subscribe</h2>
                                    <p class="lead text-center">Please subscribe our technical blog to get recent updates.</p>
                                    {{ html()->form('POST')->route('submit.form')->open() }}
                                    <input type="hidden" name="submit_type" value="17" />
                                    <div class="form-group label-floating m-5">
                                        <label class="control-label" for="addon2">Enter your email</label>
                                        <input type="email" name="contact_email" id="txt-subscribe" class="form-control" required>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-raised btn-submit">
                                            <i class="zmdi zmdi-email"></i> Subscribe</button>
                                    </div>
                                    {{ html()->form()->close() }}
                                    <div class="msg-sub"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection