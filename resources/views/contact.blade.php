@extends("base")
@section("content")
<div class="ms-hero-page-override ms-hero-img-city ms-hero-bg-primary">
    <div class="container">
        <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Contact <span class="color-warning">Us</span>
            </h1>
            <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 fw-300 animated fadeInUp animation-delay-7">"We are your mentor, guide and a very good friend who wants to show you the best direction in IT Domain" -<span class="color-warning"> Daniel AG</span></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="card card-hero animated slideInUp animation-delay-8 mb-6">
        <div class="card-block">
            <div class="row">
                <div class="col-md-6 text-justify">
                    <p class="dropcaps">We want to talk to every single student personally, and guide every student properly. We are your mentor, guide and a very good friend who wants to show you the best direction in the IT industry. Please Contact Us <span class="color-warning">ANY TIME</span> if:</p>
                    <div class="list-group">
                        <a href="javascript:void(0)" class="list-group-item withripple">
                            <i class="color-primary zmdi zmdi-library"></i>You are already working in the IT industry but have lost direction</a>
                        <a href="javascript:void(0)" class="list-group-item withripple">
                            <i class="color-info zmdi zmdi-eye"></i>You want to earn more in the IT industry</a>
                        <!--<a href="javascript:void(0)" class="list-group-item withripple">
						<i class="color-warning zmdi zmdi-globe"></i>You want to progress faster in your career in terms of promotions</a>-->
                        <a href="javascript:void(0)" class="list-group-item withripple">
                            <i class="color-danger zmdi zmdi-toll"></i>You are planning to start a career in the IT industry and don't know what's the best way to begin</a>
                        <a href="javascript:void(0)" class="list-group-item withripple">
                            <i class="color-success zmdi zmdi-nature"></i>You have questions about our comprehensive training programs</a>
                    </div>
                    <div class="card card-info">
                        <div class="card-header">
                            <p class="text-center">Please Call / E-mail me directly Or use the Contact Form.</p>
                        </div>
                        <div class="list-group">
                            <a href="tel: +12677181533" class="list-group-item withripple">
                                <i class="color-primary zmdi zmdi-phone"></i><span class="color-primary">267.718.1533</span></a>
                            <a href="mailto: ag.daniel@empiredatasystems.com" class="list-group-item withripple">
                                <i class="color-success zmdi zmdi-email"></i><span class="color-success">ag.daniel@empiredatasystems.com</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-primary animated fadeInUp animation-delay-7">
                        <div class="ms-hero-bg-primary ms-hero-img-mountain">
                            <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Contact Us</h2>
                        </div>
                        <div class="card-block">
                            {{ html()->form('POST')->route('submit.form')->class("form-horizontal")->open() }}
                            <input type="hidden" name="submit_type" value="10" />
                            <fieldset>
                                <div class="form-group is-empty">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="inputName" name="contact_name" id="txt-name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group is-empty">
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" name="contact_email" id="txt-email" id="inputEmail" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group is-empty">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="contact_phone" id="txt-phone" id="inputSubject" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="form-group is-empty">
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="3" name="message" id="txt-msg" id="textArea" placeholder="Your message..." required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4 text-center">
                                        <button type="submit" class="btn btn-raised btn-primary btn-submit">Submit</button>
                                        <button type="button" class="btn btn-danger">Cancel</button>
                                    </div>
                                    <div class='msg-contact'></div>
                                </div>
                            </fieldset>
                            {{ html()->form()->close() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card card-primary animated fadeInUp animation-delay-7">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="zmdi zmdi-map"></i>Map
                        </h3>
                    </div>
                    <iframe width="100%" height="340" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3053.8883097822695!2d-75.66905608430145!3d40.05559338544685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6f4d7dbb2cddd%3A0x48a7cb19aeb1af1b!2s256%20Eagleview%20Blvd%2C%20Exton%2C%20PA%2019341%2C%20USA!5e0!3m2!1sen!2sin!4v1633318634528!5m2!1sen!2sin"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection