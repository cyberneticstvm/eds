<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="theme-color" content="#333">

    <title>{{ $title ?? '' }}</title>
    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW" />

    <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.png?v=3') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{ asset('/assets/css/preload.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/plugins.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/style.light-blue-800.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/magnific-popup/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">


    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CBVC95RKEN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-CBVC95RKEN');
    </script>

    <script type="text/javascript">
        _linkedin_partner_id = "2494370";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script>
    <script type="text/javascript">
        (function() {
            var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";
            b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);
        })();
    </script>
    <noscript>
        <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2494370&fmt=gif" />
    </noscript>
    @if(!empty($schema))
    <x-schema :schema="$schema" />
    @endif

</head>

<body>


    <div id="ms-preload" class="ms-preload">
        <div id="status">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>

    <div class="ms-site-container">

        <header class="ms-header ms-header-primary"> <!--ms-header-primary-->
            <div class="container container-full">
                <div class="ms-title">
                    <a href="{{ route('index') }}">
                        <!-- <img src="assets/img/demo/logo-header.png" alt=""> -->
                        <span class="ms-logo animated zoomInDown animation-delay-5">E</span>
                        <h1 class="animated fadeInRight animation-delay-6">Empire <span>Data Systems</span></h1>
                    </a>
                </div>
                <div class="header-right">
                    <div class="share-menu">
                        <ul class="share-menu-list">
                            <li class="animated fadeInRight animation-delay-3">
                                <a href="https://www.youtube.com/user/EmpireDataSystems" class="btn-circle btn-youtube" target="_blank">
                                    <i class="zmdi zmdi-youtube"></i>
                                </a>
                            </li>
                            <li class="animated fadeInRight animation-delay-2">
                                <a href="https://www.facebook.com/empiredatasystems/" class="btn-circle btn-facebook" target="_blank">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                            </li>
                            <li class="animated fadeInRight animation-delay-1">
                                <a href="https://www.linkedin.com/in/danielthedba" class="btn-circle btn-linkedin" target="_blank">
                                    <i class="zmdi zmdi-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7"><i class="zmdi zmdi-share"></i></a>
                    </div>

                    <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left animated zoomInDown animation-delay-10"><i class="zmdi zmdi-menu"></i></a>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-primary">
            <div class="container container-full">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
                        <span class="ms-logo ms-logo-sm">E</span>
                        <span class="ms-title">Empire <strong>Data Systems</strong></span>
                    </a>
                </div>

                @include("nav")
                <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu"><i class="zmdi zmdi-menu"></i></a>
            </div> <!-- container -->
        </nav>

        @yield("content")

        <aside class="ms-footbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ms-footer-col">
                        <div class="ms-footbar-block">
                            <h3 class="ms-footbar-title">Sitemap</h3>
                            <ul class="list-unstyled ms-icon-list three_cols">
                                <li>
                                    <a href="{{ route('index') }}">
                                        <i class="zmdi zmdi-home"></i> Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">
                                        <i class="zmdi zmdi-edit"></i>About Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('faq.why.we.are') }}">
                                        <i class="zmdi zmdi-image-o"></i>FAQs</a>
                                </li>
                                <li>
                                    <a href="{{ route('course.sql.dba') }}">
                                        <i class="zmdi zmdi-case"></i>Courses</a>
                                </li>
                                <li>
                                    <a href="{{ route('videos') }}">
                                        <i class="zmdi zmdi-time"></i>Videos</a>
                                </li>
                                <li>
                                    <a href="{{ route('student.feedbacks') }}">
                                        <i class="zmdi zmdi-money"></i>Feedback</a>
                                </li>
                                <li>
                                    <a href="{{ route('blogs') }}">
                                        <i class="zmdi zmdi-favorite-outline"></i>Blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">
                                        <i class="zmdi zmdi-accounts"></i>Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ms-footbar-block">
                            <h3 class="ms-footbar-title">Subscribe</h3>
                            <p class="">Your career is your responsibility. Please subscribe and stay in touch. Call me directly @ <a href="tel: +1267 718 1533" class='color-warning'>267 718 1533</a> with any of your questions - Daniel AG</p>
                            {{ html()->form('POST')->route('submit.form')->attribute("id", "contact-form")->open() }}
                            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                            <input type="hidden" name="submit_type" value="17" />
                            <div class="form-group label-floating mt-2 mb-1">
                                <div class="input-group ms-input-subscribe">
                                    <label class="control-label" for="ms-subscribe">
                                        <i class="zmdi zmdi-email"></i> Email Adress</label>
                                    <input type="email" name="contact_email" id="contact_email" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="ms-subscribre-btn btn-submit">Subscribe</button>
                            {{ html()->form()->close() }}
                            <div class="msg-sub"></div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-7 ms-footer-col ms-footer-alt-color">
                        <div class="ms-footbar-block">
                            <h3 class="ms-footbar-title text-center mb-2">Contact Daniel</h3>
                            <div class="ms-footer-media">
                                <div class="card-block">
                                    {{ html()->form('POST')->route('submit.form')->attribute("id", "contact-form")->open() }}
                                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                    <input type="hidden" name="submit_type" value="10" />
                                    <fieldset class="text-left">
                                        <div class="form-group is-empty">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="contact_name" id="txt-name" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <div class="col-md-12">
                                                <input type="email" class="form-control" name="contact_email" id="txt-email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="contact_phone" id="txt-phone" placeholder="Phone" required>
                                            </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <div class="col-md-12">
                                                <textarea class="form-control" rows="5" name="message" id="txt-msg" placeholder="Your message..." required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 col-md-offset-3 text-center">
                                                <button type="submit" class="btn btn-raised btn-primary btn-submit">Submit</button>
                                                <button type="button" name="btn-cancel" id="btn-cancel" class="btn btn-raised btn-danger">Cancel</button>
                                            </div>
                                            <div class='msg-contact'></div>
                                        </div>
                                    </fieldset>
                                    {{ html()->form()->close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5 ms-footer-col text-right">
                        <div class="ms-footbar-block">
                            <div class="ms-footbar-title ">
                                <span class="ms-logo ms-logo-white ms-logo-sm mr-1">E</span>
                                <h3 class="no-m ms-site-title">Empire Data Systems
                                    <span></span>
                                </h3>
                            </div>
                            <address class="no-mb">
                                <p>
                                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i>Empire Data Systems LLC
                                </p>
                                <p>256 Eagleview Blvd #387</p>
                                <p>Exton, PA 19341, USA</p>
                                <p>
                                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+1 267 718 1533
                                </p>
                                <p>
                                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                                    <a href="mailto:ag.daniel@empiredatasystems.com">ag.daniel@empiredatasystems.com</a>
                                </p>
                            </address>
                        </div>
                        <div class="ms-footbar-block">
                            <h3 class="ms-footbar-title">Social Media</h3>
                            <div class="ms-footbar-social">
                                <a href="https://www.facebook.com/empiredatasystems/" class="btn-circle btn-facebook" target="_blank">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                                <a href="https://www.youtube.com/user/EmpireDataSystems" class="btn-circle btn-youtube" target="_blank">
                                    <i class="zmdi zmdi-youtube"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/danielthedba" class="btn-circle btn-linkedin" target="_blank">
                                    <i class="zmdi zmdi-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <footer class="ms-footer">
            <div class="container">
                <div class="policy"><a href="{{ route('refund.policy') }}" class="text-white">Refund Policy</a> | <a href="{{ route('privacy.policy') }}" class="text-white">Privacy Policy</a> | <a href="{{ route('terms.of.service') }}" class="text-white">Terms of Service</a></div>
                <p>Copyright &copy; Empire Data Systems 2000-{{ date('Y') }}. All rights reserved.</p>
            </div>
        </footer>

        <div class="btn-back-top">
            <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised "><i class="zmdi zmdi-long-arrow-up"></i></a>
        </div>

    </div> <!-- ms-site-container -->

    @include("sidebar")

    <script src="{{ asset('/assets/js/plugins.min.js') }}"></script>

    <script src="{{ asset('/assets/js/app.min.js') }}"></script>

    <script src="{{ asset('/assets/js/pie.js') }}"></script>

    <script src="{{ asset('/assets/js/index.js') }}"></script>

    <script src="{{ asset('/assets/magnific-popup/jquery.magnific-popup.js') }}"></script>

    <script src="https://www.google.com/recaptcha/api.js?render={{ config('myconfig.captcha.sitekey') }}"></script>

    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('form').submit(function() {
                $(this).find(".btn-submit").attr("disabled", true);
                $(this).find(".btn-submit").html("Loading...<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>");
            });
        });
    </script>

    <script type="text/javascript">
        var $zoho = $zoho || {};
        $zoho.salesiq = $zoho.salesiq || {
            widgetcode: "e3c9e8ecee50e16e18ef92e231b4702d5e396c37cabfd717fd0fc1dbcabda217d38371123591d7b5fffe6abfafc2c261",
            values: {},
            ready: function() {}
        };
        var d = document;
        s = d.createElement("script");
        s.type = "text/javascript";
        s.id = "zsiqscript";
        s.defer = true;
        s.src = "https://salesiq.zoho.com/widget";
        t = d.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(s, t);
        d.write("<div id='zsiqwidget'></div>");
    </script>
    <script type="text/javascript">
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    </script>
    <script>
        document.getElementById("contact-form").addEventListener("submit", function(e) {
            e.preventDefault();

            grecaptcha.ready(function() {
                grecaptcha.execute("{{ config('myconfig.captcha.sitekey') }}", {
                    action: 'submit'
                }).then(function(token) {
                    document.getElementById('g-recaptcha-response').value = token;
                    document.getElementById("contact-form").submit();
                });
            });
        });
    </script>
</body>

</html>