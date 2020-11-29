<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Coffee Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{url('public')}}/asset/user/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="{{url('public')}}/asset/user/css/style.css" rel='stylesheet' type='text/css' />
<script src="{{url('public')}}/asset/user/js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="{{url('public')}}/asset/user/js/move-top.js"></script>
<script type="text/javascript" src="{{url('public')}}/asset/user/js/easing.js"></script>
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
						<li><a href="{{url('about')}}">About</a></li>
						<li><a href="{{url('galeri')}}" class="active">Gallery</a></li>
						<li><a href="{{url('contact')}}">Contact</a></li>
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
	<!--banner-end-->
	<!--gallery-starts-->
	<div class="gallery">
		<div class="container">
			<div class="gallery-top heading">
				<h3>OUR GALLERY</h3>
			</div>
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="{{url('public')}}/asset/user/images/g-1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="{{url('public')}}/asset/user/images/g-1.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="{{url('public')}}/asset/user/images/g-2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="{{url('public')}}/asset/user/images/g-2.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="{{url('public')}}/asset/user/images/g-3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="{{url('public')}}/asset/user/images/g-3.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="{{url('public')}}/asset/user/images/g-4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="{{url('public')}}/asset/user/images/g-4.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>	
						<a href="{{url('public')}}/asset/user/images/g-5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="{{url('public')}}/asset/user/images/g-5.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="{{url('public')}}/asset/user/images/g-6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="{{url('public')}}/asset/user/images/g-6.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="{{url('public')}}/asset/user/images/g-7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="{{url('public')}}/asset/user/images/g-7.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="{{url('public')}}/asset/user/images/g-8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="{{url('public')}}/asset/user/images/g-8.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="{{url('public')}}/asset/user/images/g-9.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="{{url('public')}}/asset/user/images/g-9.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</section>
				
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>
        </div>
	</div>
	<!--gallery-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p>© 2015 Coffee Blog. Design by Creative Team <a href="http://w3layouts.com/" target="_blank"></a> </p>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>