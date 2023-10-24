<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="college, campus, university, courses, school, educational">
		<meta name="description" content="Hostel Page">
		<meta name="author" content="Aremu Adeola Abidemi(Kodex)">
		<title>Hostel - {{ env('APP_NAME') }}</title>

		<!-- Favicons-->
        <link rel="shortcut icon" href="{{asset('siteassets/images/tau.png')}}">
		<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
		<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

		<!-- BASE CSS -->
		<link href="{{asset('websassets/css/main_font/main_font.css')}}" rel="stylesheet">
		<link href="{{asset('websassets/css/animate.min.css')}}" rel="stylesheet">
		<link href="{{asset('websassets/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('websassets/css/menu.css')}}" rel="stylesheet">
		<link href="{{asset('websassets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('websassets/css/responsive.css')}}" rel="stylesheet">
		<link href="{{asset('websassets/css/elegant_font/elegant_font.min.css')}}" rel="stylesheet">
		<link href="{{asset('websassets/css/icon_font/pe-icon-7-stroke.min.css')}}" rel="stylesheet">
		<link href="{{asset('websassets/css/fontello/css/fontello.min.css')}}" rel="stylesheet">
		<link href="{{asset('websassets/css/edu_fonts/edu_fonts.min.css')}}" rel="stylesheet">
		<link href="{{asset('websassets/css/magnific-popup.css')}}" rel="stylesheet">

		<!-- YOUR CUSTOM CSS -->
		<link href="{{asset('websassets/css/custom.css')}}" rel="stylesheet">
		
		<!-- SPECIFIC CSS -->
		<link href="{{asset('websassets/css/tour.css')}}" rel="stylesheet">
				
		<!-- Modernizr -->
		<script src="{{asset('websassets/js/modernizr_tour.js')}}"></script> 
	</head>

	<body>

		<div id="preloader">
			<div class="pulse"></div>
		</div><!-- Pulse Preloader -->

		<section class="tour-section">
			<div class="full-container">
				<h1 id="intro_txt">Welcome to {{ env('APP_NAME') }}<span>Hostel Platform</span></h1>
				<div class="container_gray_bg" id="home_feat_1">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-4">
							<div class="home_feat_1_box">
								<a href="{{ url('/maleHostel') }}">
									<img src="{{asset('websassets/img/home_feat_1_1.jpg')}}" class="img-responsive" alt="">
									<div class="short_info"><h3>View Male Hostel</h3><i class="arrow_carrot-right_alt2"></i></div>
								</a>
							</div>
						</div>
						<div class="col-md-5 col-sm-4">
							<div class="home_feat_1_box">
								<a href="{{ url('/femaleHostel') }}">
									<img src="{{asset('websassets/img/home_feat_1_2.jpg')}}" class="img-responsive" alt="">
									<div class="short_info"><h3>View Female Hostel</h3><i class="arrow_carrot-right_alt2"></i></div>
								</a>
							</div>
						</div>
					</div><!-- End row -->
				</div><!-- End container -->
			</div><!-- End container_gray_bg -->
			</div>
		</section> <!-- End  tour-section-->

		<nav>
			<ul class="top-nav">
				<li><a href="{{ url('/') }}" class="back"><i class="arrow_back"></i></a></li>
			</ul>
		</nav> <!-- End top-nav-->

		<!-- Common scripts -->
		<script src="websassets/js/jquery-1.11.2.min.js"></script>
		<script src="websassets/js/functions.js"></script>

		<!-- Specific scripts -->
		<script src="websassets/js/tour.min.js"></script>


	</body>
</html>