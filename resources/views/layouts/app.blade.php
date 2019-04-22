<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">




   
		<!-- Required meta tags -->
		



        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Medical Consultant</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" />
    
    <link rel="stylesheet" href="{{ asset('assets/vendors/linericon/style.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/vendors/lightbox/simpleLightbox.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/css/nice-select.css') }}">
    
	<link rel="stylesheet" href="{{ asset('assets/vendors/animate-css/animate.css') }}">
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/index_style.css') }}" />


    
</head>
<body>





    <header class="header_area" >
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					
					<div class="col-lg-9 col-sm-6 col-8 header-top-right">
						<!-- putform -->
							</div>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
                {!!Form::open(['url'=>'/search','method'=>'get','class'=>'d-flex justify-content-between'])!!}		

						<input name="keyword" type="text" class="form-control" id="search_input" placeholder="Search Here">
                        <button class="btn btn-outline-success my-2 my-sm-0 text-left" type="submit"></button>
						<br>
                    {!!Form::close()!!}

				</div>
			</div>
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto" style="font-size:18px; color:black; font-weight:600">
							<li class="nav-item active"><a style="font-size:18px; color:black; font-weight:600;" class="nav-link" href="{{ url('/home') }}">أعراض</a></li>
							<li class="nav-item"><a style="font-size:18px; color:black; font-weight:600; "  class="nav-link" href="{{ url('/posts') }}">مقالات</a></li>
							<li class="nav-item"><a style="font-size:18px; color:black; font-weight:600;"  class="nav-link" href="{{ url('/') }}">الرئيسيه</a></li>
							
							



                            @guest
                            <li class="nav-item">
                                <a style="font-size:18px; color:black;"  class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="font-size:18px; color:black;"  class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a style="font-size:18px; color:black;"  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                     <span><i class="fas fa-caret-down"></i></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل الخروج') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        {{ __('الملف الشخصي') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest









                        </ul>
						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item"><a href="#" class="search">
									<i class="lnr lnr-magnifier" id="search"></i></a>
                            </li>

						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>












    




    
    <section class="pt-5 bg-white ">
        <div class="container">
       

        <div class="row ">
       
        @yield('content')

        </div>
        </div>
    



       

            
</section>


<div>

@yield('content2')

</div>



    
		







<footer class="footer-area section-gap py-0">
		<div class="footer_top section_gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4 class="text-white">من نحن</h4>
							<p class="text-right">
                            يركز فريق الشؤون الطبية في الاستشاري الطبي على ضمان محتوى الاستشارات الطبية والمنتجات والخدمات التي تدعم أعلى معايير النزاهة الطبية. يتولى فريقنا المتخصص أيضًا إدارة شبكتنا الواسعة من الأطباء ، الذين يقدمون المراجعة الطبية لجميع المحتويات الإكلينيكية.        
                        </p>
						</div>
					</div>
					<div class="col-lg-4  col-md-6 col-sm-6">
						<div class="single-footer-widget text-center">
							<h4 class="text-white">للتواصل معنا</h4>
							
							<p class="number">
                          <a href="www.facebook.com" class="px-2"><i class="fab fa-facebook"></i></a>   
                          <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>   <br>
							</p>
						</div>
					</div>
					<div class="col-lg-5  col-md-6 col-sm-6 text-right">
						<div class="single-footer-widget">
							<h4 class="text-white">للإشتراك في المقالات</h4>
							<div class="d-flex flex-row text-right" id="mc_embed_signup">
								<form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								 method="get">
									<div class="input-group add-on text-right">
										<input class="form-control" name="EMAIL" placeholder="بريدك الإلكتروني" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
										 required="" type="email">
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
										</div>
										<div class="input-group-btn">
											<button class="genric-btn text-uppercase">
												get started
											</button>
										</div>
									</div>
									<div class="info mt-20"></div>
								</form>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<p class="footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
كل الحقوق محفوظه و مطبوعه لدى فريق مستشارك الطبي <script>document.write(new Date().getFullYear());</script>  
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->









        <script src="{{ asset('assets/js/mine.js') }}"></script>

        <!--begin template script-->
        <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>


    <script src="{{ asset('assets/js/popper.js') }}"></script>
    
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('assets/js/stellar.js') }}"></script>
    
    <script src="{{ asset('assets/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    
    <script src="{{ asset('assets/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    

    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    
    <script src="{{ asset('assets/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
    
    <script src="{{ asset('assets/vendors/counter-up/jquery.counterup.js') }}"></script>
    
    <script src="js/mail-script.js"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    
    <script src="{{ asset('assets/js/gmaps.min.js') }}"></script>

	<script src="{{ asset('assets/js/theme.js') }}"></script>


    <script src="{{ asset('assets/js/mine.js') }}"></script>



</body>
</html>
