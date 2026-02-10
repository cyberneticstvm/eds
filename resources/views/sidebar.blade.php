<div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
    <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
            <div class="ms-slidebar-title">
                <div class="ms-slidebar-t">
                    <span class="ms-logo ms-logo-sm">E</span>
                    <h3>Empire<span> Data </span>Systems</h3>
                </div>
            </div>
        </header>

        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
            <li class="card" role="tab">
                <a role="button" href="{{ route('index') }}">
                    <i class="zmdi zmdi-home"></i> Home
                </a>
            </li>
            <li class="card" role="tab">
                <a role="button" href="{{ route('about') }}">
                    <i class="zmdi zmdi-account"></i> About Us
                </a>
            </li>
            <li class="card" role="tab" id="sch2">
                <a class="collapsed" role="button" data-bs-toggle="collapse" href="#sc2" aria-expanded="false" aria-controls="sc2">
                    <i class="zmdi zmdi-file"></i> FAQs
                </a>
                <ul id="sc2" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch2" data-bs-parent="#slidebar-menu">
                    <li><a href="{{ route('faq.why.we.are') }}">WHY WE ARE #1 IN USA?</a></li>
                    <li><a href="{{ route('faq.why.online.training') }}">WHY ONLINE TRAINING?</a></li>
                    <li><a href="{{ route('faq.how.to.find') }}">HOW TO FIND A GOOD TRAINER?</a></li>
                    <li><a href="{{ route('faq.why.dba.and.bi') }}">WHY DBA AND BI CAREER?</a></li>
                    <li><a href="{{ route('faq.sql.server.jobs') }}">SQL SERVER JOBS</a></li>
                    <li><a href="{{ route('faq.sql.training.db.concept') }}">SQL TRAINING DATABASE CONCEPT</a></li>
                    <li><a href="{{ route('faq.data.wh.concept') }}">DATA WAREHOUSE CONCEPT</a></li>
                </ul>
            </li>
            <li class="card" role="tab" id="sch3">
                <a class="collapsed" role="button" data-bs-toggle="collapse" href="#sc3" aria-expanded="false" aria-controls="sc3">
                    <i class="zmdi zmdi-text-format"></i> Courses
                </a>
                <ul id="sc3" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch3" data-bs-parent="#slidebar-menu">
                    <li><a href="page-about.html">SQL SERVER DBA + TSQL PROGRAMMING</a></li>
                    <li><a href="page-team.html">SQL SERVER BI(SSIS, SSAS, SSRS, POWER BI, MDX, TA, DW, DAX)</a></li>
                    <li><a href="page-product.html">MICROSOFT AZURE ADMINISTRATION</a></li>
                    <li><a href="page-services.html">MICROSOFT AZURE FABRIC AND DATA ENGINEERING TRAINING</a></li>
                    <li><a href="page-faq.html">MICROSOFT AZURE AI SOLUTION</a></li>
                    <li><a href="page-timeline_left.html">AWS SOLUTIONS ARCHITECT ASSOCIATE</a></li>
                </ul>
            </li>
            <li class="card" role="tab">
                <a role="button">
                    <i class="zmdi zmdi-play"></i> Videos
                </a>
            </li>
            <li class="card" role="tab">
                <a role="button">
                    <i class="zmdi zmdi-copy"></i> Student Feedback
                </a>
            </li>
            <li class="card" role="tab">
                <a role="button">
                    <i class="zmdi zmdi-border-color"></i> Blogs
                </a>
            </li>
            <li class="card" role="tab">
                <a role="button">
                    <i class="zmdi zmdi-phone-msg"></i> Contact Us
                </a>
            </li>
        </ul>


        <div class="ms-slidebar-social ms-slidebar-block">
            <h4 class="ms-slidebar-block-title">Social Links</h4>
            <div class="ms-slidebar-social">
                <a href="https://www.facebook.com/empiredatasystems/" class="btn-circle btn-circle-raised btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                    <div class="ripple-container"></div>
                </a>
                <a href="https://www.linkedin.com/in/danielthedba" class="btn-circle btn-circle-raised btn-twitter">
                    <i class="zmdi zmdi-linkedin"></i>
                    <div class="ripple-container"></div>
                </a>
                <a href="https://www.youtube.com/user/EmpireDataSystems" class="btn-circle btn-circle-raised btn-google">
                    <i class="zmdi zmdi-youtube"></i>
                    <div class="ripple-container"></div>
                </a>
            </div>
        </div>
    </div>
</div>