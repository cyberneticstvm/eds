@extends("base")
@section("content")
<div class="ms-hero-page ms-hero-img-keyboard ms-hero-bg-primary mb-6">
    <div class="container">
        <div class="text-center">
            <span class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 mt-2 animated zoomInDown animation-delay-5">E</span>
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Daniel's Technical <span class="color-warning">Blog</span></h1>
            <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 fw-300 animated fadeInUp animation-delay-7">Follow our blog and discover the latest content and trends in <span class="color-warning">Database and Cloud</span> worlds.
                <span class="colorStar"></span>
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @forelse($blogs as $key => $blog)
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 1.5rem">
                        <i class="zmdi zmdi-library"></i>{{ $blog->title }}
                    </h3>
                </div>
                <div class="card-block text-center">
                    <p>{{ Str::limit($blog->intro, 250, '...') }}</p>
                    <a href="{{ route('blog.details', ['id' => $blog->id, 'title' => Str::replace(' ', '-', $blog->title)]) }}" class="btn-raised" target="_blank">
                        <i class="zmdi zmdi-map"></i> View More</a>
                </div>
            </div>
        </div>
        @empty
        @endforelse
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-square pagination-warning">
                        <div class="d-flex justify-content-center">
                            {!! $blogs->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection