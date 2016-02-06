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
	<?php include_once("analyticstracking.php") ?>
	<div id="frame_">
	<div id="layout" class="full">
    	<!-- inicia header -->
        <?php include('include/header.php'); ?>
		<!-- end header -->
		
		<?php include('include/slider.php'); ?>
		<!-- inicia Contenido -->
		<div class="page-content">
        
			<!-- End Revolution Slider -->
        	
			<div class="row clearfix mbs">

				<div class="grid_8 posts s-thumbnails">
					<h3 class="col-title"> Ultimas noticias </h3>
					<br>

				
					<?php 
					foreach ($posts as $post) {

					  if ($enviroment == "parse"){
						if (!in_array("video", $post->categorias)){
							//echo $post->objectId;
						?>
							<div class="post clearfix">
								<a href="<?php echo base_url().'index.php/post/getPost/'.$post->getObjectId(); ?>" class="thumb-small fll"><img src="<?php echo $post->path_image; ?>" alt="#"></a>
								<div class="content-two-third">
									<div class="meta-box">
										<h3> <a href="<?php echo base_url().'index.php/post/getPost/'.$post->getObjectId(); ?>"><?php echo $post->titulo; ?></a> </h3>
										<div class="meta-more">
											<span><i class="icon-user"></i> <a href="#"><?php echo $post->autor; ?></a></span>
											<span><i class="icon-time"></i> <a href="#"><?php echo $post->fecha_str; ?></a></span>
											
										</div><!-- meta more -->
									</div><!-- meta box -->
									<p><?php echo substr($post->texto,0,150).'[...]'; ?></p>
								<a href="<?php echo base_url().'index.php/post/getPost/'.$post->getObjectId(); ?>" class="tbutton small"><span>Leer Mas<i class="mii icon-angle-right"></i></span></a>
								</div><!-- content two third -->
							</div><!-- post image -->
					<?php 
						}
						else{
					?>
					<div class="post clearfix">
						<div class="iframe-thumb fll"><iframe src="<?php echo $post->video_path;?>" width="100%" height="150"></iframe></div>
						<div class="content-two-third">
							<div class="meta-box">
								<h3> <a href="<?php echo base_url().'index.php/post/getPost/'.$post->getObjectId(); ?>"><?php echo $post->titulo; ?></a> </h3>
								<div class="meta-more">
									<span><i class="icon-user"></i> <a href="#"><?php echo $post->autor; ?></a></span>
									<span><i class="icon-time"></i> <a href="#"><?php echo $post->fecha_str; ?></a></span>
								</div><!-- meta more -->
							</div><!-- meta box -->
							<p><?php echo substr($post->texto,0,150).'[...]'; ?></p>
							<a href="<?php echo base_url().'index.php/post/getPost/'.$post->getObjectId(); ?>" class="tbutton small"><span>Leer más<i class="mii icon-angle-right"></i></span></a>
						</div><!-- content two third -->
					</div><!-- post video -->
					<?php }
					  } // if enviroment
					  else
					  {
					  	//local
					  ?>
					  	<div class="post clearfix">
								<a href="<?php echo base_url().'index.php/post/getPost/'.$post->objectId; ?>" class="thumb-small fll"><img src="<?php echo $post->path_image; ?>" alt="#"></a>
								<div class="content-two-third">
									<div class="meta-box">
										<h3> <a href="<?php echo base_url().'index.php/post/getPost/'; ?>"><?php echo $post->titulo; ?></a> </h3>
										<div class="meta-more">
											<span><i class="icon-user"></i> <a href="#"><?php echo $post->autor; ?></a></span>
											<span><i class="icon-time"></i> <a href="#"><?php echo $post->fecha_str; ?></a></span>
											
										</div><!-- meta more -->
									</div><!-- meta box -->
									<p><?php echo substr($post->texto,0,150).'[...]'; ?></p>
								<a href="<?php echo base_url().'index.php/post/getPost/'; ?>" class="tbutton small"><span>Leer Mas<i class="mii icon-angle-right"></i></span></a>
								</div><!-- content two third -->
							</div><!-- post image -->
				 <?php
					  }
					} //foreach de post
					?>

					<!--
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
					</div> -->
					<!-- pagination -->
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