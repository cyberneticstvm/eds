<div class="collapse navbar-collapse" id="ms-navbar">
    <ul class="navbar-nav">
        <li class="nav-item {{ (in_array(Route::currentRouteName(), ['index'])) ? 'active' : '' }}">
            <a href="{{ route('index') }}" class="animated fadeIn animation-delay-7" data-name="home">Home</a>
        </li>
        <li class="nav-item {{ (in_array(Route::currentRouteName(), ['about'])) ? 'active' : '' }}">
            <a href="{{ route('about') }}" class="animated fadeIn animation-delay-7" data-name="about">About Us</a>
        </li>
        <li class="nav-item dropdown {{ (in_array(Route::currentRouteName(), ['faq.why.we.are', 'faq.why.online.training', 'faq.how.to.find', 'faq.why.dba.and.bi', 'faq.sql.server.jobs', 'faq.sql.training.db.concept', 'faq.data.wh.concept'])) ? 'active' : '' }}">
            <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-bs-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Faqs <i class="zmdi zmdi-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('faq.why.we.are') }}" class="dropdown-link">WHY WE ARE #1 IN USA?</a></li>
                <li><a class="dropdown-item" href="{{ route('faq.why.online.training') }}" class="dropdown-link">WHY ONLINE TRAINING?</a></li>
                <li><a class="dropdown-item" href="{{ route('faq.how.to.find') }}" class="dropdown-link">HOW TO FIND A GOOD TRAINER?</a></li>
                <li><a class="dropdown-item" href="{{ route('faq.why.dba.and.bi') }}" class="dropdown-link">WHY DBA AND BI CAREER?</a></li>
                <li><a class="dropdown-item" href="{{ route('faq.sql.server.jobs') }}" class="dropdown-link">SQL SERVER JOBS</a></li>
                <li><a class="dropdown-item" href="{{ route('faq.sql.training.db.concept') }}" class="dropdown-link">SQL TRAINING DATABASE CONCEPT</a></li>
                <li><a class="dropdown-item" href="{{ route('faq.data.wh.concept') }}" class="dropdown-link">DATA WAREHOUSE CONCEPT</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown {{ (in_array(Route::currentRouteName(), ['course.sql.dba', 'course.sql.bi', 'course.azure.admin', 'course.azure.fabric', 'course.azure.ai', 'course.aws.solution'])) ? 'active' : '' }}">
            <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-bs-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Courses <i class="zmdi zmdi-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('course.sql.dba') }}" class="dropdown-link">SQL SERVER DBA + TSQL PROGRAMMING</a></li>
                <li><a class="dropdown-item" href="{{ route('course.sql.bi') }}" class="dropdown-link">SQL SERVER BI(SSIS, SSAS, SSRS, POWER BI, MDX, TA, DW, DAX)</a></li>
                <li><a class="dropdown-item" href="{{ route('course.azure.admin') }}" class="dropdown-link">MICROSOFT AZURE ADMINISTRATION</a></li>
                <li><a class="dropdown-item" href="{{ route('course.azure.fabric') }}" class="dropdown-link">MICROSOFT AZURE FABRIC AND DATA ENGINEERING TRAINING</a></li>
                <li><a class="dropdown-item" href="{{ route('course.azure.ai') }}" class="dropdown-link">MICROSOFT AZURE AI SOLUTION</a></li>
                <li><a class="dropdown-item" href="{{ route('course.aws.solution') }}" class="dropdown-link">AWS SOLUTIONS ARCHITECT ASSOCIATE</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="animated fadeIn animation-delay-7" data-name="video">Videos</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('student.feedbacks') }}" class="animated fadeIn animation-delay-7" data-name="feedback">Student Feedback</a>
        </li>
        <li class="nav-item">
            <a href="#" class="animated fadeIn animation-delay-7" data-name="blog">Blogs</a>
        </li>
        <li class="nav-item">
            <a href="#" class="animated fadeIn animation-delay-7" data-name="contact">Contact Us</a>
        </li>
    </ul>
</div>