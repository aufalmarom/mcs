<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Monitoring Cross-selling System</title>
		<link rel="stylesheet" href="{{asset('public/landing/vendors/mdi/css/materialdesignicons.min.css')}}">
		<link rel="stylesheet" href="{{asset('public/landing/vendors/owl.carousel/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('public/landing/vendors/owl.carousel/css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('public/landing/vendors/aos/css/aos.css')}}">
		<link rel="stylesheet" href="{{asset('public/landing/vendors/jquery-flipster/css/jquery.flipster.css')}}">
		<link rel="stylesheet" href="{{asset('public/landing/css/style.css')}}">
		<link rel="shortcut icon" href="{{asset('public/images/fav-aufalmarom.png')}}" />
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="mobile-menu-overlay"></div>
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#"><img class="mr-2" style="height:50px; width:50px;" src="{{asset('public/images/aufalmarom-white.png')}}" alt="MCS">MCS</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
						<img src="{{asset('public/landing/images/logo-dark.svg')}}" class="logo-mobile-menu" alt="logo">
						<a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
					</div>
					<ul class="navbar-nav ml-auto align-items-center">
						<li class="nav-item active">
							<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#features">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn btn-info" href="{{route('login')}}">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="page-body-wrapper">

			<section id="home" class="home">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="main-banner">
								<div class="d-sm-flex justify-content-between">
									<div data-aos="zoom-in-up">
										<div class="banner-title">
                                                <img style="width:120px; margin-left:50px;" src="{{asset('public/images/mandiri.png')}}" alt="">
												<h3 class="font-weight-medium">mandiri
											</h3>
										</div>
										<p class="mt-3">Monitoring Cross-selling System.

											<br>
                                            Sistem ini diperuntukkan monitoring penjualan pegawai internal Cabang Jakarta Mayestik.

										</p>
										<a href="{{route('login')}}" class="btn btn-secondary mt-3">Login</a>
									</div>
									<div class="mt-5 mt-lg-0">
										<img src="{{asset('public/landing/images/group.png')}}" alt="marsmello" class="img-fluid" data-aos="zoom-in-up">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="our-services " id="features">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h5 class="text-dark">We’re offering</h5>
							<h3 class="font-weight-medium text-dark mb-5">Sales Monitoring</h3>
						</div>
					</div>
					<div class="row" data-aos="fade-up">
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="{{asset('public/landing/images/integrated-marketing.svg')}}" alt="integrated-marketing" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Integrated
									Sales
								</h6>
								<p>Lorem ipsum dolor sit amet,
									pretium pretium tempor.Lorem ipsum
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box"   data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="{{asset('public/landing/images/design-development.svg')}}" alt="design-development" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Realtime Monitoring
								</h6>
								<p>Lorem ipsum dolor sit amet,
									pretium pretium tempor.Lorem ipsum
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="{{asset('public/landing/images/digital-strategy.svg')}}" alt="digital-strategy" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Digital
									Strategy
								</h6>
								<p>Lorem ipsum dolor sit amet,
									pretium pretium tempor.Lorem ipsum
								</p>
							</div>
						</div>
					</div>
					<div class="row" data-aos="fade-up">
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box  pb-lg-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="{{asset('public/landing/images/digital-marketing.svg')}}" alt="digital-marketing" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Digital
									Marketing
								</h6>
								<p>Lorem ipsum dolor sit amet,
									pretium pretium tempor.Lorem ipsum
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box pb-lg-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="{{asset('public/landing/images/growth-strategy.svg')}}" alt="growth-strategy" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Growth
									Strategy
								</h6>
								<p>Lorem ipsum dolor sit amet,
									pretium pretium tempor.Lorem ipsum
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box pb-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="{{asset('public/landing/images/saving-strategy.svg')}}" alt="saving-strategy" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Saving
									Strategy
								</h6>
								<p>Lorem ipsum dolor sit amet,
									pretium pretium tempor.Lorem ipsum
								</p>
							</div>
						</div>
					</div>
				</div>
            </section>
            <br><br><br><br><br><br><br><br>
		</div>
		<footer class="footer" id="about">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-7">
							<address>
								<p>Bank Mandiri Jakarta Mayestik</p>
								<p class="mb-4">Jl. </p>
								<div class="d-flex align-items-center">
									<p class="mr-4 mb-0">021 ..</p>
									<a href="mailto:info@yourmail.com" class="footer-link">jktmayestik@bankmandiri.co.id</a>
								</div>
							</address>
							<div class="social-icons">
								<h6 class="footer-title font-weight-bold">
									Sosial Media
								</h6>
								<div class="d-flex">
									<a href="#"><i class="mdi mdi-facebook-box"></i></a>
									<a href="#"><i class="mdi mdi-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="row">
								<div class="col-sm-4">
									<h6 class="footer-title">Produk Dana</h6>
									<ul class="list-footer">
										<li><a href="#" class="footer-link">Tabungan</a></li>
										<li><a href="#" class="footer-link">Giro</a></li>
										<li><a href="#" class="footer-link">Deposito</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h6 class="footer-title">Produk Kredit</h6>
									<ul class="list-footer">
										<li><a href="#" class="footer-link">Kredit Usaha Mikro</a></li>
										<li><a href="#" class="footer-link">Kredit Usaha Rakyat</a></li>
										<li><a href="#" class="footer-link">Kredit Serbaguna Mandiri</a></li>
										<li><a href="#" class="footer-link">Kredit Pemilikan Rumah</a></li>
										<li><a href="#" class="footer-link">Kredit Kendaraan Bermotor</a></li>
										<li><a href="#" class="footer-link">Kartu Kredit</a></li>
										<li><a href="#" class="footer-link">Kredit Modal Kerja</a></li>
										<li><a href="#" class="footer-link">Kredit Investasi</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h6 class="footer-title">Produk Investasi</h6>
									<ul class="list-footer">
										<li><a href="#" class="footer-link">Reksa Dana</a></li>
										<li><a href="#" class="footer-link">Axa Mandiri</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex align-items-center">
							<img style="height:40px; width:40px;" src="{{asset('public/images/aufalmarom-white.png')}}" alt="logo" class="mr-3">
							<p class="mb-0 text-small pt-1">© 2019<a href="https://aufalmarom.id" class="text-white" target="_blank"> aufalmarom.id</a>. All rights reserved.</p>
						</div>
						<div>
							<div class="d-flex">
								<a href="#" class="text-small text-white mx-2 footer-link">Privacy Policy </a>
								<a href="#" class="text-small text-white mx-2 footer-link">Customer Support </a>
								<a href="#" class="text-small text-white mx-2 footer-link">Careers </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="{{asset('public/landing/vendors/base/vendor.bundle.base.js')}}"></script>
		<script src="{{asset('public/landing/vendors/owl.carousel/js/owl.carousel.js')}}"></script>
		<script src="{{asset('public/landing/vendors/aos/js/aos.js')}}"></script>
		<script src="{{asset('public/landing/vendors/jquery-flipster/js/jquery.flipster.min.js')}}"></script>
		<script src="{{asset('public/landing/js/template.js')}}"></script>
	</body>
</html>
