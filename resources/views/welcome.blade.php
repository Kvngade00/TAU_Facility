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
                            <li><a href="#blog">Blog</a></li>
                            
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
                                <a href="#about" class="btn btn-mod btn-w btn-large btn-round mx-md-1">See More</a>
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
                                <a href="portfolio-single-1-dark.html" class="work-ext-link">
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
                                <a href="portfolio-single-1-dark.html" class="work-ext-link">
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
                                <a href="portfolio-single-1-dark.html" class="work-ext-link">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="{{asset('siteassets/images/portfolio/dark.jpg')}}" alt="Work Description" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">CLINIC</h3>
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
                
                
                <!-- Process Section -->
                <section class="page-section">
                    <div class="container relative">
                        
                        <!-- Grid -->
                        <div class="row">
                            
                            <!-- Text Item -->
                            <div class="col-md-12 col-lg-3">
                                <div class="align-left">
                                    <h2 class="work-process-heading mt-0">Work Process</h2>
                                    <p class="work-process-description">
                                        Lorem ipsum dolor sit amet casume adipisin elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim.
                                    </p>
                                </div>
                            </div>
                            <!-- End Text Item -->
                            
                            <!-- Item -->
                            <div class="col-md-4 col-lg-3">
                                <div class="work-process-item text-center pt-20">
                                    <div class="work-process-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                            <path d="M20 15c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m-3 0c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m-3 0c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m5.415 4.946c-1 .256-1.989.482-3.324.482-3.465 0-7.091-2.065-7.091-5.423 0-3.128 3.14-5.672 7-5.672 3.844 0 7 2.542 7 5.672 0 1.591-.646 2.527-1.481 3.527l.839 2.686-2.943-1.272zm-13.373-3.375l-4.389 1.896 1.256-4.012c-1.121-1.341-1.909-2.665-1.909-4.699 0-4.277 4.262-7.756 9.5-7.756 5.018 0 9.128 3.194 9.467 7.222-1.19-.566-2.551-.889-3.967-.889-4.199 0-8 2.797-8 6.672 0 .712.147 1.4.411 2.049-.953-.126-1.546-.272-2.369-.483m17.958-1.566c0-2.172-1.199-4.015-3.002-5.21l.002-.039c0-5.086-4.988-8.756-10.5-8.756-5.546 0-10.5 3.698-10.5 8.756 0 1.794.646 3.556 1.791 4.922l-1.744 5.572 6.078-2.625c.982.253 1.932.407 2.85.489 1.317 1.953 3.876 3.314 7.116 3.314 1.019 0 2.105-.135 3.242-.428l4.631 2-1.328-4.245c.871-1.042 1.364-2.384 1.364-3.75"/>
                                        </svg>
                                    </div><h3 class="work-process-title">1. Disscuss</h3>
                                </div>
                            </div>
                            <!-- End Item -->
                            
                            <!-- Item -->
                            <div class="col-md-4 col-lg-3">
                                <div class="work-process-item text-center pt-20">
                                    <div class="work-process-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                            <path d="M6 3.447h-1v-1.447h19v16h-7.731l2.731 4h-1.311l-2.736-4h-1.953l-2.736 4h-1.264l2.732-4h-2.732v-1h8v-1h3v1h3v-14h-17v.447zm2.242 17.343c-.025.679-.576 1.21-1.256 1.21-.64 0-1.179-.497-1.254-1.156l-.406-4.034-.317 4.019c-.051.656-.604 1.171-1.257 1.171-.681 0-1.235-.531-1.262-1.21l-.262-6.456-.308.555c-.241.437-.8.638-1.265.459-.404-.156-.655-.538-.655-.951 0-.093.012-.188.039-.283l1.134-4.098c.17-.601.725-1.021 1.351-1.021h4.096c.511 0 1.012-.178 1.285-.33.723-.403 2.439-1.369 3.136-1.793.394-.243.949-.147 1.24.217.32.396.286.95-.074 1.297l-3.048 2.906c-.375.359-.595.849-.617 1.381-.061 1.397-.3 8.117-.3 8.117zm-5.718-10.795c-.18 0-.34.121-.389.294-.295 1.04-1.011 3.666-1.134 4.098l1.511-2.593c.172-.295.623-.18.636.158l.341 8.797c.01.278.5.287.523.002 0 0 .269-3.35.308-3.944.041-.599.449-1.017.992-1.017.547.002.968.415 1.029 1.004.036.349.327 3.419.385 3.938.043.378.505.326.517.022 0 0 .239-6.725.3-8.124.033-.791.362-1.523.925-2.061l3.045-2.904c-.661.492-2.393 1.468-3.121 1.873-.396.221-1.07.457-1.772.457h-4.096zm16.476 1.005h-5v-1h5v1zm2-2h-7v-1h7v1zm-15.727-4.994c-1.278 0-2.315 1.038-2.315 2.316 0 1.278 1.037 2.316 2.315 2.316s2.316-1.038 2.316-2.316c0-1.278-1.038-2.316-2.316-2.316zm0 1c.726 0 1.316.59 1.316 1.316 0 .726-.59 1.316-1.316 1.316-.725 0-1.315-.59-1.315-1.316 0-.726.59-1.316 1.315-1.316zm15.727 1.994h-7v-1h7v1z"/>
                                        </svg>
                                    </div><h3 class="work-process-title">2. Make</h3>
                                </div>
                            </div>
                            <!-- End Item -->
                            
                            <!-- Item -->
                            <div class="col-md-4 col-lg-3">
                                <div class="work-process-item text-center pt-20">
                                    <div class="work-process-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                            <path d="M15.551 14.703c.474 1.372 2.049 2.459 3.801 1.868l.021-.007c1.565-.544 2.391-2.242 1.854-3.807-.187-.546-.425-1.137-.695-1.757h-5.967c.299 1.366.625 2.647.986 3.703m2.264-9.232l-4.051 1.388c.183 1.037.379 2.103.59 3.141h5.726c-.655-1.404-1.445-2.94-2.265-4.529m.492-1.226c1.524 2.958 3.086 5.915 3.866 8.187.598 1.744-.045 3.895-2.028 4.874l1.211 3.529c.291.812 1.322.926 2.392.808l.252.735-4.728 1.622-.272-.788c.903-.479 1.688-1.215 1.41-2.054l-1.208-3.52c-2.162.439-3.994-.861-4.596-2.61-.791-2.304-1.405-5.566-1.976-8.837l5.677-1.946zm-8.872 6.755h-5.967c-.27.62-.508 1.211-.695 1.757-.536 1.565.289 3.263 1.854 3.807l.021.007c1.753.591 3.328-.496 3.801-1.868.362-1.056.688-2.337.986-3.703m-5.515-1h5.726c.211-1.038.407-2.104.591-3.141l-4.051-1.388c-.821 1.589-1.611 3.125-2.266 4.529m7.45-3.809c-.571 3.271-1.185 6.533-1.976 8.837-.602 1.749-2.434 3.049-4.596 2.61l-1.208 3.52c-.278.839.507 1.575 1.41 2.054l-.271.788-4.729-1.622.252-.735c1.07.118 2.102.004 2.392-.808l1.211-3.529c-1.983-.979-2.625-3.13-2.028-4.874.78-2.272 2.342-5.229 3.867-8.187l5.676 1.946zm7.13 7.811c.414 0 .75.336.75.75 0 .413-.336.75-.75.75s-.75-.337-.75-.75c0-.414.336-.75.75-.75m-14.5.248c0 .414.336.75.75.75s.75-.336.75-.75c0-.413-.336-.75-.75-.75s-.75.337-.75.75m3.25-2.25c.414 0 .75.337.75.75 0 .414-.336.75-.75.75s-.75-.336-.75-.75c0-.413.336-.75.75-.75m10.5-.499c.414 0 .75.336.75.751 0 .413-.336.75-.75.75s-.75-.337-.75-.75c0-.415.336-.751.75-.751m-5.249-7.977v-3.023c0-.277-.223-.5-.5-.5-.275 0-.499.223-.499.5v3.023c0 .276.224.5.499.5.277 0 .5-.224.5-.5m1.932.462l1.641-2.79c.142-.238.062-.545-.176-.685-.239-.139-.544-.062-.684.177l-1.643 2.79c-.14.238-.06.545.176.685.08.047.167.069.254.069.172 0 .339-.088.432-.246m-4.552.246c-.171 0-.337-.088-.432-.246l-1.642-2.79c-.14-.238-.061-.545.177-.685.237-.14.544-.061.685.177l1.643 2.79c.139.238.061.545-.178.685-.08.047-.166.069-.253.069"/>
                                        </svg>
                                    </div><h3 class="work-process-title">3. Product</h3>
                                </div>
                            </div>
                            <!-- End Item -->
                            
                       </div>
                       <!-- End Grid -->
                        
                    </div>
                </section>
                <!-- End Process Section -->
                                
                
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
                
                
                <!-- Promo Section -->
                <section class="page-section">
                    <div class="container relative">
                        <div class="row">
                            
                            <!-- Text -->
                            <div class="col-lg-6 wow fadeInUpShort" data-wow-duration="1.2s" data-wow-offset="205">
                                
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h2 class="section-title mb-60 mb-sm-30">Awesome Template With Clean Design</h2>
                                    </div>
                                </div>
                                
                                <!-- Features Grid -->
                                <div class="row alt-features-grid">
                                    
                                    <!-- Features Item -->
                                    <div class="col-lg-6">
                                        <div class="alt-features-item">
                                            <div class="alt-features-icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                                    <path d="M21.62 20.196c1.055-.922 1.737-2.262 1.737-3.772 0-1.321-.521-2.515-1.357-3.412v-6.946l-11.001-6.066-11 6v12.131l11 5.869 5.468-2.917c.578.231 1.205.367 1.865.367.903 0 1.739-.258 2.471-.676l2.394 3.226.803-.596-2.38-3.208zm-11.121 2.404l-9.5-5.069v-10.447l9.5 4.946v10.57zm1-.001v-10.567l5.067-2.608.029.015.021-.04 4.384-2.256v5.039c-.774-.488-1.686-.782-2.668-.782-2.773 0-5.024 2.252-5.024 5.024 0 1.686.838 3.171 2.113 4.083l-3.922 2.092zm6.833-2.149c-2.219 0-4.024-1.808-4.024-4.026s1.805-4.025 4.024-4.025c2.22 0 4.025 1.807 4.025 4.025 0 2.218-1.805 4.026-4.025 4.026zm-.364-3.333l-1.306-1.147-.66.751 2.029 1.782 2.966-3.12-.725-.689-2.304 2.423zm-16.371-10.85l4.349-2.372 9.534 4.964-4.479 2.305-9.404-4.897zm9.4-5.127l9.404 5.186-3.832 1.972-9.565-4.98 3.993-2.178z"/>
                                                </svg>
                                            </div>
                                            <h3 class="alt-features-title">Unique Design</h3>
                                            <div class="alt-features-descr">
                                                Fusce aliquet quam eget neque ultrices elementum felis id arcu blandit sagittis.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Features Item -->
                                    
                                    <!-- Features Item -->
                                    <div class="col-lg-6">
                                        <div class="alt-features-item">
                                            <div class="alt-features-icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                                    <path d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm0 1.292c2.942 2.31 5.12 2.655 8 2.701v10.542c0 3.891-2.638 4.943-8 8.284-5.375-3.35-8-4.414-8-8.284v-10.542c2.88-.046 5.058-.391 8-2.701zm5 7.739l-5.992 6.623-3.672-3.931.701-.683 3.008 3.184 5.227-5.878.728.685z"/>
                                                </svg>
                                            </div>
                                            <h3 class="alt-features-title">Quality Code</h3>
                                            <div class="alt-features-descr">
                                                Lorem ipsum dolor sit amet rembe adipiscing elite Inwege maximus ligula. 
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Features Item -->
                                    
                                    <!-- Features Item -->
                                    <div class="col-lg-6">
                                        <div class="alt-features-item">
                                            <div class="alt-features-icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                                    <path d="M6.514 24.015h-3v-3.39c-2.08-.638-3.5-2.652-3.5-5.04 0-1.19.202-1.693 1.774-5.603.521-1.294 1.195-2.97 2.068-5.179.204-.518.67-.806 1.17-.802.482.004.941.284 1.146.802.718 1.817 1.302 3.274 1.777 4.454.26-.596.567-1.288.928-2.103.694-1.565 1.591-3.592 2.754-6.265.258-.592.881-.906 1.397-.888.572.015 1.126.329 1.369.888 1.163 2.673 2.06 4.7 2.754 6.265 2.094 4.727 2.363 5.334 2.363 6.764 0 2.927-2.078 5.422-5 6.082v4.015h-3v-4.015c-.943-.213-1.797-.617-2.523-1.165-.612.845-1.466 1.48-2.477 1.79v3.39zm14.493-6c1.652 0 2.993 1.341 2.993 2.993s-1.341 2.993-2.993 2.993-2.993-1.341-2.993-2.993 1.341-2.993 2.993-2.993zm.007.993c1.104 0 2 .896 2 2s-.896 2-2 2-2-.896-2-2 .896-2 2-2zm-7.5 3.993v-3.839c4.906-.786 5-4.751 5-5.244 0-1.218-.216-1.705-2.277-6.359-2.134-4.82-2.721-6.198-2.755-6.261-.079-.145-.193-.292-.455-.297-.238 0-.37.092-.481.297-.034.063-.621 1.441-2.755 6.261-2.061 4.654-2.277 5.141-2.277 6.359 0 .493.094 4.458 5 5.244v3.839h1zm-6.123-12.448l-.08-.198c-1.589-3.957-2.04-5.116-2.067-5.171-.072-.151-.15-.226-.226-.228-.109 0-.188.13-.235.228-.028.05-.316.818-2.066 5.171-1.542 3.833-1.703 4.233-1.703 5.23 0 1.988 1.076 3.728 3.5 4.25v3.166h1v-3.166c1.266-.273 2.159-.876 2.725-1.666-1.078-1.12-1.725-2.619-1.725-4.251 0-.979.126-1.572.877-3.365z"/>
                                                </svg>
                                            </div>
                                            <h3 class="alt-features-title">Clean and Minimal</h3>
                                            <div class="alt-features-descr">
                                                Maecenas volutpat, diam enime volutpa cras luctus interdum sodales. 
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Features Item -->
                                    
                                    <!-- Features Item -->
                                    <div class="col-lg-6">
                                        <div class="alt-features-item">
                                            <div class="alt-features-icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                                    <path d="M16 3.383l-.924-.383-7.297 17.617.924.383 7.297-17.617zm.287 3.617l6.153 4.825-6.173 5.175.678.737 7.055-5.912-7.048-5.578-.665.753zm-8.478 0l-6.249 4.825 6.003 5.175-.679.737-6.884-5.912 7.144-5.578.665.753z"/>
                                                </svg>
                                            </div>
                                            <h3 class="alt-features-title">Easy Customization</h3>
                                            <div class="alt-features-descr">
                                                Praesent sed nisi eleifend lorem ember fermete acome ante lorem ipsum.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Features Item -->
                                    
                                </div>
                                <!-- End Features Grid -->
                                
                            </div>
                            <!-- End Text -->
                            
                            <!-- Images --> 
                            <div class="col-lg-6">                                                               
                                <div class="call-action-3-images mt-xs-0 text-end">
                                    
                                    <div class="call-action-3-image-1">
                                        <img src="{{asset('siteassets/images/promo-6.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="205" />
                                    </div>
                                    
                                    <div class="call-action-3-image-2-wrap d-flex align-items-center">
                                        <div class="call-action-3-image-2">
                                            <img src="{{asset('siteassets/images/promo-7.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" />
                                        </div>
                                    </div>
                                    
                                </div>                                                                              
                            </div>
                            <!-- End Images -->
                            
                        </div>
                    </div>
                </section>
                <!-- End Promo Section -->
                
                
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
                
                
                <!-- Features Section -->
                <section class="page-section bg-gray-lighter">
                    <div class="container relative">
                        
                        <div class="text-center mb-80 mb-sm-50">
                            <h2 class="section-title">Features</h2>
                            <p class="section-title-descr">
                                What will you get if you choose us?
                            </p>
                        </div>
                        
                        <!-- Grid -->
                        <div class="alt-service-grid">
                            <div class="row">
                                
                                <!-- Item -->
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="alt-service-item wow fadeScaleIn" data-wow-delay="0" data-wow-duration="1s">
                                        <div class="alt-service-icon">
                                            <i class="fa fa-paper-plane"></i>
                                        </div>
                                        <h3 class="alt-services-title">Branding</h3>
                                        <div class="alt-services-descr">Lorem ipsum dolor sit amet,  elit. Vitae gravida nibh maorbi dignissim nunc at risus convallis.</div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                
                                <!-- Item -->
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="alt-service-item wow fadeScaleIn" data-wow-delay=".1s" data-wow-duration="1s">
                                        <div class="alt-service-icon">
                                            <i class="fa fa-cogs"></i>
                                        </div>
                                        <h3 class="alt-services-title">Web Design</h3>
                                        <div class="alt-services-descr">Vivamus neque orci, ultricies blandit ultrici vel, semper interdum elit, non placerat suscipit.</div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                
                                <!-- Item -->
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="alt-service-item wow fadeScaleIn" data-wow-delay=".2s" data-wow-duration="1s">
                                        <div class="alt-service-icon">
                                            <i class="fa fa-feather"></i>
                                        </div>
                                        <h3 class="alt-services-title">Logo Design</h3>
                                        <div class="alt-services-descr">Lorem ipsum dolor sit amet,  elit. Vitae gravida nibh. Morbi nunc at risus convallis.</div> 
                                    </div>
                                </div>
                                <!-- End Item -->
                                
                                <!-- Item -->
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="alt-service-item wow fadeScaleIn" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="alt-service-icon">
                                            <i class="fa fa-life-ring"></i>
                                        </div>
                                        <h3 class="alt-services-title">Support</h3>
                                        <div class="alt-services-descr">Semper interdum ultricies elit, non placerat nisi suscipit. Dignissim nunc at risus convallis.</div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                
                            </div>
                        </div>
                        <!-- End Grid -->
                        
                    </div>
                </section>
                <!-- End Features Section -->
                
                <!-- Section -->
                <section class="page-section light-content bg-dark bg-dark-alfa-70" data-background="{{asset('siteassets/images/full-width-images/section-bg-3.jpg')}}">
                    <div class="container relative">
                        
                        <div class="wow fadeInUpShort">                            
                            <div class="item-carousel owl-carousel">
                                
                                <!-- Features Item -->
                                <div class="features-item">
                                    <div class="features-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M17.517 10.012c.151.23.087.541-.144.692l-2.2 1.444c-.085.056-.179.082-.274.082-.162 0-.322-.079-.418-.225-.152-.231-.087-.541.143-.692l2.201-1.445c.23-.151.541-.089.692.144m-6.242-2.595l1.111-2.385c.116-.252.414-.36.664-.243.25.117.36.413.242.664l-1.111 2.386c-.085.181-.265.288-.453.288l-.211-.047c-.25-.115-.359-.413-.242-.663m-2.624.613c1.377-2.652 1.484-5.104.318-7.286-.178-.333.066-.734.441-.734.177 0 .351.095.442.264 1.33 2.49 1.225 5.254-.314 8.217-.089.171-.263.269-.444.269-.078 0-.156-.018-.23-.056-.245-.127-.341-.429-.213-.674m15.349 5.526c0 .352-.351.588-.671.47-2.808-1.028-5.254-.821-7.271.611-.088.063-.189.093-.29.093-.155 0-.309-.073-.406-.21-.16-.224-.108-.537.117-.696 2.301-1.637 5.059-1.884 8.193-.737.203.074.328.266.328.469m-16.484-2.608l2.865 7.517-2.248.964-2.753-7.512.778-2.176 1.358 1.207zm3.785 7.124l-2.168-5.687 5.025 4.463-2.857 1.224zm-8.27.419l.989 2.699-2.307.989 1.318-3.688zm1.823-5.103l2.358 6.435-2.271.973-1.384-3.777 1.297-3.631zm-4.853 10.612l15.997-6.853-10.283-9.137-5.714 15.99zm20.46-15.629l.552-.694.281.841.831.309-.713.528-.038.886-.723-.516-.854.238.268-.846-.491-.739.887-.007zm-1.384.885l-.639 2.019 2.041-.568 1.724 1.23.089-2.115 1.704-1.258-1.985-.739-.672-2.008-1.315 1.658-2.118.017 1.171 1.764zm-2.167-4.194c.593-.044.924-.141 1.074-.315.176-.204.226-.647.165-1.433-.023-.276.183-.517.459-.539.277-.016.515.18.537.456.063.806.059 1.62-.402 2.156-.429.499-1.13.602-1.76.647-.702.052-.72.243-.774.878-.056.67-.152 1.744-1.84 1.933-1.017.115-1.433.33-1.377 1.956.008.275-.207.325-.484.325h-.016c-.269 0-.491-.022-.5-.291-.049-1.461.191-2.655 2.265-2.887.874-.099.9-.404.956-1.072.054-.635.145-1.7 1.697-1.814m5.264-3.048c.454 0 .823.37.823.824 0 .454-.369.823-.823.823-.454 0-.824-.369-.824-.823 0-.454.37-.824.824-.824m0 2.647c1.006 0 1.823-.817 1.823-1.823s-.817-1.823-1.823-1.823c-1.007 0-1.824.817-1.824 1.823s.817 1.823 1.824 1.823m-8.446-3.662c.552 0 1 .449 1 .999 0 .551-.448.999-1 .999s-1-.448-1-.999c0-.55.448-.999 1-.999m0 2.998c1.103 0 1.999-.896 1.999-1.999 0-1.103-.896-1.998-1.999-1.998-1.104 0-2 .895-2 1.998s.896 1.999 2 1.999"/></svg>
                                    </div>
                                    <div class="features-title">
                                        We're creative
                                    </div>
                                    <div class="features-descr">
                                        We find the best ideas for you
                                    </div>
                                </div>
                                <!-- End Features Item -->
                                
                                <!-- Features Item -->
                                <div class="features-item">
                                    <div class="features-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M22 9.74l-2 1.02v7.24c-1.007 2.041-5.606 3-8.5 3-3.175 0-7.389-.994-8.5-3v-7.796l-3-1.896 12-5.308 11 6.231v8.769l1 3h-3l1-3v-8.26zm-18 1.095v6.873c.958 1.28 4.217 2.292 7.5 2.292 2.894 0 6.589-.959 7.5-2.269v-6.462l-7.923 4.039-7.077-4.473zm-1.881-2.371l9.011 5.694 9.759-4.974-8.944-5.066-9.826 4.346z"/></svg>
                                    </div>
                                    <div class="features-title">
                                        We’re punctual
                                    </div>
                                    <div class="features-descr">
                                        We always do your tasks on time
                                    </div>
                                </div>
                                <!-- End Features Item -->
                                
                                <!-- Features Item -->
                                <div class="features-item">
                                    <div class="features-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M3.278 3.956c-.459 0-.883.211-1.103.552-.363.561-.218 1.315.352 1.832.383.346.888.546 1.385.546.581 0 1.093-.268 1.444-.755l3.208-4.373-.502-.366-2.928 3.966-.4-.557c-.39-.546-.908-.845-1.456-.845m.634 3.928c-.743 0-1.492-.293-2.056-.804-.578-.525-.883-1.211-.883-1.891 0-1.62 1.426-2.232 2.305-2.232.675 0 1.308.265 1.829.756l2.742-3.713 2.112 1.541-3.797 5.177c-.542.751-1.342 1.166-2.252 1.166m15.386-7.839l-1.2 2.215-2.476.455 1.735 1.825-.332 2.496 2.273-1.086 2.271 1.086-.331-2.496 1.735-1.825-2.476-.455-1.199-2.215zm0 2.098l.548 1.013 1.132.208-.793.834.152 1.142-1.039-.496-1.039.496.152-1.142-.794-.834 1.132-.208.549-1.013m-7.312 3.894c-2.48 0-4.494 2.014-4.494 4.494 0 2.482 2.014 4.494 4.494 4.494 2.481 0 4.495-2.012 4.495-4.494 0-2.48-2.014-4.494-4.495-4.494m0 .999c1.928 0 3.496 1.569 3.496 3.495 0 1.927-1.568 3.495-3.496 3.495-1.927 0-3.495-1.568-3.495-3.495 0-1.926 1.568-3.495 3.495-3.495m-4.983 15.965h9.974v-2.778c0-1.256.204-1.786.661-2.494l1.024-1.58c1.148-1.764 2.233-3.43 2.792-4.491.078-.148.03-.328-.112-.418-.168-.109-.403-.076-.536.07-.671.734-2.03 2.164-4.041 4.251l-.369.396c-.951 1.04-1.53 1.54-4.287 1.54h-.123c-2.859-.014-3.442-.515-4.391-1.554l-.356-.382c-1.999-2.074-3.359-3.504-4.042-4.251-.133-.146-.368-.177-.535-.07-.142.091-.189.271-.112.418.585 1.112 1.828 3.18 3.796 6.323.479.766.657 1.44.657 2.489v2.531zm10.973.999h-11.972v-3.53c0-.851-.132-1.363-.504-1.958-2.01-3.208-3.228-5.239-3.833-6.388-.321-.611-.126-1.352.455-1.725.565-.361 1.361-.258 1.812.236.668.731 2.059 2.195 4.024 4.233l.374.402c.786.86 1.111 1.216 3.659 1.228h.118c2.439 0 2.764-.355 3.55-1.215l.387-.415c2.005-2.08 3.358-3.504 4.024-4.232.452-.495 1.249-.598 1.811-.237.582.373.777 1.114.457 1.725-.582 1.101-1.677 2.786-2.839 4.57l-1.022 1.576c-.348.541-.501.889-.501 1.953v3.777z"/></svg>
                                    </div>
                                    <div class="features-title">
                                        We have magic
                                    </div>
                                    <div class="features-descr">
                                        You will be delighted
                                    </div>
                                </div>
                                <!-- End Features Item -->
                                
                                <!-- Features Item -->
                                <div class="features-item">
                                    <div class="features-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M17.517 10.012c.151.23.087.541-.144.692l-2.2 1.444c-.085.056-.179.082-.274.082-.162 0-.322-.079-.418-.225-.152-.231-.087-.541.143-.692l2.201-1.445c.23-.151.541-.089.692.144m-6.242-2.595l1.111-2.385c.116-.252.414-.36.664-.243.25.117.36.413.242.664l-1.111 2.386c-.085.181-.265.288-.453.288l-.211-.047c-.25-.115-.359-.413-.242-.663m-2.624.613c1.377-2.652 1.484-5.104.318-7.286-.178-.333.066-.734.441-.734.177 0 .351.095.442.264 1.33 2.49 1.225 5.254-.314 8.217-.089.171-.263.269-.444.269-.078 0-.156-.018-.23-.056-.245-.127-.341-.429-.213-.674m15.349 5.526c0 .352-.351.588-.671.47-2.808-1.028-5.254-.821-7.271.611-.088.063-.189.093-.29.093-.155 0-.309-.073-.406-.21-.16-.224-.108-.537.117-.696 2.301-1.637 5.059-1.884 8.193-.737.203.074.328.266.328.469m-16.484-2.608l2.865 7.517-2.248.964-2.753-7.512.778-2.176 1.358 1.207zm3.785 7.124l-2.168-5.687 5.025 4.463-2.857 1.224zm-8.27.419l.989 2.699-2.307.989 1.318-3.688zm1.823-5.103l2.358 6.435-2.271.973-1.384-3.777 1.297-3.631zm-4.853 10.612l15.997-6.853-10.283-9.137-5.714 15.99zm20.46-15.629l.552-.694.281.841.831.309-.713.528-.038.886-.723-.516-.854.238.268-.846-.491-.739.887-.007zm-1.384.885l-.639 2.019 2.041-.568 1.724 1.23.089-2.115 1.704-1.258-1.985-.739-.672-2.008-1.315 1.658-2.118.017 1.171 1.764zm-2.167-4.194c.593-.044.924-.141 1.074-.315.176-.204.226-.647.165-1.433-.023-.276.183-.517.459-.539.277-.016.515.18.537.456.063.806.059 1.62-.402 2.156-.429.499-1.13.602-1.76.647-.702.052-.72.243-.774.878-.056.67-.152 1.744-1.84 1.933-1.017.115-1.433.33-1.377 1.956.008.275-.207.325-.484.325h-.016c-.269 0-.491-.022-.5-.291-.049-1.461.191-2.655 2.265-2.887.874-.099.9-.404.956-1.072.054-.635.145-1.7 1.697-1.814m5.264-3.048c.454 0 .823.37.823.824 0 .454-.369.823-.823.823-.454 0-.824-.369-.824-.823 0-.454.37-.824.824-.824m0 2.647c1.006 0 1.823-.817 1.823-1.823s-.817-1.823-1.823-1.823c-1.007 0-1.824.817-1.824 1.823s.817 1.823 1.824 1.823m-8.446-3.662c.552 0 1 .449 1 .999 0 .551-.448.999-1 .999s-1-.448-1-.999c0-.55.448-.999 1-.999m0 2.998c1.103 0 1.999-.896 1.999-1.999 0-1.103-.896-1.998-1.999-1.998-1.104 0-2 .895-2 1.998s.896 1.999 2 1.999"/></svg>
                                    </div>
                                    <div class="features-title">
                                        We're creative
                                    </div>
                                    <div class="features-descr">
                                        We find the best ideas for you
                                    </div>
                                </div>
                                <!-- End Features Item -->
                                
                                <!-- Features Item -->
                                <div class="features-item">
                                    <div class="features-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M22 9.74l-2 1.02v7.24c-1.007 2.041-5.606 3-8.5 3-3.175 0-7.389-.994-8.5-3v-7.796l-3-1.896 12-5.308 11 6.231v8.769l1 3h-3l1-3v-8.26zm-18 1.095v6.873c.958 1.28 4.217 2.292 7.5 2.292 2.894 0 6.589-.959 7.5-2.269v-6.462l-7.923 4.039-7.077-4.473zm-1.881-2.371l9.011 5.694 9.759-4.974-8.944-5.066-9.826 4.346z"/></svg>
                                    </div>
                                    <div class="features-title">
                                        We’re punctual
                                    </div>
                                    <div class="features-descr">
                                        We always do your tasks on time
                                    </div>
                                </div>
                                <!-- End Features Item -->
                                
                                <!-- Features Item -->
                                <div class="features-item">
                                    <div class="features-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M3.278 3.956c-.459 0-.883.211-1.103.552-.363.561-.218 1.315.352 1.832.383.346.888.546 1.385.546.581 0 1.093-.268 1.444-.755l3.208-4.373-.502-.366-2.928 3.966-.4-.557c-.39-.546-.908-.845-1.456-.845m.634 3.928c-.743 0-1.492-.293-2.056-.804-.578-.525-.883-1.211-.883-1.891 0-1.62 1.426-2.232 2.305-2.232.675 0 1.308.265 1.829.756l2.742-3.713 2.112 1.541-3.797 5.177c-.542.751-1.342 1.166-2.252 1.166m15.386-7.839l-1.2 2.215-2.476.455 1.735 1.825-.332 2.496 2.273-1.086 2.271 1.086-.331-2.496 1.735-1.825-2.476-.455-1.199-2.215zm0 2.098l.548 1.013 1.132.208-.793.834.152 1.142-1.039-.496-1.039.496.152-1.142-.794-.834 1.132-.208.549-1.013m-7.312 3.894c-2.48 0-4.494 2.014-4.494 4.494 0 2.482 2.014 4.494 4.494 4.494 2.481 0 4.495-2.012 4.495-4.494 0-2.48-2.014-4.494-4.495-4.494m0 .999c1.928 0 3.496 1.569 3.496 3.495 0 1.927-1.568 3.495-3.496 3.495-1.927 0-3.495-1.568-3.495-3.495 0-1.926 1.568-3.495 3.495-3.495m-4.983 15.965h9.974v-2.778c0-1.256.204-1.786.661-2.494l1.024-1.58c1.148-1.764 2.233-3.43 2.792-4.491.078-.148.03-.328-.112-.418-.168-.109-.403-.076-.536.07-.671.734-2.03 2.164-4.041 4.251l-.369.396c-.951 1.04-1.53 1.54-4.287 1.54h-.123c-2.859-.014-3.442-.515-4.391-1.554l-.356-.382c-1.999-2.074-3.359-3.504-4.042-4.251-.133-.146-.368-.177-.535-.07-.142.091-.189.271-.112.418.585 1.112 1.828 3.18 3.796 6.323.479.766.657 1.44.657 2.489v2.531zm10.973.999h-11.972v-3.53c0-.851-.132-1.363-.504-1.958-2.01-3.208-3.228-5.239-3.833-6.388-.321-.611-.126-1.352.455-1.725.565-.361 1.361-.258 1.812.236.668.731 2.059 2.195 4.024 4.233l.374.402c.786.86 1.111 1.216 3.659 1.228h.118c2.439 0 2.764-.355 3.55-1.215l.387-.415c2.005-2.08 3.358-3.504 4.024-4.232.452-.495 1.249-.598 1.811-.237.582.373.777 1.114.457 1.725-.582 1.101-1.677 2.786-2.839 4.57l-1.022 1.576c-.348.541-.501.889-.501 1.953v3.777z"/></svg>
                                    </div>
                                    <div class="features-title">
                                        We have magic
                                    </div>
                                    <div class="features-descr">
                                        You will be delighted
                                    </div>
                                </div>
                                <!-- End Features Item -->
                                
                                <!-- Features Item -->
                                <div class="features-item">
                                    <div class="features-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M17.517 10.012c.151.23.087.541-.144.692l-2.2 1.444c-.085.056-.179.082-.274.082-.162 0-.322-.079-.418-.225-.152-.231-.087-.541.143-.692l2.201-1.445c.23-.151.541-.089.692.144m-6.242-2.595l1.111-2.385c.116-.252.414-.36.664-.243.25.117.36.413.242.664l-1.111 2.386c-.085.181-.265.288-.453.288l-.211-.047c-.25-.115-.359-.413-.242-.663m-2.624.613c1.377-2.652 1.484-5.104.318-7.286-.178-.333.066-.734.441-.734.177 0 .351.095.442.264 1.33 2.49 1.225 5.254-.314 8.217-.089.171-.263.269-.444.269-.078 0-.156-.018-.23-.056-.245-.127-.341-.429-.213-.674m15.349 5.526c0 .352-.351.588-.671.47-2.808-1.028-5.254-.821-7.271.611-.088.063-.189.093-.29.093-.155 0-.309-.073-.406-.21-.16-.224-.108-.537.117-.696 2.301-1.637 5.059-1.884 8.193-.737.203.074.328.266.328.469m-16.484-2.608l2.865 7.517-2.248.964-2.753-7.512.778-2.176 1.358 1.207zm3.785 7.124l-2.168-5.687 5.025 4.463-2.857 1.224zm-8.27.419l.989 2.699-2.307.989 1.318-3.688zm1.823-5.103l2.358 6.435-2.271.973-1.384-3.777 1.297-3.631zm-4.853 10.612l15.997-6.853-10.283-9.137-5.714 15.99zm20.46-15.629l.552-.694.281.841.831.309-.713.528-.038.886-.723-.516-.854.238.268-.846-.491-.739.887-.007zm-1.384.885l-.639 2.019 2.041-.568 1.724 1.23.089-2.115 1.704-1.258-1.985-.739-.672-2.008-1.315 1.658-2.118.017 1.171 1.764zm-2.167-4.194c.593-.044.924-.141 1.074-.315.176-.204.226-.647.165-1.433-.023-.276.183-.517.459-.539.277-.016.515.18.537.456.063.806.059 1.62-.402 2.156-.429.499-1.13.602-1.76.647-.702.052-.72.243-.774.878-.056.67-.152 1.744-1.84 1.933-1.017.115-1.433.33-1.377 1.956.008.275-.207.325-.484.325h-.016c-.269 0-.491-.022-.5-.291-.049-1.461.191-2.655 2.265-2.887.874-.099.9-.404.956-1.072.054-.635.145-1.7 1.697-1.814m5.264-3.048c.454 0 .823.37.823.824 0 .454-.369.823-.823.823-.454 0-.824-.369-.824-.823 0-.454.37-.824.824-.824m0 2.647c1.006 0 1.823-.817 1.823-1.823s-.817-1.823-1.823-1.823c-1.007 0-1.824.817-1.824 1.823s.817 1.823 1.824 1.823m-8.446-3.662c.552 0 1 .449 1 .999 0 .551-.448.999-1 .999s-1-.448-1-.999c0-.55.448-.999 1-.999m0 2.998c1.103 0 1.999-.896 1.999-1.999 0-1.103-.896-1.998-1.999-1.998-1.104 0-2 .895-2 1.998s.896 1.999 2 1.999"/></svg>
                                    </div>
                                    <div class="features-title">
                                        We're creative
                                    </div>
                                    <div class="features-descr">
                                        We find the best ideas for you
                                    </div>
                                </div>
                                <!-- End Features Item -->
                                
                                <!-- Features Item -->
                                <div class="features-item">
                                    <div class="features-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M22 9.74l-2 1.02v7.24c-1.007 2.041-5.606 3-8.5 3-3.175 0-7.389-.994-8.5-3v-7.796l-3-1.896 12-5.308 11 6.231v8.769l1 3h-3l1-3v-8.26zm-18 1.095v6.873c.958 1.28 4.217 2.292 7.5 2.292 2.894 0 6.589-.959 7.5-2.269v-6.462l-7.923 4.039-7.077-4.473zm-1.881-2.371l9.011 5.694 9.759-4.974-8.944-5.066-9.826 4.346z"/></svg>
                                    </div>
                                    <div class="features-title">
                                        We’re punctual
                                    </div>
                                    <div class="features-descr">
                                        We always do your tasks on time
                                    </div>
                                </div>
                                <!-- End Features Item -->
                                
                                <!-- Features Item -->
                                <div class="features-item">
                                    <div class="features-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M3.278 3.956c-.459 0-.883.211-1.103.552-.363.561-.218 1.315.352 1.832.383.346.888.546 1.385.546.581 0 1.093-.268 1.444-.755l3.208-4.373-.502-.366-2.928 3.966-.4-.557c-.39-.546-.908-.845-1.456-.845m.634 3.928c-.743 0-1.492-.293-2.056-.804-.578-.525-.883-1.211-.883-1.891 0-1.62 1.426-2.232 2.305-2.232.675 0 1.308.265 1.829.756l2.742-3.713 2.112 1.541-3.797 5.177c-.542.751-1.342 1.166-2.252 1.166m15.386-7.839l-1.2 2.215-2.476.455 1.735 1.825-.332 2.496 2.273-1.086 2.271 1.086-.331-2.496 1.735-1.825-2.476-.455-1.199-2.215zm0 2.098l.548 1.013 1.132.208-.793.834.152 1.142-1.039-.496-1.039.496.152-1.142-.794-.834 1.132-.208.549-1.013m-7.312 3.894c-2.48 0-4.494 2.014-4.494 4.494 0 2.482 2.014 4.494 4.494 4.494 2.481 0 4.495-2.012 4.495-4.494 0-2.48-2.014-4.494-4.495-4.494m0 .999c1.928 0 3.496 1.569 3.496 3.495 0 1.927-1.568 3.495-3.496 3.495-1.927 0-3.495-1.568-3.495-3.495 0-1.926 1.568-3.495 3.495-3.495m-4.983 15.965h9.974v-2.778c0-1.256.204-1.786.661-2.494l1.024-1.58c1.148-1.764 2.233-3.43 2.792-4.491.078-.148.03-.328-.112-.418-.168-.109-.403-.076-.536.07-.671.734-2.03 2.164-4.041 4.251l-.369.396c-.951 1.04-1.53 1.54-4.287 1.54h-.123c-2.859-.014-3.442-.515-4.391-1.554l-.356-.382c-1.999-2.074-3.359-3.504-4.042-4.251-.133-.146-.368-.177-.535-.07-.142.091-.189.271-.112.418.585 1.112 1.828 3.18 3.796 6.323.479.766.657 1.44.657 2.489v2.531zm10.973.999h-11.972v-3.53c0-.851-.132-1.363-.504-1.958-2.01-3.208-3.228-5.239-3.833-6.388-.321-.611-.126-1.352.455-1.725.565-.361 1.361-.258 1.812.236.668.731 2.059 2.195 4.024 4.233l.374.402c.786.86 1.111 1.216 3.659 1.228h.118c2.439 0 2.764-.355 3.55-1.215l.387-.415c2.005-2.08 3.358-3.504 4.024-4.232.452-.495 1.249-.598 1.811-.237.582.373.777 1.114.457 1.725-.582 1.101-1.677 2.786-2.839 4.57l-1.022 1.576c-.348.541-.501.889-.501 1.953v3.777z"/></svg>
                                    </div>
                                    <div class="features-title">
                                        We have magic
                                    </div>
                                    <div class="features-descr">
                                        You will be delighted
                                    </div>
                                </div>
                                <!-- End Features Item -->
                                
                            </div>                            
                        </div>
                    
                    </div>
                </section>
                <!-- End Section -->
                
                
                <!-- Blog Section -->
                <section class="page-section" id="blog">
                    <div class="container relative">
                        
                        <div class="text-center mb-80 mb-sm-50">
                            <div class="row">
                                <div class="col-sm-6 offset-sm-3">
                                    <h2 class="section-title">Our Blog</h2>
                                    <p class="section-title-descr">
                                        The latest news in our blog
                                    </p>
                                </div>
                                <div class="col-sm-3 text-sm-end pt-30 pt-xs-0">
                                    <a href="blog-classic-sidebar-right.html" class="section-more">Our Blog <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            
                            <!-- Post Item -->
                            <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50">
                                
                                <div class="post-prev-img">
                                    <a href="blog-single-sidebar-right.html" tabindex="-1"><img src="{{asset('siteassets/images/blog/post-prev-1.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                                </div>
                                
                                <h3 class="post-prev-title">
                                    <a href="blog-single-sidebar-right.html">Meet the New Web Design Trends</a>
                                </h3>
                                
                                <div class="post-prev-info">
                                    <a href="">John Doe</a> • 10 December
                                </div>
                                
                                <div class="post-prev-text">
                                    Lorem ipsum dolor sit amet, rembe adipiscing elite. Inwege maximus ligula semper metusere pellentesque mattis. Maecenas volutpat, diam enime volutpa. 
                                </div>
                                
                                <div class="post-prev-more">
                                    <a href="blog-single-sidebar-right.html" class="text-link" tabindex="-1">Learn More</a>
                                </div>
                                
                            </div>
                            <!-- End Post Item -->
                            
                            <!-- Post Item -->
                            <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50">
                                
                                <div class="post-prev-img">
                                    <a href="blog-single-sidebar-right.html" tabindex="-1"><img src="{{asset('siteassets/images/blog/post-prev-2.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                                </div>
                                
                                <h3 class="post-prev-title">
                                    <a href="blog-single-sidebar-right.html">Minimalistic Product Design</a>
                                </h3>
                                
                                <div class="post-prev-info">
                                    <a href="">John Doe</a> • 9 December
                                </div>
                                
                                <div class="post-prev-text">
                                    Proin fringilla augue at maximus vestibulum. Nam pulvi vitae neque et porttitor. Praesent sed nisi eleifend, lorem fermentum ac ante lorem ipsum sit amet. 
                                </div>
                                
                                <div class="post-prev-more">
                                    <a href="blog-single-sidebar-right.html" class="text-link" tabindex="-1">Learn More</a>
                                </div>
                                
                            </div>
                            <!-- End Post Item -->
                            
                            <!-- Post Item -->
                            <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50">
                                
                                <div class="post-prev-img">
                                    <a href="blog-single-sidebar-right.html" tabindex="-1"><img src="{{asset('siteassets/images/blog/post-prev-3.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                                </div>
                                
                                <h3 class="post-prev-title">
                                    <a href="blog-single-sidebar-right.html">Clean Style in the Web</a>
                                </h3>
                                
                                <div class="post-prev-info">
                                    <a href="">John Doe</a> • 7 December
                                </div>
                                
                                <div class="post-prev-text">
                                    Ember adipiscing elite curabitur iaculis accumsan augu nec finibus mauris pretium eu. Duis placerat ex gravida nibh tristique ultricies eros lorem blandit. 
                                </div>
                                
                                <div class="post-prev-more">
                                    <a href="blog-single-sidebar-right.html" class="text-link" tabindex="-1">Learn More</a>
                                </div>
                                
                            </div>
                            <!-- End Post Item -->                            
                            
                        </div>
                        
                    </div>
                </section>
                <!-- End Blog Section -->
                
                
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
                                                +61 383 767 284 <br>
                                                 0905-392-9899
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
