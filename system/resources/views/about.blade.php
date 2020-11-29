<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Coffee Blog </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{url('public')}}/asset/user/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="{{url('public')}}/asset/user/css/style.css" rel='stylesheet' type='text/css' />
<script src="{{url('public')}}/asset/user/js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
	<!--script-->
	<script src="{{url('public')}}/asset/user/js/modernizr.custom.97074.js"></script>
<script src="{{url('public')}}/asset/user/js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="{{url('public')}}/asset/user/css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
		<script type="text/javascript" src="{{url('public')}}/asset/user/js/jquery.hoverdir.js"></script>
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="index.html"><img src="{{url('public')}}/asset/user/images/logo-1.png" alt="" /></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
						<li><a href="{{url('user')}}">Home</a></li>
						<li><a href="{{url('about')}}" class="active">About</a></li>
						<li><a href="{{url('galeri')}}">Gallery</a></li>
						<li><a href="{{url('contact')}}">Contact</a></li>
						<li><a href="{{url('login')}}">Login</a></li>
					</ul>
			</div>
			<div class="header-right">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				
				</div>
			</div>
		</div>
	</div>
	<!--banner-end-->
	<!--welcome-starts-->
	<div class="welcome">
		<div class="container">
			<div class="welcome-top heading">
				<h3>WELCOME</h3>
				<div class="welcome-bottom">
					<img src="{{url('public')}}/asset/user/images/abt-1.jpg" alt=""/>
					<p>Dunia perkopian berkembang dengan pesatnya akhir-akhir ini. Mereka yang mulanya hanya sekedar menikmati kopi instan dan (paling-paling) kopi tubruk di rumah kini telah beranjak ke kedai kopi dan menikmati aneka kopi dari mesin espresso. Kabar baiknya banyak penikmat kopi pemula yang menikmati kopi dengan level lebih tinggi.</p>
					<p>Yang dulunya mungkin hanya mampu menikmati frappe dan kopi-kopi bercampur gula dan krim kini bergeser menikmati cappuccino tanpa gula. Seiring dengan perkembangannya, banyak dari pemula yang belum tahu beberapa hal tentang kopi yang mereka nikmati. Dan untuk itu artikel ini dipersembahkan dengan senang hati untuk mereka agar tak lagi keliru soal fakta tentang kopi.</p>
				</div>
			</div>
		</div>
	</div>
	<!--welcome-end-->
	<!--team-starts-->
	<div class="team">
		<div class="container">
		<div class="team-top heading">
			<h3>OUR TEAM</h3>
		</div>
			<div class="team-bottom">
				<div class="col-md-3 team-left">
					<img src="{{url('public')}}/asset/user/images/t-1.jpg" alt="" />
					<h4>Rita Nelson</h4>
					<p>Fusce at elementum diam. Integer pellentesque ultricies pharetra.</p>
				</div>
				<div class="col-md-3 team-left">
					<img src="{{url('public')}}/asset/user/images/t-2.jpg" alt="" />
					<h4>Marta</h4>
					<p>Fusce at elementum diam. Integer pellentesque ultricies pharetra.</p>
				</div>
				<div class="col-md-3 team-left">
					<img src="{{url('public')}}/asset/user/images/t-3.jpg" alt="" />
					<h4>Joseph Goh</h4>
					<p>Fusce at elementum diam. Integer pellentesque ultricies pharetra.</p>
				</div>
				<div class="col-md-3 team-left">
					<img src="{{url('public')}}/asset/user/images/t-4.jpg" alt="" />
					<h4>Liliana</h4>
					<p>Fusce at elementum diam. Integer pellentesque ultricies pharetra.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--team-end-->
	<!--slide-starts-->
	<div class="slide">
		<div class="container">
			<div class="fle-xsel">
			<ul id="flexiselDemo3">
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="{{url('public')}}/asset/user/images/s-1.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="{{url('public')}}/asset/user/images/s-2.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>			
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="{{url('public')}}/asset/user/images/s-3.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>		
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="{{url('public')}}/asset/user/images/s-4.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>	
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="{{url('public')}}/asset/user/images/s-5.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>	
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="{{url('public')}}/asset/user/images/s-6.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>				
			</ul>
							
							 <script type="text/javascript">
								$(window).load(function() {
									
									$("#flexiselDemo3").flexisel({
										visibleItems: 5,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 2
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 3
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									
								});
								</script>
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--slide-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p>© 2020 Cofee Blog. Design by Creative Team<a href="http://w3layouts.com/" target="_blank"></a></p>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>