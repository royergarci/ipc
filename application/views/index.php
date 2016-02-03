<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><!--<![endif]-->
<head>
	<title>Isidro Pedraza Chavez - Juntos y de Frente por Hidalgo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Isidro Pedraza Chavez juntos y de frente por Hidalgo">
		<meta name="keywords" content="Isidro Pedraza, Chavez, Hidalgo, Gobiernador Hidalgo, Gobierno de Hidalgo">

	<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/icons.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/animate.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/rs-plugin/css/settings.css" media="screen" /><!-- Revolution Slider -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/responsive.css" media="screen" />
		<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico">
		<link rel="apple-touch-icon" href="<?php echo base_url();?>images/apple-touch-icon.png">

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="frame_">
	<div id="layout" class="full">
    	<!-- inicia header -->
        <?php include('include/header.php'); ?>
		<!-- end header -->
		
		
		<!-- inicia Contenido -->
		<div class="page-content">
        
	        <?php include('include/matrix2.php'); ?>
			<!-- End Revolution Slider -->
        	
			<div class="row clearfix mbs">

				<div class="grid_8 posts s-thumbnails">
					<h3 class="col-title"> Ultimas noticias </h3>
					<br>

				
					<?php 
					foreach ($posts as $post) {
					?>
					
					<div class="post clearfix">
						<a href="blog-single-image.html" class="thumb-small fll"><img src="<?php echo $post->path_image; ?>" alt="#"></a>
						<div class="content-two-third">
							<div class="meta-box">
								<h3> <a href="blog-single-image.html"><?php echo $post->titulo; ?></a> </h3>
								<div class="meta-more">
									<span><i class="icon-user"></i> <a href="#"><?php echo $post->autor; ?></a></span>
									<span><i class="icon-time"></i> <a href="#"><?php echo $post->fecha_str; ?></a></span>
									
								</div><!-- meta more -->
							</div><!-- meta box -->
							<p><?php echo substr($post->texto,0,150).'[...]'; ?></p>
						<a href="<?php echo $post->objectId; ?>" class="tbutton small"><span>Leer Mas<i class="mii icon-angle-right"></i></span></a>
						</div><!-- content two third -->
					</div><!-- post image -->
					<?php 
					}
					?>

					<div class="post clearfix">
						<div class="iframe-thumb fll"><iframe src="http://player.vimeo.com/video/25073794?title=0&amp;byline=0&amp;portrait=0" width="100%" height="200"></iframe></div>
						<div class="content-two-third">
							<div class="meta-box">
								<h3> <a href="blog-single-video.html">Skoda - Curriculum Vitae external video post from vimeo</a> </h3>
								<div class="meta-more">
									<span><i class="icon-user"></i> <a href="#">Michele</a></span>
									<span><i class="icon-time"></i> <a href="#">24 Aug, 2013</a></span>
									<span><i class="icon-comments"></i> <a href="#">28 Comments</a></span>
								</div><!-- meta more -->
							</div><!-- meta box -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi [...]</p>
						<a href="blog-single-video.html" class="tbutton small"><span>Read More<i class="mii icon-angle-right"></i></span></a>
						</div><!-- content two third -->
					</div><!-- post video -->

					<div class="post clearfix">
						<div class="iframe-thumb fll"><iframe src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F54940669" width="100%" height="166"></iframe></div>
						<div class="content-two-third">
							<div class="meta-box">
								<h3> <a href="blog-single-sound.html">Standard Soundcloud music player</a> </h3>
								<div class="meta-more">
									<span><i class="icon-user"></i> <a href="#">Johhny</a></span>
									<span><i class="icon-time"></i> <a href="#">21 Aug, 2013</a></span>
									<span><i class="icon-comments"></i> <a href="#">1 Comments</a></span>
								</div><!-- meta more -->
							</div><!-- meta box -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris [...]</p>
						<a href="blog-single-sound.html" class="tbutton small"><span>Read More<i class="mii icon-angle-right"></i></span></a>
						</div><!-- content twothird -->
					</div><!-- post sound -->

					<div class="post">
						<div class="blockquote-post">
							<i class="icon-quote-left icon-4x pull-left icon-muted"></i>
							<p>"Any intelligent fool can make things bigger, more complex, and more violent. It takes a touch of genius -- and a lot of courage -- to move in the opposite direction."</p>
							<span> - Albert Einstein </span>
						</div>
						<div class="meta-box">
							<img class="image-author" src="images/assets/author1.jpg" alt="#">
							<h3 class="for-big"> <a href="blog-single-commentform.html">Albert Einstein a bigger man in world</a> </h3>
							<div class="meta-more">
								<span><i class="icon-user"></i> <a href="#">behzad</a></span>
								<span><i class="icon-time"></i> <a href="#">17 Aug, 2013</a></span>
								<span><i class="icon-comments"></i> <a href="#">0 Comments</a></span>
								<span><i class="icon-link"></i> in <a href="#">quotes</a></span>
							</div><!-- meta more -->
						</div><!-- meta box -->
					</div><!-- post quote -->

					<div class="post clearfix">
						<div class="thumb-small fll">
							<div class="projectslider clearfix flexslider">
								<ul class="slides">
									<li><img src="images/assets/blog-m2.jpg" alt="#"></li>
									<li><img src="images/assets/blog-m3.jpg" alt="#"></li>
									<li><img src="images/assets/blog-m4.jpg" alt="#"></li>
								</ul>
							</div>
						</div>
						<div class="content-two-third">
							<div class="meta-box">
								<h3> <a href="blog-single-slider.html">Standard Post with great photo slider unlimited</a> </h3>
								<div class="meta-more">
									<span><i class="icon-user"></i> <a href="#">Michele</a></span>
									<span><i class="icon-time"></i> <a href="#">10 Aug, 2013</a></span>
									<span><i class="icon-comments"></i> <a href="#">2 Comments</a></span>
								</div><!-- meta more -->
							</div><!-- meta box -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo [...]</p>
							<a href="blog-single-slider.html" class="tbutton small"><span>Read More<i class="mii icon-angle-right"></i></span></a>
						</div><!-- content twothird -->
					</div><!-- post slider -->

					<div class="pagination-tt clearfix">
						<ul>
							<li><span>1</span></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><span>...</span></li>
							<li><a href="#">27</a></li>
						</ul>
						<span class="pages">Page 1 of 27</span>
					</div><!-- pagination -->
				</div><!-- grid 8 posts -->

				<div class="grid_4 sidebar">
					<div class="widget metro-social clearfix">
						<ul>
							<li><a class="rssf" href="http://feeds.feedburner.com/#"><i class="icon-rss"></i></a><h4>10578</h4><span>Subscribers</span></li>
							<li><a class="fb" href="http://www.facebook.com/theme20"><i class="icon-facebook"></i></a><h4>25602</h4><span>Likes</span></li>
							<li><a class="tw" href="http://www.twitter.com/behzadg1"><i class="icon-twitter"></i></a><h4>15748</h4><span>Followers</span></li>
						</ul>
					</div><!-- widget metro social -->

					<div class="widget">
						<form action="search.html" id="searchwidget" method="get">
							<input name="search" type="text" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ...">
							<button type="submit"><i class="icon-search"></i></button>
						</form><!-- end form -->
					</div><!-- widget search -->

					<div class="widget">
						<h3 class="col-title"> Categories </h3><span class="liner"></span>
						<ul class="list">
							<li><a href="#"><i class="icon-caret-right"></i> News and updates (7) </a></li>
							<li><a href="#"><i class="icon-caret-right"></i> Interviews (13)</a></li>
							<li><a href="#"><i class="icon-caret-right"></i> Graphic and web design (34)</a></li>
							<li><a href="#"><i class="icon-caret-right"></i> Wordpress Hacks (19)</a></li>
							<li><a href="#"><i class="icon-caret-right"></i> Freebie's (17)</a></li>
						</ul><!-- end list -->
					</div><!-- widget list -->

					<div class="widget tags">
						<h3 class="col-title"> Tags </h3><span class="liner"></span>
						<a href="#" class="#" title="17 topic"><i class="icon-tag"></i> corporate </a>
						<a href="#" class="#" title="44 topic"><i class="icon-tag"></i> theme </a>
						<a href="#" class="#" title="10 topic"><i class="icon-tag"></i> css3 </a>
						<a href="#" class="#" title="2 topic"><i class="icon-tag"></i> premium </a>
						<a href="#" class="#" title="29 topic"><i class="icon-tag"></i> html5 </a>
						<a href="#" class="#" title="4 topic"><i class="icon-tag"></i> business </a>
					</div><!-- widget tags -->

					<div class="widget">
						<ul class="tabs">
							<li><a href="#popular" class="active">Popular</a></li>
							<li><a href="#recent">Recent</a></li>
							<li><a href="#comments">Comments</a></li>
						</ul><!-- tabs -->

						<ul class="tabs-content">
							<li id="popular" class="active">
								<ul class="tab-content-items">
									<li class="clearfix">
										<a class="post-thumbnail" href="blog-single-slider.html"><img width="60" height="60" src="images/assets/thumb1.jpg" alt="#"></a>
										<h3><a href="blog-single-slider.html">Next Elections Resolutions: What could be the worst?</a></h3>
										<div class="post-meta">
											<span><a href="#"><i class="icon-comments"></i>20</a></span>
											<span><i class="icon-eye-open"></i>2127</span>
											<span><a href="#"><i class="icon-heart-empty"></i>2413</a></span>
										</div>
									</li>
									<li class="clearfix">
										<a class="post-thumbnail" href="blog-single-image.html"><img width="60" height="60" src="images/assets/thumb2.jpg" alt="#"></a>
										<h3><a href="blog-single-image.html">Praesent adipiscing mi eget ipsum imperdiet</a></h3>
										<div class="post-meta">
											<span><a href="#"><i class="icon-comments"></i>14</a></span>
											<span><i class="icon-eye-open"></i>1804</span>
											<span><a href="#"><i class="icon-heart-empty"></i>1701</a></span>
										</div>
									</li>
									<li class="clearfix">
										<a class="post-thumbnail" href="blog-single-video.html"><img width="60" height="60" src="images/assets/thumb3.jpg" alt="#"></a>
										<h3><a href="blog-single-video.html">Paul Thomson on Post with SoundCloud</a></h3>
										<div class="post-meta">
											<span><a href="#"><i class="icon-comments"></i>11</a></span>
											<span><i class="icon-eye-open"></i>1512</span>
											<span><a href="#"><i class="icon-heart-empty"></i>1100</a></span>
										</div>
									</li>
								</ul>
							</li><!-- popular content -->
							<li id="recent">
								<ul class="tab-content-items">
									<li class="clearfix">
										<a class="post-thumbnail" href="blog-single-image.html"><img width="60" height="60" src="images/assets/thumb4.jpg" alt="#"></a>
										<h3><a href="blog-single-image.html">Itaque earum rerum hic tenetur a sapiente</a></h3>
										<div class="post-meta">
											<span><a href="#"><i class="icon-comments"></i>20</a></span>
											<span><i class="icon-time"></i>30 Aug</span>
										</div>
									</li>
									<li class="clearfix">
										<a class="post-thumbnail" href="blog-single-slider.html"><img width="60" height="60" src="images/assets/thumb5.jpg" alt="#"></a>
										<h3><a href="blog-single-slider.html">Delectus ut aut reiciendis voluptatibus</a></h3>
										<div class="post-meta">
											<span><a href="#"><i class="icon-comments"></i>14</a></span>
											<span><i class="icon-time"></i>28 Aug</span>
										</div>
									</li>
									<li class="clearfix">
										<a class="post-thumbnail" href="blog-single-video.html"><img width="60" height="60" src="images/assets/thumb6.jpg" alt="#"></a>
										<h3><a href="blog-single-video.html">Tenetur a sapiente delectus, ut aut reiciendis</a></h3>
										<div class="post-meta">
											<span><a href="#"><i class="icon-comments"></i>11</a></span>
											<span><i class="icon-time"></i>27 Aug</span>
										</div>
									</li>
								</ul>
							</li><!-- tab content -->
							<li id="comments">
								<ul class="tab-content-items">
									<li class="clearfix">
										<a class="post-thumbnail" href="#"><img width="60" height="60" src="images/assets/avatar1.jpg" alt="#"></a>
										<p><strong><a href="#">Alexander</a> <i>says:</i></strong> Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis </p>
									</li>
									<li class="clearfix">
										<a class="post-thumbnail" href="#"><img width="60" height="60" src="images/assets/avatar2.jpg" alt="#"></a>
										<p><strong><a href="#">Xina</a> <i>says:</i></strong> Sapiente delectus, ut aut reiciendis itaque earum rerum hic tenetur a vem.</p>
									</li>
									<li class="clearfix">
										<a class="post-thumbnail" href="#"><img width="60" height="60" src="images/assets/avatar3.jpg" alt="#"></a>
										<p><strong><a href="#">Michele</a> <i>says:</i></strong> Tenetur a sapiente delectus, ut aut reiciendis </p>
									</li>
								</ul>
							</li><!-- tab content -->
						</ul><!-- end tabs -->
					</div><!-- widget tabs -->

					<div class="widget">
						<h3 class="col-title"> Instagram Stream </h3><span class="liner"></span>
						<iframe src="http://snapwidget.com/in/?u=dGhlbWVmb3Jlc3R8aW58MTA4fDN8M3x8bm98MXxmYWRlSW58b25TdGFydHxubw==&v=19913" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height: 327px" ></iframe>
					</div><!-- widget instagram -->

				</div><!-- grid 4 sidebar -->

			</div><!-- row -->

		</div><!-- end page content -->

		<div class="grey-line parallax" data-stellar-background-ratio="0.5" style="background-color: rgb(255, 204, 0); background-position: 0% 32px;">
			<div class="newsletter_row row clearfix animated" data-gen="fadeInUp">
				<div class="fll">
					<h3>Suscribete para recibir información</h3>
					<span>sobre las actividades de Isidro Pedraza Chavez</span>
				</div>
				<div class="flr">
					<form id="newsletters" method="post" action="http://feedburner.google.com/fb/a/mailverify" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=sevenpsd', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
						<input type="email" onfocus="if (this.value=='Type Your Email') this.value = '';" onblur="if (this.value=='') this.value = 'Type Your Email';" value="Type Your Email" placeholder="Type Your Email" required="required">
						<button type="submit"><i class="icon-ok"></i></button>
					</form>
				</div>
			</div><!-- row -->
		</div><!-- grey line -->
		<!-- inicia footer -->
        <?php include('include/footer.php'); ?>
		<!-- end footer -->

	</div><!-- end layout -->
	</div><!-- end frame -->

<div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->
<!-- Scripts -->
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url();?>js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/theme20.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.knob.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/gmap3.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/custom.js"></script>
	<script type="text/javascript">	
	/* <![CDATA[ */
		var tpj=jQuery;
		tpj.noConflict();
		tpj(document).ready(function() {
		if (tpj.fn.cssOriginal!=undefined)
			tpj.fn.css = tpj.fn.cssOriginal;
			var api= tpj('.revolution').revolution({
				delay:9000,
				startheight:410,
				startwidth:1140,
				navigationType:"bullet",
				navigationArrows:"solo",
				navigationStyle:"round",	
				touchenabled:"on", 
				onHoverStop:"on", 
				navOffsetHorizontal:0,
				navOffsetVertical:20,
				shadow:0
			});
		});
	/* ]]> */
	</script>
</body>
</html>