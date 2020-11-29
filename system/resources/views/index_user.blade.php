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
						<li><a href="{{url('user')}}" class="active">Home</a></li>
						<li><a href="{{url('about')}}">About</a></li>
						<li><a href="{{url('galeri')}}">Gallery</a></li>
						<li><a href="{{url('contact')}}">Contact</a></li>
						<li><a href="{{url('login')}}">Login</a></li>
						<li><a href="typo.html"></a></li>
						<li><a href="contact.html"></a></li>
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
				$(" ul.navig").slideToggle("slow", function(){
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
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-one">
						<h3>Coffee of the month</h3>
					</div>
					<div class="about-two">
						<a href=""><img src="{{url('public')}}/asset/user/images/c-1.jpg" alt="" /></a>
						<p>Posted by <a href="#">Johnson</a> on 10 feb, 2015 <a href="#">comments(2)</a></p>
						<h4>Kopi Memiliki Beragam Rasa</h4>
						<p>Well, ‘beragam rasa’ yang dimaksud di sini adalah after taste. After taste adalah flavour atau rasa yang tertinggal di mulut pada saat meneguk kopi. Mungkin kamu belum tahu kalau kopi mampu memberikan aneka after taste pada saat diminum. Tak semua kopi memiliki karakteristik sama terutama saat dinikmati melalui metode manual brewing. Ada kopi yang after taste-nya nutty, cocoa atau justru karamel. Ada juga yang after taste-nya jeruk atau bisa juga stroberi. Kenapa bisa demikian? Itu tergantung kontur tanah dan di mana kopi itu berasal dan di mana kopi itu ditanam. Kopi adalah tanaman unik yang ternyata juga bisa menyerap ‘rasa’ dari tanaman yang ada di dekatnya. Keunikannya ini menjadikan kopi istimewa. Kini banyak para ahli kopi yang mencari kopi-kopi unik di seluruh dunia untuk menemukan after taste-nya.</p>
						</div>
						<ul>
							<li><p>Share : </p></li>
							<li><a href="#"><span class="fb"> </span></a></li>
							<li><a href="#"><span class="twit"> </span></a></li>
							<li><a href="#"><span class="pin"> </span></a></li>
						</ul>
					</div>	
					<div class="about-tre">
						<div class="a-1">
							<div class="col-md-6 abt-left">
								<a href="{{url('views/artikel1')}}"><img src="{{url('public')}}/asset/user/images/c-3.jpg" alt="" /></a>
								<h3><a href="single.html">12 Alasan Ilmiah Kenapa Kamu Harus Minum Kopi Hitam Setiap Hari</a></h3>
								<p>Banyak sekali manfaat minum kopi hitam, antara lain mengurasi resiko jantung, kanker, mengurangi resiko terkena alzheimer, dan meningkatkan fungsi hati. Yang perlu kita lakukan untuk merasakan manfaat itu semua adalah dengan memperhatikan jenis kopi yang kita konsumsi. Sebaiknya konsumsilah kopi hitam murni dan segar tanpa campuran apapun termasuk gula dan susu.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="col-md-6 abt-left">
								<a href="{{url('views/artikel2')}}"><img src="{{url('public')}}/asset/user/images/c-4.jpg" alt="" /></a>
								<h3><a href="single.html">Beli Kopi Biji atau Bubuk? Mana yang Lebih Baik?</a></h3>
								<p>Ketika kamu membeli kopi dalam bentuk bubuk, besar kemungkinan kopi tersebut sudah mengalami proses oksidasi atau proses masuknya gas oksigen ke dalam kopi bubuk tersebut. Hal ini akan membuat kopi bereaksi terhadap minyak alami dan kandungan larutan lain yang dimilikinya sehingga membuat kopi tidak segar lagi4</p>
								<label>May 29, 2015</label>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="a-1">
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="{{url('public')}}/asset/user/images/c-5.jpg" alt="" /></a>
								<h3><a href="single.html">Perbedaan Espresso dan Filter Kopi, Mana yang lebih baik?</a></h3>
								<p>Espresso dibuat dengan waktu yang cepat, hasilnya pekat dan sedikit pahit. Sedangkan filter kopi membutuhkan sedikit waktu lebih lama untuk membuatnya, namun hasilnya cenderung lebih bersih, lembut, dan sedikit asam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="{{url('public')}}/asset/user/images/c-6.jpg" alt="" /></a>
								<h3><a href="single.html">Apa yang Terjadi Jika Pecandu Kopi Tidak Minum Kopi</a></h3>
								<p>Bagi pecandu kopi, tidak minum kopi satu hari saja dapat menimbulkan berbagai gangguan, seperti rasa pusing, perasaan tidak nyaman, sulit berkonsentrasi dan gelisah. Apakah kamu merasakan hal yang sama?</p>
								<label>May 29, 2015</label>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="a-1">
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="{{url('public')}}/asset/user/images/c-7.jpg" alt="" /></a>
								<h3><a href="single.html">Tips Ngopi di Bulan Puasa</a></h3>
								<p>Tidak ada larangan untuk mengonsumsi kopi di bulan puasa, hanya saja ada beberapa tips yang perlu kamu perhatikan, seperti waktu ngopi, kuantitas dan tentunya kualitas kopi yang kamu minum.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="{{url('public')}}/asset/user/images/c-8.jpg" alt="" /></a>
								<h3><a href="single.html">Inilah Alasan Kenapa Lebih Baik Menyeduh Kopi Sendiri di Rumah Daripada Beli</a></h3>
								<p>Ada beberapa alasan kenapa lebih baik menyeduh kopi sendiri daripada membelinya, diantaranya adalah menjadikan kegiatan menyeduh kopi menjadi kegiatan menyenangkan setiap harinya, dapat mengeksplor kopi lebih ‘dalam’ tanpa takut mengganggu orang lain, mencoba berbagai jenis kopi dan pastinya bisa menghemat uang. Bagaimana menurut kamu?</p>
								<label>May 29, 2015</label>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>	
				</div>
				<div class="col-md-4 about-right heading">
					<div class="abt-1">
						<h3>ABOUT US</h3>
						<div class="abt-one">
							<img src="{{url('public')}}/asset/user/images/c-2.jpg" alt="" />
							<p>Pengertian Kopi Single Origin yang Harus Kamu Ketahui</p>
							<p>Kopi single origin bisa saja : 1. Berupa kopi yang sepenuhnya berasal dari satu perkebunan kopi, atau 2. kopi dari beberapa perkebunan kopi namun masih di suatu daerah yang lebih umum, atau 3. kopi dari beberapa perkebunan kopi di negara yang sama.</p>
							<div class="a-btn">
								<a href="single.html">Read More</a>
							</div>
						</div>
					</div>
					<div class="abt-2">
						<h3>YOU MIGHT ALSO LIKE</h3>
							<div class="might-grid">
								<div class="grid-might">
									<a href="single.html"><img src="{{url('public')}}/asset/user/images/c-12.jpg" class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="single.html">Duis consectetur gravida</a></h4>
									<p>Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh odio.</p> 
								</div>
								<div class="clearfix"></div>
							</div>	
							<div class="might-grid">
								<div class="grid-might">
									<a href="single.html"><img src="{{url('public')}}/asset/user/images/c-10.jpg" class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="single.html">Duis consectetur gravida</a></h4>
									<p> Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh odio.</p> 
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="might-grid">
								<div class="grid-might">
									<a href="single.html"><img src="{{url('public')}}/asset/user/images/c-11.jpg" class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="single.html">Duis consectetur gravida</a></h4>
									<p> Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh odio.</p> 
								</div>
								<div class="clearfix"></div>
							</div>							
					</div>
					<div class="abt-2">
						<h3>ARCHIVES</h3>
						<ul>
							<li><a href="single.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
							<li><a href="single.html">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</a></li>
							<li><a href="single.html">When an unknown printer took a galley of type and scrambled it to make a type specimen book. </a> </li>
							<li><a href="single.html">It has survived not only five centuries, but also the leap into electronic typesetting</a> </li>
							<li><a href="single.html">Remaining essentially unchanged. It was popularised in the 1960s with the release of </a> </li>
							<li><a href="single.html">Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </a> </li>
							<li><a href="single.html">Software like Aldus PageMaker including versionsof Lorem Ipsum.</a> </li>
						</ul>	
					</div>
					<div class="abt-2">
						<h3>NEWS LETTER</h3>
						<div class="news">
							<form>
								<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
								<input type="submit" value="Subscribe">
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
	<!--about-end-->
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
							<img src="images/s-2.jpg" class="img-responsive" alt="">
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
							<img src="images/s-6.jpg" class="img-responsive" alt="">
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
				<p>© 2020 Coffee Break. Design by Creative Team<a href="http://w3layouts.com/" target="_blank"></a> </p>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>