<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
    <head>
        <title>{{ env('APP_NAME') }}</title>
        <meta name="description" content="Rhythm &mdash; One & Multi Page Creative Template">  
        <meta charset="utf-8">
        <meta name="author" content="Aremu Adeola Abidemi(Codex)">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="{{asset('siteassets/images/tau.png')}}">

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('siteassets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('siteassets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('siteassets/css/style-responsive.css')}}">
        <link rel="stylesheet" href="{{asset('siteassets/css/vertical-rhythm.min.css')}}">
        <link rel="stylesheet" href="{{asset('siteassets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('siteassets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('siteassets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('siteassets/css/splitting.css')}}">        
    </head>
    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

        <!-- Skip to Content -->
        <a href="#main" class="btn skip-to-content">Skip to Content</a>
        <!-- End Skip to Content -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            


            <!-- Navigation panel -->
            <nav class="main-nav dark light-after-scroll transparent stick-fixed wow-menubar">
                <div class="full-wrapper relative clearfix">
                    
                     <!-- Logo ( * your text or image into link tag *) -->
                     <div class="nav-logo-wrap local-scroll">
                        <a href="#" class="logo">
                            <img src="{{asset('siteassets/images/thomas.png')}}" alt="Company logo" width="188" height="37" class="logo-white" />
                            <img src="{{asset('siteassets/images/thomas.png')}}" alt="Company logo" width="188" height="37" class="logo-dark" />
                        </a>
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <div class="mobile-nav" role="button" tabindex="0">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Menu</span>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#facility">Facility</a></li>
                            <li><a href="#contact">Contact</a></li>
                            
                            <!-- Divider -->
                            <li><a>&nbsp;</a></li>
                            <!-- End Divider -->
                            
                            <!-- Search -->
                            <li>
                                <a href="#" class="mn-has-sub"><i class="main-nav-icon-search"></i> Search</a>
                                <ul class="mn-sub">
                                    <li>
                                        <div class="mn-wrap">
                                            <form method="post" class="form">
                                                <div class="search-wrap">                                                    
                                                    <input type="text" class="form-control search-field round" placeholder="Search...">
                                                    <button class="search-button animate" type="submit" title="Start Search">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>      
                            </li>
                            <!-- End Search -->
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    
                </div>
            </nav>
            <!-- End Navigation panel -->
            
            <main id="main">   
           
                <!-- Home Section -->
                <section class="home-section bg-dark-alfa-30 light-content relative" data-background="video/video.jpg" id="home">
                    <div class="container min-height-100vh d-flex align-items-center pt-100 pb-100">
                        
                        <!-- Video BG Init -->
                        <!-- Please replace the video files in folder "video" with your own videos -->
                        <div class="bg-video-wrapper">
                            <video class="bg-video" preload="auto" autoplay loop muted playsinline data-object-fit="cover">
                                <source src="{{asset('siteassets/video/tau.mp4')}}" type="video/mp4">
                                <source src="{{asset('siteassets/video/video.webm')}}" type="video/webm">                                    
                            </video>
                            <div class="bg-video-overlay bg-dark-alfa-30"></div>
                        </div>
                        <a href="#" role="button" class="bg-video-button-muted"><i class="fa fa-volume-off"></i></a>
                        <!-- End Video BG Init -->
                        
                        <!-- Hero Content -->
                        <div class="home-content">
                            <h1 class="hs-line-3 mb-40 mb-xs-20 wow fadeInUpShort" data-wow-delay=".1s">Thomas Adewumi University</h1>
                            <h2 class="hs-line-2 mb-70 mb-xs-40 wow fadeInUpShort" data-wow-delay=".2s">
                                <span class="text-rotate">
                                    Educating minds-shaping futures,
                                    Excellence in Education Shines Bright,
                                    Where Excellence Meets Innovation.
                                </span>
                            </h2>
                            <div class="local-scroll mb-20 wow fadeInUpShort" data-wow-delay=".3s">
                                <a href="#facility" class="btn btn-mod btn-w btn-large btn-round mx-md-1">See More</a>
                                <a href="https://www.youtube.com/watch?v=jTea_8Fk5Ns" class="btn btn-mod btn-w btn-large btn-round mx-md-1 lightbox mfp-iframe">Play Reel</a>
                            </div>
                        </div>
                        <!-- End Hero Content -->
                        
                        <!-- Scroll Down -->
                        <div class="local-scroll scroll-down-wrap wow fadeInUpShort" data-wow-offset="0">
                            <a href="#about" class="scroll-down"><i class="scroll-down-icon"></i><span class="sr-only">Scroll to the next section</span></a>
                        </div>
                        <!-- End Scroll Down -->
                        
                    </div>
                </section>
                <!-- End Home Section -->
                
                
                <!-- About Section -->
                <section class="page-section" id="about">
                    <div class="container relative">
                        
                        <div class="mb-120 mb-sm-50 mb-xs-20">
                            <div class="row section-text">
                            
                                <div class="col-md-12 col-lg-4 mb-md-50 mb-xs-30">
                                    <div class="lead-alt wow linesAnimIn" data-splitting="lines">
                                        We strive to simplify education, making it more useful.
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-lg-4 mb-sm-50 mb-xs-30 wow linesAnimIn" data-splitting="lines">
                                    Lorem ipsum dolor sit amet conseur adipisci inerene maximus ligula sempe metuse pelente mattis. Maecenas volutpat, diam eni sagittise quame porta quam. Sed id dolor consectetur fermentum volutpat accumsan purus. 
                                </div>
                                
                                <div class="col-md-6 col-lg-4 mb-sm-50 mb-xs-30 wow linesAnimIn" data-splitting="lines">
                                    Etiam sit amet fringilla lacus susantebe sit ullamcorper pulvinar neque porttitor. Integere lectus. Praesent sede nisi eleifend fermum orci amet, iaculis libero. Donec vel ultricies purus. Name dictum sem ipsumebe euliquam.
                                </div>
                                
                            </div>
                        </div>
                        
                         <!-- Counters -->
                        <div class="count-wrapper">
                            <div class="row">
                                
                                <!-- Counter Item -->
                                <div class="col-md-6 col-lg-3 mb-md-30">
                                    <div class="count-item">
                                        <div class="count-bg wow scalexIn"></div>
                                        <div class="relative wow fadeIn" data-wow-delay="1s">
                                            <div class="count-number">
                                                320
                                            </div>
                                            <div class="count-descr">
                                                <i class="fa fa-briefcase"></i>
                                                <span class="count-title">Projects Done</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Counter Item -->
                                
                                <!-- Counter Item -->
                                <div class="col-md-6 col-lg-3 mb-md-30">
                                    <div class="count-item">
                                        <div class="count-bg wow scalexIn"></div>
                                        <div class="relative wow fadeIn" data-wow-delay="1.1s">
                                            <div class="count-number">
                                                150
                                            </div>
                                            <div class="count-descr">
                                                <i class="fa fa-heart"></i>
                                                <span class="count-title">Happy Clients</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Counter Item -->
                                
                                <!-- Counter Item -->
                                <div class="col-md-6 col-lg-3 mb-md-30">
                                    <div class="count-item">
                                        <div class="count-bg wow scalexIn"></div>
                                        <div class="relative wow fadeIn" data-wow-delay="1.2s">
                                            <div class="count-number">
                                                933
                                            </div>
                                            <div class="count-descr">
                                                <i class="fa fa-coffee"></i>
                                                <span class="count-title">Coffee Cups</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Counter Item -->
                                
                                <!-- Counter Item -->
                                <div class="col-md-6 col-lg-3 mb-md-30">
                                    <div class="count-item">
                                        <div class="count-bg wow scalexIn"></div>
                                        <div class="relative wow fadeIn" data-wow-delay="1.3s">
                                            <div class="count-number">
                                                975
                                            </div>
                                            <div class="count-descr">
                                                <i class="fa fa-lightbulb"></i>
                                                <span class="count-title">Great Ideas</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Counter Item -->
                                
                            </div>
                        </div>
                        <!-- End Counters -->
                                            
                    </div>
                </section>
                <!-- End About Section -->
                
                <!-- Divider -->
                <hr class="mt-0 mb-0" />
                <!-- End Divider -->
                
                <!-- Call Action Section -->
                <section class="page-section pt-0 pb-0 banner-section bg-dark light-content">
                    <div class="container relative">
                        
                        <div class="row">
                            
                            <div class="col-lg-6 relative">
                                <div class="banner-image-1">
                                    <img src="{{asset('siteassets/images/promo-1.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="292" />
                                </div>
                                <div class="banner-image-2">
                                    <img src="{{asset('siteassets/images/promo-2.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="70" />
                                </div>
                            </div>
                            
                            <div class="col-lg-5 offset-lg-1">                                
                                <div class="mt-140 mt-lg-80 mt-md-60 mt-xs-30 mb-140 mb-lg-80">
                                    <div class="banner-content wow fadeInUpShort" data-wow-duration="1.2s">
                                        <h3 class="banner-heading">Looking for exclusive digital services?</h3>
                                        <div class="banner-decription">
                                            Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae porttitor. Integer non dapibus diam, ac eleifend lectus.
                                        </div>
                                        <div class="local-scroll">
                                            <a href="pages-services-1.html" class="btn btn-mod btn-w btn-large btn-round">View Services</a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            
                        </div>
                        
                    </div>
                </section>
                <!-- End Call Action Section -->
                
                
                <!-- Portfolio Section -->
                <section class="page-section pb-0" id="facility">
                    <div class="full-wrapper relative">
                        
                        <div class="text-center mb-80 mb-sm-50">
                            <h2 class="section-title">{{ env('APP_NAME') }}</h2>
                            <p class="section-title-descr">
                                Look at selection of our facilities.
                            </p>
                        </div>
                        
                        <!-- Works Filter -->                    
                        <div class="works-filter text-center">
                            <a href="#" class="filter active" role="button" aria-pressed="true" data-filter="*">All Facilities</a>
                        </div>                    
                        <!-- End Works Filter -->
                        
                         <!-- Works Grid -->
                         <ul class="works-grid work-grid-3 work-grid-gut clearfix hide-titles" id="work-grid">
                            
                            <!-- Work Item (Lightbox) -->
                            <li class="work-item mix photography">
                                <a href="{{ url('/hostel') }}" class="work-ligtbox-link mfp-image">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="{{asset('siteassets/images/portfolio/newyork.png')}}" alt="Work Description" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">HOSTEL</h3>
                                        <div class="work-descr">
                                            Lightbox 
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->
                            
                            <!-- Work Item (External Page) -->
                            <li class="work-item mix branding design">
                                <a href="{{ url('/faculty') }}" class="work-ext-link">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="{{asset('siteassets/images/portfolio/washington.png')}}" alt="Work Description" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">FACULTIES</h3>
                                        <div class="work-descr">
                                            External Page
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->
                            
                            <!-- Work Item (External Page) -->
                            <li class="work-item mix branding">
                                <a href="{{ url('/cafeteria') }}" class="work-ext-link">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="{{asset('siteassets/images/portfolio/london.png')}}" alt="Work Description" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">CAFETERIA</h3>
                                        <div class="work-descr">
                                            External Page
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->
                            
                            <!-- Work Item (External Page) -->
                            <li class="work-item mix design photography">
                                <a href="{{ url('/schoolClinic') }}" class="work-ext-link">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="{{asset('siteassets/images/portfolio/dark.jpg')}}" alt="Work Description" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">SCHOOL CLINIC</h3>
                                        <div class="work-descr">
                                            External Page
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->
                            
                            <!-- Work Item (External Page) -->
                            <li class="work-item mix design">
                                <a href="portfolio-single-1-dark.html" class="work-ext-link">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="{{asset('siteassets/images/portfolio/japan.jpg')}}" alt="Work Description" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">White Table</h3>
                                        <div class="work-descr">
                                            External Page
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->
                            
                            <!-- Work Item (Lightbox) -->
                            <li class="work-item mix design branding">
                                <a href="images/portfolio/full-project-6.jpg" class="work-lightbox-link mfp-image">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="{{asset('siteassets/images/portfolio/naija.jpg')}}" alt="Work Description" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">The Book</h3>
                                        <div class="work-descr">
                                            Lightbox
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->
                            
                        </ul>
                        <!-- End Works Grid -->
                        
                        <!-- Call Action Section -->
                        <section class="small-section bg-gray">
                            <div class="container relative">
                                <div class="row wow fadeInUpShort">
                                    <div class="col-lg-5 offset-lg-2">
                                        <h3 class="call-action-1-heading">Want to see more works?</h3>
                                        <div class="call-action-1-decription mb-0 pb-md-20">
                                            Proin fringilla augue at maximus vestibulum nam pulvinar vitae integer non dapibus diam, ac eleifend lectus.
                                        </div>                                        
                                    </div>
                                    <div class="col-lg-3 pt-10 text-lg-end">    
                                        <div class="local-scroll">
                                            <a href="portfolio-wide-gutter-3col.html" class="btn btn-mod btn-border btn-large btn-round">View Portfolio</a>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End Call Action Section -->
                        
                    </div>
                </section>
                <!-- End Portfolio Section -->
                 
                <!-- Testimonials Section -->
                <section class="page-section bg-dark bg-dark-alfa-70 bg-scroll light-content" data-background="{{asset('siteassets/images/full-width-images/thomas1.jpg')}}">
                    <div class="container relative">
                        
                    <div class="row">
                        <div class=" col-lg-8 offset-lg-2 wow fadeInUpShort">
                            
                            <div class="text-center mb-50 mb-sm-20">
                                <h2 class="section-title">What People Say?</h2>
                            </div>
                            
                            <div class="text-slider">
                                
                                <!-- Slide Item -->
                                <div>
                                    <blockquote class="testimonial">
                                        <p>
                                            Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit aenean congue, risus utaliquam dapibus lorem ipsum dolor. Thanks!
                                        </p>
                                        <footer class="testimonial-author mt-50 mt-sm-20">
                                            — John Doe, doodle inc.
                                        </footer>
                                    </blockquote>
                                </div>
                                <!-- End Slide Item -->
                                
                                <!-- Slide Item -->
                                <div>
                                    <blockquote class="testimonial">
                                        <p>
                                            Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit aenean congue, risus utaliquam dapibus lorem ipsum dolor. Thanks!
                                        </p>
                                        <footer class="testimonial-author mt-50 mt-sm-20">
                                            — John Doe, doodle inc.
                                        </footer>
                                    </blockquote>
                                </div>
                                <!-- End Slide Item -->
                                
                                <!-- Slide Item -->
                                <div>
                                    <blockquote class="testimonial">
                                        <p>
                                            Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit aenean congue, risus utaliquam dapibus lorem ipsum dolor. Thanks!
                                        </p>
                                        <footer class="testimonial-author mt-50 mt-sm-20">
                                            — John Doe, doodle inc.
                                        </footer>
                                    </blockquote>
                                </div>
                                <!-- End Slide Item -->
                                
                            </div>                            
                                                      
                        </div>
                    </div>
                        
                    </div>
                </section>
                <!-- End Testimonials Section -->

                 <!-- Divider -->
                 <hr class="mt-0 mb-0"/>
                <!-- End Divider -->
                
                <!-- Call Action Section -->
                <section class="page-section">
                    <div class="container relative">
                        <div class="row">
                            
                            <!-- Images --> 
                            <div class="col-lg-7 mb-md-60 mb-xs-30">                                                               
                                <div class="call-action-2-images">
                                    
                                    <div class="call-action-2-image-1">
                                        <img src="{{asset('siteassets/images/promo-3.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="255" />
                                    </div>
                                    
                                    <div class="call-action-2-image-2">
                                        <img src="{{asset('siteassets/images/promo-4.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="134" />
                                    </div>
                                    
                                    <div class="call-action-2-image-3">
                                        <img src="{{asset('siteassets/images/promo-5.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="0" />
                                    </div>
                                    
                                </div>                                                                              
                            </div>
                            <!-- End Images -->
                            
                            <!-- Text -->
                            <div class="col-lg-5 wow fadeInUpShort" data-wow-duration="1.2s" data-wow-offset="255">
                                
                                <h2 class="section-title mb-50 mb-sm-20">Why choose us?</h2>
                                
                                <dl class="call-action-2-text mb-60 mb-sm-30">
                                    <dt>
                                        01. Unmatched Creativity:
                                    </dt>
                                    <dd>
                                        Our strong creative spirit drives innovation in education.
                                    </dd>
                                    <dt>
                                        02. We are very responsible:
                                    </dt>
                                    <dd>
                                         We take utmost responsibility for your educational journey's success.
                                    </dd>
                                    <dt>
                                        03. Welcoming Community:
                                    </dt>
                                    <dd>
                                        Experience a super-friendly, inclusive learning environment.
                                    </dd>
                                </dl>
                                
                                <div class="local-scroll">
                                    <a href="pages-contact-1.html" class="btn btn-mod btn-large btn-round">Start Project</a>
                                </div>
                                
                            </div>
                            <!-- End Text -->
                            
                        </div>
                    </div>
                </section>
                <!-- End Call Action Section -->
                
                <!-- Divider -->
                <hr class="mt-0 mb-0"/>
                <!-- End Divider -->
                
                <!-- Newsletter Section -->
                <section class="small-section bg-dark bg-dark-alfa-70 bg-scroll bg-position-top light-content" data-background="{{asset('siteassets/images/full-width-images/section-bg-6.jpg')}}">
                    <div class="container relative">
                        
                        <form id="mailchimp" class="form wow fadeInUpShort">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    
                                    <div class="newsletter-label d-flex mb-50 mb-sm-20">
                                        <div class="newsletter-label-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M1.999 1v7.269l-2 1.456v13.275h24.001v-13.275l-2.001-1.453v-7.272h-20zm1 11.234v-10.234h18v10.233l-9 5.766-9-5.765zm19 .54v-3.17l1.001.764v11.632h-22.001v-11.641l1-.707.063 3.134 9.937 6.413 10-6.425zm-14.305-6.752l-2.694.496 1.888 1.986-.361 2.716 2.472-1.182 2.473 1.182-.361-2.716 1.888-1.986-2.695-.496-1.305-2.41-1.305 2.41zm.248 2.139l-.945-.994 1.349-.249.653-1.206.654 1.206 1.349.249-.945.994.18 1.36-1.238-.591-1.238.591.181-1.36zm6.058-3.078h4.999v-1h-4.999v1zm0 2h4.999v-1h-4.999v1zm0 2h4.999v-1h-4.999v1zm0 2h3v-1h-3v1z"/></svg>
                                        </div>
                                        <h2 class="newsletter-label-text">
                                            Stay informed with&nbsp;our newsletter
                                        </h2>
                                    </div>
                                    
                                    <div class="d-sm-flex justify-content-between mb-20">
                                        <input placeholder="Your Email" class="newsletter-field input-lg round" type="email" pattern=".{5,100}" required aria-required="true">
                                        <button type="submit" aria-controls="subscribe-result" class="newsletter-button btn btn-mod btn-w btn-large btn-round">
                                            Subscribe Now
                                        </button>
                                    </div>
                                    
                                    <div class="form-tip">
                                        Proin fringilla augue at maximus vestibulum <a href="#">Terms & Conditions</a>.
                                    </div>
                                    
                                    <div id="subscribe-result" role="region" aria-live="polite" aria-atomic="true"></div>
                                    
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </section>
                <!-- End Newsletter Section -->
                
                
                <!-- Contact Section -->
                <section class="page-section" id="contact">
                    <div class="container relative">
                        
                        <div class="text-center mb-80 mb-sm-50">
                            <h2 class="section-title">Contact</h2>
                            <p class="section-title-descr">
                                We’re available for the new projects
                            </p>
                        </div>
                        
                        <div class="row mb-60 mb-xs-40">
                            
                            <div class="col-md-10 offset-md-1">
                                <div class="row">
                                    
                                    <!-- Phone -->
                                    <div class="col-sm-6 col-lg-4 pb-20">
                                        <div class="contact-item wow fadeScaleIn" data-wow-delay="0" data-wow-duration="1s">
                                            <div class="ci-icon">
                                                <i class="fa fa-phone-alt"></i>
                                            </div>
                                            <div class="ci-title">
                                                Call Us
                                            </div>
                                            <div class="ci-text">
                                                <a href="tel:+61383767284"> +61 383 767 284</a>
                                                 <br>
                                                 <a href="tel:+2349053929899"> +234 905 392 9899</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Phone -->
                                    
                                    <!-- Address -->
                                    <div class="col-sm-6 col-lg-4 pb-20">
                                        <div class="contact-item wow fadeScaleIn" data-wow-delay=".1s" data-wow-duration="1s">
                                            <div class="ci-icon">
                                                <i class="fa fa-map-marker-alt"></i>
                                            </div>
                                            <div class="ci-title">
                                                Address
                                            </div>
                                            <div class="ci-text">
                                                 University Drive, Off Idofin Road, Oko-Irese, Kwara State.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Address -->
                                    
                                    <!-- Email -->
                                    <div class="col-sm-6 col-lg-4 pb-20">
                                        <div class="contact-item wow fadeScaleIn" data-wow-delay=".2s" data-wow-duration="1s">
                                            <div class="ci-icon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <div class="ci-title">
                                                Email
                                            </div>
                                            <div class="ci-text">
                                                adeolaaremu67@gmail.com
                                            </div>
                                            <div class="ci-link">
                                                <a href="mailto:support@bestlooker.pro">Say Hello</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Email --> 
                                </div>
                            </div> 
                        </div>
                    </div>


                <!-- Google Map -->
                <div class="google-map light-content">
                    
                    <a href="#" class="map-section">                        
                        <div class="map-toggle wow fadeInUpShort" aria-hidden="true">
                            <div class="mt-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="mt-text">
                                <div class="mt-open">Open the map <i class="mt-open-icon"></i></div>
                                <div class="mt-close">Close the map <i class="mt-close-icon"></i></div>
                            </div>
                        </div>                        
                    </a>
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3949.5294901421075!2d5.1897396!3d8.1492855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104823688f86f64d%3A0xa78475c8d2cee85c!2sThomas%20Adewumi%20University!5e0!3m2!1sen!2sng!4v1694115669740!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
                <!-- End Google Map -->





                </section>
                <!-- End Contact Section -->
                
                <!-- Call Action Section -->
                <section class="small-section bg-dark light-content">
                    <div class="container relative">
                        <div class="row wow fadeInUpShort">
                            <div class="col-md-8 offset-md-2 text-center">
                                <h3 class="call-action-1-heading">Want to discuss your new project?</h3>
                                <div class="call-action-1-decription mb-60 mb-sm-30">
                                    Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Integer non dapibus diam, ac eleifend lectus. Duis placerat ex gravida nibh tristique ultricies eros lorem blandit.
                                </div>                                     
                            
                                <div class="local-scroll">
                                    <a href="pages-contact-1.html" class="btn btn-mod btn-w btn-large btn-round">Let's Talk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Call Action Section -->
                
            </main>
            
            <!-- Footer -->
            <footer class="page-section bg-gray-lighter footer pb-100 pb-sm-50">
                <div class="container">
                    
                    <!-- Social Links -->
                    <div class="footer-social-links mb-90 mb-xs-40">
                        <a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i> <span class="sr-only">Facebook profile</span></a>
                        <a href="#" title="Twitter" target="_blank"><i class="fab fa-twitter"></i> <span class="sr-only">Twitter profile</span></a>
                        <a href="#" title="Twitter" target="_blank"><i class="fab fa-vimeo-v"></i> <span class="sr-only">Vimeo profile</span></a>
                        <a href="#" title="Behance" target="_blank"><i class="fab fa-behance"></i> <span class="sr-only">Behance profile</span></a>
                        <a href="#" title="Pinterest" target="_blank"><i class="fab fa-pinterest"></i> <span class="sr-only">Pinterest profile</span></a>
                    </div>
                    <!-- End Social Links -->
                    
                    <!-- Footer Text -->
                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div class="footer-copy">
                            <script>document.write(new Date().getFullYear())</script> © {{ env('APP_NAME') }}.
                        </div>
                        <!-- End Copyright -->
                        
                        <div class="footer-made">
                            Design & Develop by ICT Dept.
                        </div>
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="link-to-top-icon"></i><span class="sr-only">Scroll to top</span></a>
                 </div>
                 <!-- End Top Link -->
                 
            </footer>
            <!-- End Footer -->
        
        </div>
        <!-- End Page Wrap -->
        
        
        <!-- JS -->
        <script src="{{asset('siteassets/js/jquery.min.js')}}"></script>
        <script src="{{asset('siteassets/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('siteassets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('siteassets/js/SmoothScroll.js')}}"></script>
        <script src="{{asset('siteassets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('siteassets/js/jquery.localScroll.min.js')}}"></script>
        <script src="{{asset('siteassets/js/jquery.viewport.mini.js')}}"></script>
        <script src="{{asset('siteassets/js/jquery.parallax-1.1.3.js')}}"></script>
        <script src="{{asset('siteassets/js/jquery.fitvids.js')}}"></script>
        <script src="{{asset('siteassets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('siteassets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('siteassets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('siteassets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('siteassets/js/masonry.pkgd.min.js')}}"></script>
        <script src="{{asset('siteassets/js/jquery.lazyload.min.js')}}"></script>
        <script src="{{asset('siteassets/js/wow.min.js')}}"></script>
        <script src="{{asset('siteassets/js/morphext.js')}}"></script>
        <script src="{{asset('siteassets/js/typed.min.js')}}"></script>
        <script src="{{asset('siteassets/js/all.js')}}"></script>
        <script src="{{asset('siteassets/js/contact-form.js')}}"></script>
        <script src="{{asset('siteassets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('siteassets/js/objectFitPolyfill.min.js')}}"></script>
        <script src="{{asset('siteassets/js/splitting.min.js')}}"></script>
        <script src="{{asset('siteassets/js/objectFitPolyfill.min.js')}}"></script>
        <script src="{{asset('siteassets/js/splitting.min.js')}}"></script>
    </body>
</html>
