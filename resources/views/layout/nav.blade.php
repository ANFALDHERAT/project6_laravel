<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<!-- Include Tiny Slider CSS and JS from CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.10.2/tiny-slider.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.10.2/min/tiny-slider.js"></script>
	<link rel="stylesheet" href="{{ asset('hero/css/owl.carousel.min.css') }}">

		{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css"> --}}
		<link rel="stylesheet" href="{{ asset('hero/css/style.css') }}">
		<link href='{{ asset('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css')}}' rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;ampdisplay=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"
        href="{{ asset('../assets/vendor/css/rtl/core.css" class="template-customizer-core-css') }}" />
    <link rel="stylesheet"
        href="{{ asset('../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('style/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('style/css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/thankyou.css') }}">
	

    <title>@yield('title')</title>
    <style>
		.imgnav{
			max-width: 70px;
		}
   @media only screen and (min-width: 481px) and (max-width: 768px) {

	.imgnav{
			max-width: 50px;
		}
   }
   @media only screen and (max-width: 480px) {
	.imgnav{
			max-width:50px;
		}
		.name{
			font-size: 15px
		}
   }








    </style>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">

							<a href="{{ route('home') }}" class="logo m-0 float-start text-white"><img src="{{ asset('assets/img/furnishareyellow.png')}}" alt="" width="80"></a>
						</div>
						<div class="col-6 text-center">
							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto" >
								<li class="{{ request()->routeIs('home') ? 'active' : '' }}" ><a href="{{ route('home') }}">Home</a></li>
								<li class="{{ request()->routeIs('Give Donation') ? 'active' : '' }}"><a href="{{ route('Give Donation') }}">Donation</a></li>
								<li class="{{ request()->routeIs('Give Services') ? 'active' : '' }}"><a href="{{ route('Give Services') }}">Services</a></li>
								<li class="{{ request()->routeIs('Give Items') ? 'active' : '' }}"><a href="{{ route('Give Items') }}">Item</a></li>
								<li class="{{ request()->routeIs('volunteer') ? 'active' : '' }}"><a href="{{ route('volunteer') }}">Volunteer</a></li>
								<li class="{{ request()->routeIs('aboutus') ? 'active' : '' }}"><a href="{{ route('aboutus') }}">About</a></li>
								<li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
							</ul>
						</div>
						<div class="col-4 text-end">
							<div class="d-flex align-items-center justify-content-end">
								@if (Route::has('login'))
									@auth
										<div class="nav-item navbar-dropdown dropdown-user dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-bs-toggle="dropdown">
												<div style="display: flex; align-items: center; justify-content: flex-end;">
													<span class="name" style="color:white; padding-right:7px;">{{ auth()->user()->name }}</span>
                                                    <div style="color: #fff; padding-right:10px; font-size:13px"><i class='bx bxs-down-arrow'></i></div>
													<img src="{{ auth()->user()->image }}" alt="Image" class="imgnav img-fluid rounded-circle" style="width: 50px; height: 50px;" >
												</div>
											</a>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="{{ route('profile') }}">
														<i class="mdi mdi-account-outline me-2"></i>
														<span class="align-middle">My Profile</span>
													</a>
												</li>
												<li>
													<div class="dropdown-divider"></div>
												</li>
												<li>
													<a class="dropdown-item" href="{{ route('logout') }}">
														<i class="mdi mdi-exit-to-app me-2"></i>
														<span class="align-middle">Log Out</span>
													</a>
												</li>
											</ul>
										</div>
									@else
										<a href="{{ route('login') }}" class="btn  btn-warning" style="color: white;">
											<span>Login</span>
										</a>
										<a href="{{ route('register') }}" class="btn btn-primary" style=" margin-left:10px">
											<span>Register</span>
										</a>
									@endauth
								@endif
							
								<div class="col-3 text-end">
									<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
										<span></span>
									</a>
		
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	
	
