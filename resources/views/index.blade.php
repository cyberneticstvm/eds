@extends("base")
@section("content")
<div class="ms-hero ms-hero-material">
    <span class="ms-hero-bg"></span>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7">
                <div id="carousel-hero" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div data-bs-interval="5000" class="carousel-item active">
                            <div class="carousel-caption">
                                <div class="ms-hero-material-text-container">
                                    <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                                        <h1 class="animated fadeInLeft animation-delay-15 font-smoothing"><strong class="color-info">Daniel AG</strong></h1>
                                        <h2 class="animated fadeInLeft animation-delay-18">#1 <span class="color-warning">Microsoft Azure, SQL Server AI and AWS Trainer</span> in USA !!!.</h2>
                                    </header>

                                    <ul class="ms-hero-material-list">
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                                                <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp"><i class="zmdi zmdi-city"></i></span>
                                            </div>

                                            <div class="animated fadeInRight animation-delay-19">US Based Database/Azure/AWS/AI Architect with 16 Years’ Extensive Experience in Database Administration, SQL Programming, Business Intelligence Development, Azure Administration, Azure Fabric and Data Engineering etc..</div>
                                        </li>
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                                                <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="zmdi zmdi-local-activity"></i></span>
                                            </div>

                                            <div class="animated fadeInRight animation-delay-21">Trained 3000+ Students Across US and Canada, Consistently Exceeding Student’s Expectations. Daniel’s 90 Hours Live Interactive Online Training cost only $750 per student.</div>
                                        </li>
                                        <li class="">
                                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                                                <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp"><i class="zmdi zmdi-album"></i></span>
                                            </div>

                                            <div class="animated fadeInRight animation-delay-23">Call Daniel Directly @ <a href='tel:+12677181533'><span class="color-warning"> 267 718 1533</span></a> for Your Training Needs and Career Goals.</div>
                                        </li>
                                    </ul>
                                    <div class="ms-hero-material-buttons text-right">
                                        <div class="ms-hero-material-buttons text-right">
                                            <a href="#know" class="btn btn-success btn-raised animated fadeInRight animation-delay-24"><i class="zmdi zmdi-download"></i> View More</a>
                                        </div>
                                    </div>
                                </div> <!-- ms-hero-material-text-container -->
                            </div>
                        </div>
                        <div class="carousel-controls">
                            <!-- Controls -->
                            <a class="left carousel-control animated zoomIn animation-delay-30" role="button" data-bs-target="#carousel-hero" data-bs-slide="prev">
                                <i class="zmdi zmdi-chevron-left"></i>
                                <span class="visually-hidden">Previous</span>
                            </a>

                            <a class="right carousel-control animated zoomIn animation-delay-30" role="button" data-bs-target="#carousel-hero" data-bs-slide="next">
                                <i class="zmdi zmdi-chevron-right"></i>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-6 col-lg-5">
                <div class="ms-hero-img animated zoomInUp animation-delay-30">
                    <img src="{{ asset('/assets/img/demo/mock-imac-material2.png') }}" alt="Empire Data System Defaul Video" class="img-fluid">

                    <div class="card" style="position: absolute;top: 12%;left: 6%;width: 90%;height: 61%; background-color: revert;">
                        <div class="js-player" data-plyr-provider="youtube" data-plyr-embed-id="FCZSA_RDyXU"></div>
                    </div>
                    <!-- <div id="carousel-hero-img" class="carousel carousel-fade slide" data-bs-ride="carousel" data-bs-interval="3000">


                        <ol class="carousel-indicators carousel-indicators-hero-img">
                            <li data-bs-target="#carousel-hero-img" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carousel-hero-img" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carousel-hero-img" data-bs-slide-to="2"></li>
                        </ol>



                        <div class="carousel-inner" role="listbox">
                            <div data-bs-interval="3000" class="ms-hero-img-slider carousel-item active">
                                <img src="" alt="" class="img-fluid">
                            </div>
                            <div data-bs-interval="3000" class="ms-hero-img-slider carousel-item">
                                <img src="" alt="" class="img-fluid">
                            </div>
                            <div data-bs-interval="3000" class="ms-hero-img-slider carousel-item">
                                <img src="" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div> <!-- container -->
</div> <!-- ms-hero ms-hero-black -->

<div id="know" class="container mt-4">
    <div class="row">
        <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Know Our Comprehensive Training Programs</h2>
        <div class="ms-feature col-lg-4 col-md-6 col-sm-6 card wow flipInX animation-delay-4">
            <div class="text-center card-block">
                <span class="ms-icon ms-icon-circle ms-icon-xxlg color-muted">
                    <i class="zmdi zmdi-desktop-mac"></i>
                </span>
                <h4 class="color-primary">SQL Server DBA + SQL Programming + Azure SQL Training</h4>
                <p class="">100 hour comprehensive training covering both database administration and TSQL Programming...</p>
                <a href="{{ route('course.sql.dba') }}" class="btn btn-primary btn-raised">Know More</a>
            </div>
        </div>
        <div class="ms-feature col-lg-4 col-md-6 col-sm-6 card wow flipInX animation-delay-8">
            <div class="text-center card-block">
                <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">
                    <i class="zmdi zmdi-cloud-outline"></i>
                </span>
                <h4 class="color-warning">SQL Server BI Training + Power BI Training</h4>
                <p class="">70 hour comprehensive training covering SSIS, SSAS, MDX, SSRS, Power BI and Data Warehousing...</p>
                <a href="{{ route('course.sql.bi') }}" class="btn btn-warning btn-raised">Know More</a>
            </div>
        </div>
        <div class="ms-feature col-lg-4 col-md-6 col-sm-6 card wow flipInX animation-delay-6">
            <div class="text-center card-block">
                <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-danger">
                    <i class="zmdi zmdi-file-text"></i>
                </span>
                <h4 class="color-danger">Microsoft Azure Administration Training</h4>
                <p class="">50 hour comprehensive training on Implementation, Management and Monitoring of Microsoft Azure Assets.</p>
                <a href="{{ route('course.azure.admin') }}" class="btn btn-danger btn-raised">Know More</a>
            </div>
        </div>
        <div class="ms-feature col-lg-4 col-md-6 col-sm-6 card wow flipInX animation-delay-10">
            <div class="text-center card-block">
                <span class="ms-icon ms-icon-circle ms-icon-xxlg color-royal">
                    <i class="zmdi zmdi-loupe"></i>
                </span>
                <h4 class="color-royal">Microsoft Azure Fabric<br> and Data Engineering</h4>
                <p class="">40-hour comprehensive training covering Azure Databricks, Delta Lake, Data Factory, Synapse, HDInsight,...</p>
                <a href="{{ route('course.azure.fabric') }}" class="btn btn-royal btn-raised">Know More</a>
            </div>
        </div>
        <div class="ms-feature col-lg-4 col-md-6 col-sm-6 card wow flipInX animation-delay-10">
            <div class="text-center card-block">
                <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">
                    <i class="zmdi zmdi-chart-donut"></i>
                </span>
                <h4 class="color-warning">AWS Solutions Architect Associate</h4>
                <p class="">Our AWS Solutions Architect – Associate course is intended for every aspersing individual who want to learn and perform an ..</p>
                <a href="{{ route('course.aws.solution') }}" class="btn btn-warning btn-raised">Know More</a>
            </div>
        </div>
        <div class="ms-feature col-lg-4 col-md-6 col-sm-6 card wow flipInX animation-delay-10">
            <div class="text-center card-block">
                <span class="ms-icon ms-icon-circle ms-icon-xxlg color-white">
                    <i class="zmdi zmdi-loupe"></i>
                </span>
                <h4 class="color-primary">Microsoft Azure AI Engineering</h4>
                <p class="">Azure AI Services are transforming what was once considered unachievable into attainable projects. In this course, ...</p>
                <a href="{{ route('course.azure.ai') }}" class="btn btn-primary btn-raised">Know More</a>
            </div>
        </div>
    </div>
</div>
<div class="wrap mt-6" style="background-color:#0277bd;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="card animated fadeInUp animation-delay-7">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('/assets/img/demo/daniel-message.jpg') }}" alt="Message From Daniel AG" class="img-responsive">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-block pt-4 text-justify">
                                <h3 class="color-primary">Message From Daniel AG</h3>
                                <p class="dropcaps ">Hello students, I am Daniel AG, founder of Empire Data Systems LLC. I started my career as an SQL Server programmer way back in 1996 and I worked my way up in database domain. Today, I am working as Data Architect in Health Care Domain near Philadelphia, USA.</p>
                                <p>I have attended numerous training programs as part of my professional career and most of them turned out to be below my expectations. In most cases, trainers did not have real-time experiences; they were not able to answer or understand questions based on real-time scenarios. Those subjective experiences led me to recognize the need for training programs conducted by IT professionals who have real-world experience and have a passion for teaching. That is why I started my own database training programs. In short, teaching is an art which I do very well.</p>
                                <p>As a part-time trainer, I am guided by my passion for teaching and willingness to help students even after the training. My philosophy embedded into my program is that theory is important, but real-time scenarios and hands-on coding are essential to gaining skills needed to work successfully in the IT world.</p>
                                <p>One key element to a successful IT career is how early you get trained in latest technologies. The more you wait, the higher the competition you are going to address.</p>
                                <p>After all, your career is all about what you know and how well you market it.</p>
                                <p>Please call me directly at 267.718.1533, and I would be more than happy to talk to you about your career goals and training needs.</p>
                                <div class="pull-right"><img src="{{ asset('/assets/img/demo/signature-daniel.jpg') }}" class="img-responsive" alt="Signature"></div>
                                <a href="https://www.facebook.com/empiredatasystems/" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook" target="_blank">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                                <a href="https://www.youtube.com/user/EmpireDataSystems" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-youtube" target="_blank">
                                    <i class="zmdi zmdi-youtube"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/danielthedba" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-linkedin" target="_blank">
                                    <i class="zmdi zmdi-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
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
                    <h2 class="counter">3671</h2>
                    <i class="fa fa-4x fa-heart"></i>
                    <p class="mt-2 no-mb lead small-caps">Gratified Students</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="panel panel panel-warning panel-dark text-center">
                <div class="panel-body">
                    <h2 class="counter">112</h2>
                    <i class="fa fa-4x fa-briefcase"></i>
                    <p class="mt-2 no-mb lead small-caps">Training Batches</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="panel panel panel-success panel-dark text-center">
                <div class="panel-body">
                    <h2 class="counter">9634</h2>
                    <i class="fa fa-4x fa-group"></i>
                    <p class="mt-2 no-mb lead small-caps">Training Hours</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Daniel’s Coaching Team </h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-warning wow zoomInUp animation-delay-5" style="visibility: visible; animation-name: zoomInUp;">
                <div class="withripple zoom-img">
                    <a href="javascript:void()" class="">
                        <img src="{{ asset('/assets/img/demo/daniel.jpg') }}" alt="Daniel AG" class="img-fluid">
                    </a>
                </div>
                <div class="card-block">
                    <span class="badge badge-warning pull-right">Data Architect</span>
                    <h3 class="color-warning">Daniel AG</h3>
                    <p>Daniel has 16 years’ extensive experience in SQL Server Administration, SQL Programming, Business Intelligence Development (SSAS, SSIS, SSRS), Data Visualization (Power BI) and Performance Tuning. Daniels’s diverse experience has given him a wide understanding of how Data Design, Data Architecture, Data Management, Data Administration, Security, and System Architecture all come together forming enterprise solutions. He is currently working as a Data Architect in Health Care Industry near Philadelphia, USA.</p>
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="https://www.facebook.com/empiredatasystems/" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook" target="_blank">
                                <i class="zmdi zmdi-facebook"></i>
                            </a>
                            <a href="https://www.youtube.com/user/EmpireDataSystems" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-youtube" target="_blank">
                                <i class="zmdi zmdi-youtube"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/danielthedba" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-linkedin" target="_blank">
                                <i class="zmdi zmdi-linkedin"></i>
                            </a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="{{ route('about') }}" class="btn btn-raised btn-sm btn-warning">
                                <i class="zmdi zmdi-account"></i>Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-success wow zoomInUp animation-delay-7" style="visibility: visible; animation-name: zoomInUp;">
                <div class="withripple zoom-img">
                    <a href="javascript:void()" class="">
                        <img src="{{ asset('/assets/img/demo/Akshey_Jain.jpg') }}" alt="Akshay Jain" class="img-fluid">
                    </a>
                </div>
                <div class="card-block">
                    <span class="badge badge-success pull-right">BI Architect</span>
                    <h3 class="color-success">Akshey Jain</h3>
                    <p>Akshey has 10 years’ solid experience in SQL Server BI stack (SSAS, SSIS, SSRS, DW, Power BI) and currently working in eCommerce Domain. He has worked on major consulting assignments with organization Citi Bank, Barclays, Wachovia Corporation, Inter Public Group, C.B.R.E., Kimberly Clark and XL Insurance.</br>He has designed and developed numerous SQL Server BI applications and served as the principal interface to various business stakeholders.</p>
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="https://www.facebook.com/empiredatasystems/" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook" target="_blank">
                                <i class="zmdi zmdi-facebook"></i>
                            </a>
                            <a href="https://www.youtube.com/user/EmpireDataSystems" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-youtube" target="_blank">
                                <i class="zmdi zmdi-youtube"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/danielthedba" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-linkedin" target="_blank">
                                <i class="zmdi zmdi-linkedin"></i>
                            </a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="{{ route('about') }}" class="btn btn-raised btn-sm btn-success">
                                <i class="zmdi zmdi-account"></i>Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-royal wow zoomInUp animation-delay-9" style="visibility: visible; animation-name: zoomInUp;">
                <div class="withripple zoom-img">
                    <a href="javascript:void()" class="">
                        <img src="{{ asset('/assets/img/demo/Honey_Goyal.jpg') }}" alt="Honey Goyal" class="img-fluid">
                    </a>
                </div>
                <div class="card-block">
                    <span class="badge badge-royal pull-right">Azure Architect</span>
                    <h3 class="color-royal">Ashish Raj</h3>
                    <p>Ashish Raj is Microsoft Certified Azure Architect and has overall more than 10 years of experience in IT. He is also a Microsoft Certified Trainer, Infrastructure Engineer and Dev(Sec)Ops expert. He is an active contributor to Dev(Sec)Ops and Azure community, speaks at webinars and local meetups. Ashish has been recognized as Azure Master of the month by Microsoft and his blogs has been featured in Azure community’s news multiple times. He has also been recognized as content hero by Microsoft for his contribution to technical community.</p>
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="https://www.facebook.com/empiredatasystems/" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook" target="_blank">
                                <i class="zmdi zmdi-facebook"></i>
                            </a>
                            <a href="https://www.youtube.com/user/EmpireDataSystems" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-youtube" target="_blank">
                                <i class="zmdi zmdi-youtube"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/danielthedba" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-linkedin" target="_blank">
                                <i class="zmdi zmdi-linkedin"></i>
                            </a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="{{ route('about') }}" class="btn btn-raised btn-sm btn-royal">
                                <i class="zmdi zmdi-account"></i>Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-6">
    <div class="text-center mb-4">
        <h2 class="uppercase color-primary">See our Cost-Effective Training Fees</h2>
        <p class="lead uppercase">Surprise with our unique features</p>
    </div>
    <div class="row">
        <div class="col-md-4 price-table price-table-info wow zoomInUp animation-delay-2">
            <header class="price-table-header">
                <span class="price-table-category">SQL Server DBA + Azure SQL + TSQL Programming</span>
                <h3>
                    <sup>$</sup>750
                    <sub>/Student</sub>
                </h3>
            </header>
            <div class="price-table-body">
                <ul class="price-table-list">
                    <li>
                        <i class="zmdi zmdi-star"></i>100 Hours Live Training
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>Recorded Videos of Each Class
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>Reading Materials
                    </li>
                    <li>
                        <i class="zmdi zmdi-globe"></i>Lab Exercises
                    </li>
                    <li>
                        <i class="zmdi zmdi-settings"></i>Research Papers
                    </li>
                    <li>
                        <i class="zmdi zmdi-cloud"></i>Microsoft Certification Materials
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>Interview Questions
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>Resume Preparation
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>On the Job Support Assistance
                    </li>
                </ul>
                <div class="text-center">
                    <a href="{{ route('course.sql.dba') }}" class="btn btn-info btn-raised">
                        <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 price-table price-table-success prominent wow zoomInDown animation-delay-2">
            <header class="price-table-header">
                <span class="price-table-category">Microsoft Azure Fabric/Data Engineering + Power BI</span>
                <h3>
                    <sup>$</sup>750
                    <sub>/Student</sub>
                </h3>
            </header>
            <div class="price-table-body">
                <ul class="price-table-list">
                    <li>
                        <i class="zmdi zmdi-star"></i>50 Hours Live Training
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>Recorded Videos of Each Class
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>Reading Materials
                    </li>
                    <li>
                        <i class="zmdi zmdi-globe"></i>Lab Exercises
                    </li>
                    <li>
                        <i class="zmdi zmdi-settings"></i>Research Papers
                    </li>
                    <li>
                        <i class="zmdi zmdi-cloud"></i>Microsoft Certification Materials
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>Interview Questions
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>Resume Preparation
                    </li>
                    <li>
                        <i class="zmdi zmdi-cloud"></i>On the Job Support Assistance
                    </li>
                </ul>
                <div class="text-center">
                    <a href="{{ route('course.azure.fabric') }}" class="btn btn-success btn-raised">
                        <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 price-table price-table-warning wow zoomInUp animation-delay-2">
            <header class="price-table-header">
                <span class="price-table-category">Azure AI/Azure Administration/AWS</span>
                <h3>
                    <sup>$</sup>750
                    <sub>/Student</sub>
                </h3>
            </header>
            <div class="price-table-body">
                <ul class="price-table-list">
                    <li>
                        <i class="zmdi zmdi-star"></i>40 Hours Live Training
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>Recorded Videos of Each Class
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>Reading Materials
                    </li>
                    <li>
                        <i class="zmdi zmdi-globe"></i>Lab Exercises
                    </li>
                    <li>
                        <i class="zmdi zmdi-settings"></i>Research Papers
                    </li>
                    <li>
                        <i class="zmdi zmdi-cloud"></i>Microsoft Certification Materials
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>Interview Questions
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>Resume Preparation
                    </li>
                    <li>
                        <i class="zmdi zmdi-star"></i>On the Job Support Assistance
                    </li>
                </ul>
                <div class="text-center">
                    <a href="{{ route('course.azure.admin') }}" class="btn btn-warning btn-raised">
                        <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrap mt-6" style="background-color:#0277bd;">
    <h2 class="text-center no-m text-white">Our Gratified Student Responses</h2>
    <div id="carousel-example-generic" class="carousel carousel-cards carousel-fade slide" data-bs-ride="carousel" data-bs-interval="7000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel-example-generic" data-bs-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card animated flipInX animation-delay-2 mb-4">
                                    <blockquote class="blockquote blockquote-avatar withripple">
                                        <img src="{{ asset('/assets/img/demo/avatar.png') }}" alt="Empire Data System Feedback Avatar" class="avatar d-none d-sm-block">
                                        <p>Great SQL Server DBA course from Daniel!!!! Excellent material and presentations. He provided great depth on the topics that were covered and was able to discuss off-topic areas as well. His technical expertise in the area ...</p>
                                        <footer>Mike Weist</footer>
                                        <div class="col-xs-6 text-center">
                                            <a href="{{ route('student.feedbacks') }}" class="btn btn-raised btn-sm btn-primary">
                                                <i class="zmdi zmdi-account"></i>View More..</a>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card animated flipInX animation-delay-3">
                                    <blockquote class="blockquote blockquote-avatar withripple">
                                        <img src="{{ asset('/assets/img/demo/avatar.png') }}" alt="Empire Data System Feedback Avatar" class="avatar d-none d-sm-block">
                                        <p>Overall Ajay did a very good job with his instruction in a clear manner. I would recommend this course to anyone want to get in to Azure Cloud technology and grow your career. I will be interested in signing up for future classes...</p>
                                        <footer>Daniel Malik</footer>
                                        <div class="col-xs-6 text-center">
                                            <a href="{{ route('student.feedbacks') }}" class="btn btn-raised btn-sm btn-primary">
                                                <i class="zmdi zmdi-account"></i>View More..</a>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card animated flipInX animation-delay-4">
                                    <blockquote class="blockquote blockquote-avatar withripple">
                                        <img src="{{ asset('/assets/img/demo/avatar-girl.png') }}" alt="Empire Data System Feedback Avatar" class="avatar d-none d-sm-block">
                                        <p>Ajay was an excellent instructor. He was patient and supportive. I enjoyed the course and learned a lot. I highly recommend him and this course in EmpireDataSystem to anyone interested in learning Azure admin in and out...</p>
                                        <footer>Ishrat Mostafi</footer>
                                        <div class="col-xs-6 text-center">
                                            <a href="{{ route('student.feedbacks') }}" class="btn btn-raised btn-sm btn-primary">
                                                <i class="zmdi zmdi-account"></i>View More..</a>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card animated flipInX animation-delay-2 mb-4">
                                    <blockquote class="blockquote blockquote-avatar withripple">
                                        <img src="{{ asset('/assets/img/demo/avatar.png') }}" alt="Empire Data System Feedback Avatar" class="avatar d-none d-sm-block  ">
                                        <p>Awesome SQL Server Training course from Daniel. Covered all the topics from the basics. This course has given me a good foundation since I am from non-IT background. ...
                                        <footer>Hiwot Tilaye</footer>
                                        <div class="col-xs-6 text-center">
                                            <a href="{{ route('student.feedbacks') }}" class="btn btn-raised btn-sm btn-primary">
                                                <i class="zmdi zmdi-account"></i>View More..</a>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card animated flipInX animation-delay-3">
                                    <blockquote class="blockquote blockquote-avatar withripple">
                                        <img src="{{ asset('/assets/img/demo/avatar.png') }}" alt="Empire Data System Feedback Avatar" class="avatar hidden-xs">
                                        <p>I really loved learning/taking the SQL Server DBA/TSQL training course from Daniel. It was a wonderful experience. He's very Thorough, professional, personable and very friendly. ..</p>
                                        <footer>Hemant Patel</footer>
                                        <div class="col-xs-6 text-center">
                                            <a href="{{ route('student.feedbacks') }}" class="btn btn-raised btn-sm btn-primary">
                                                <i class="zmdi zmdi-account"></i>View More..</a>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card animated flipInX animation-delay-4">
                                    <blockquote class="blockquote blockquote-avatar withripple">
                                        <img src="{{ asset('/assets/img/demo/avatar.png') }}" alt="Empire Data System Feedback Avatar" class="avatar hidden-xs">
                                        <p>Deeksha and Ashish are great instructors. They explained the topics clearly and have patient in taking and answering questions. I am planning to take the exam next month...</p>
                                        <footer>Temesgen</footer>
                                        <div class="col-xs-6 text-center">
                                            <a href="{{ route('student.feedbacks') }}" class="btn btn-raised btn-sm btn-primary">
                                                <i class="zmdi zmdi-account"></i>View More..</a>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card animated flipInX animation-delay-2 mb-4">
                                    <blockquote class="blockquote blockquote-avatar withripple">
                                        <img src="{{ asset('/assets/img/demo/avatar.png') }}" alt="Empire Data System Feedback Avatar" class="avatar hidden-xs">
                                        <p>Due to the change on my work schedule I didn't attend some classes But the video records and worksheets which will be emailed for every student after the end of the class is very supportive and make ...</p>
                                        <footer>Samrawit Chernet</footer>
                                        <div class="col-xs-6 text-center">
                                            <a href="{{ route('student.feedbacks') }}" class="btn btn-raised btn-sm btn-primary">
                                                <i class="zmdi zmdi-account"></i>View More..</a>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card animated flipInX animation-delay-3">
                                    <blockquote class="blockquote blockquote-avatar withripple">
                                        <img src="{{ asset('/assets/img/demo/avatar.png') }}" alt="Empire Data System Feedback Avatar" class="avatar hidden-xs">
                                        <p>I heard you were the best trainer for SQL Server Trainer from my friend so I approached you. I completely agree with him and much more. You are the best and your SQL Server knowledge is amazing! ...</p>
                                        <footer>Praveen Reddy</footer>
                                        <div class="col-xs-6 text-center">
                                            <a href="{{ route('student.feedbacks') }}" class="btn btn-raised btn-sm btn-primary">
                                                <i class="zmdi zmdi-account"></i>View More..</a>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card animated flipInX animation-delay-4">
                                    <blockquote class="blockquote blockquote-avatar withripple">
                                        <img src="{{ asset('/assets/img/demo/avatar-girl.png') }}" alt="Empire Data System Feedback Avatar" class="avatar hidden-xs">
                                        <p>Ajaye knows Azure infrastructure very well and communicates in a more simple and articulated way. I really appreciate his patience, respect, and concern for his students as well as being very helpful. Thank you, Ajaye!... </p>
                                        <footer>Mekdes Abera</footer>
                                        <div class="col-xs-6 text-center">
                                            <a href="{{ route('student.feedbacks') }}" class="btn btn-raised btn-sm btn-primary">
                                                <i class="zmdi zmdi-account"></i>View More..</a>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control-prev btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-bs-slide="left">
            <i class="zmdi zmdi-arrow-left"></i>
        </a>
        <a class="right carousel-control-next btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-bs-slide="next">
            <i class="zmdi zmdi-arrow-right"></i>
        </a>
    </div>
</div>
<div class="container mt-6">
    <h2 class="text-center color-primary mb-4">Facts Students Should Know </h2>
    <div class="owl-dots"></div>
    <div class="owl-carousel owl-theme">
        <div class="card card-dark-inverse animation-delay-6">
            <div class="card-block">
                <h3 class="color-primary">Why we are #1 in USA?</h3>
                <p>Our founder Daniel AG believes in nothing less than perfect, and personally monitors every single course. Mr.Daniel is available to talk to you any time, </p>
                <p class="text-right">
                    <a href="{{ route('faq.why.we.are') }}" class="btn btn-primary btn-raised text-right" role="button">
                        <i class="zmdi zmdi-collection-image-o"></i> View More</a>
                </p>
            </div>
        </div>
        <div class="card animation-delay-8">
            <div class="card-block">
                <h3 class="">How to Find a Good Trainer?</h3>
                <p>The choice of a good IT trainer could make or break your IT career. If you work with a good trainer, you are bound to take your career from one success to another.</p>
                <p class="text-right">
                    <a href="{{ route('faq.how.to.find') }}" class="btn btn-info btn-raised text-right" role="button">
                        <i class="zmdi zmdi-collection-image-o"></i> View More</a>
                </p>
            </div>
        </div>
        <div class="card card-dark-inverse animation-delay-10">
            <div class="card-block">
                <h3 class="color-primary">Why DBA and Azure Career are the best?</h3>
                <p>Here are the practical reasons why the DBA/Azure profession is always “THE BEST”. Better pay, High and consistent demand in the job market</p>
                <p class="text-right">
                    <a href="{{ route('faq.why.dba.and.bi') }}" class="btn btn-primary btn-raised text-right" role="button">
                        <i class="zmdi zmdi-collection-image-o"></i> View More</a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <h2 class="text-center mb-2 wow fadeInDown color-primary animation-delay-4">Our Live Class Videos</h2>
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><i class="zmdi zmdi-graduation-cap"></i>SQL Server DBA/TSQL Training</h3>
                </div>
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=ASeF-bo6xW0"><img src="https://img.youtube.com/vi/ASeF-bo6xW0/hqdefault.jpg" class="img-fluid" /></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><i class="zmdi zmdi-graduation-cap"></i>SQL Server DBA/TSQL Training</h3>
                </div>
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=bSp6p9GwTvg"><img src="https://img.youtube.com/vi/bSp6p9GwTvg/hqdefault.jpg" class="img-fluid" /></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title"><i class="zmdi zmdi-graduation-cap"></i>SQL Server DBA/TSQL Training</h3>
                </div>
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=gIuV-qYAdm0"><img src="https://img.youtube.com/vi/gIuV-qYAdm0/hqdefault.jpg" class="img-fluid" /></a>
            </div>
        </div>
        <div class="col-md-12">
            <h5 class="text-center mb-2 wow fadeInDown animation-delay-4"><a href="{{ route('videos') }}">Watch More Videos</a></h5>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Student Demographic</h2>
            <canvas id="myChart1" width="400" height="400"></canvas>
        </div>
        <div class="col-md-8">
            <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Our Technology Proficiency</h2>
            <div class="progress progress-lg">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span>SQL Server Database Administration - 100%</span>
                </div>
            </div>
            <div class="progress progress-lg">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span>SQL Server Database Programing - 100%</span>
                </div>
            </div>
            <div class="progress progress-lg">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span>SQL Server Business Intelligence(SSIS, SSAS, SSRS, Power BI) - 100%</span>
                </div>
            </div>
            <div class="progress progress-lg">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span>SQL Server Performance Tuning - 100%</span>
                </div>
            </div>
            <div class="progress progress-lg">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span>Azure Administration - 100%</span>
                </div>
            </div>
            <div class="progress progress-lg">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span>Dev(Sec)Ops Engineering - 100%</span>
                </div>
            </div>
            <div class="progress progress-lg">
                <div class="progress-bar progress-bar-royal" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span>Microsoft Azure Data Engineering (Data Factory, Synapse Analytics, Databricks, Data Lake, Blob Storage, Azure Cosmos) - 100%</span>
                </div>
            </div>
            <div class="progress progress-lg">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span>AWS Architect - 100%</span>
                </div>
            </div>
            <div class="progress progress-lg">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span>Azure AI Engineering - 100%</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection