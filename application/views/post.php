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

	<?php include('include/files.php');?>
</head>
<body>
	<div id="frame_">
	<div id="layout" class="full">
    	<!-- inicia header -->
        <?php include('include/header.php'); ?>
		<!-- end header -->
		
		
		<!-- inicia Contenido -->
		<div class="page-content">
        
	        <!-- breadcrums -->
	        <div class="breadcrumb-place">
				<div class="row clearfix">
					<h3 class="page-title"> Noticias </h3>
					<div class="breadcrumbIn">
						<span> Tu estas aquí </span>
						<ul>
							<li><a href="index.html" title="Homepage"> <i class="icon-home"></i> </a></li>
							<li><a href="blog-right-sidebar.html" title="Blog"> Noticias </a></li>
							
						</ul>
					</div><!-- breadcrumbIn -->
				</div><!-- row -->
			</div>
	        <!-- termina breadcums -->
        	<br>
        	<br>
			<div class="row clearfix mbs">

				<div class="grid_8 posts">
					<div class="post">
					<?php
						if (in_array("video", $post->categorias))
							echo '<div class="iframe-thumb"><iframe src="'.$post->video_path.'" width="100%" height="380"></iframe></div>';
						else 
							echo '<div class="thumb-big"><img src="'.$post->path_image.'" alt="#"></div>';
					?>
						<div class="meta-box">
						
							<h3> <?php echo $post->titulo; ?></h3>
							<div class="meta-more">
								<span><i class="icon-user"></i> <a href="#"><?php echo $post->autor; ?></a></span>
								<span><i class="icon-time"></i> <a href="#"><?php echo $post->fecha_str; ?></a></span>
							</div><!-- meta more -->
						</div><!-- meta box -->
						<p><?php echo $post->texto; ?></p>
						
						<div class="share-post mb mtf clearfix">
							<div class="btn-share">
								<div class="fb-share-button" data-href="<?php echo base_url().$_SERVER['REQUEST_URI']; ?>" data-layout="button_count"></div>
							</div>
							<div class="btn-share"><a href="<?php echo base_url().$_SERVER['REQUEST_URI']; ?>" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>
						</div><!-- close share post -->
					</div><!-- end post image -->

				</div><!-- grid 8 posts -->

				<div class="grid_4 sidebar">
					<?php include('include/barra_izquierda.php'); ?>

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
	<?php include('include/scripts.php'); ?>
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