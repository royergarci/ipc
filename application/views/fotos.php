<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><!--<![endif]-->
<head>
	<title>Isidro Pedraza Chavez - Video y Fotos </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Isidro Pedraza Chavez juntos y de frente por Hidalgo">
		<meta name="keywords" content="Isidro Pedraza Chavez, Senador Hidalgo, Pedraza Chavez, Hidalgo, Gobernador Hidalgo, Gobierno de Hidalgo, PRD, PRD Hidalgo, Juntos y de frente por Hidalgo">

	<?php include('include/files.php');?>
</head>
<body>
	<?php include_once("include/analyticstracking.php") ?>
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
					<h3 class="page-title"> Fotos </h3>
					<div class="breadcrumbIn">
						<span> Tu estas aquí </span>
						<ul>
							<li><a href="index.html" title="Homepage"> <i class="icon-home"></i> </a></li>
							<li><a href="blog-right-sidebar.html" title="Blog"> Fotos </a></li>
							
						</ul>
					</div><!-- breadcrumbIn -->
				</div><!-- row -->
			</div>
	        <!-- termina breadcums -->
        	<br>
        	<br>
			<!-- comienza contenido -->
				<div class="row clearfix mb">
				<div class="filterable">
					<ul class="filter">
						<li class="all current"><a href="#">Todas</a></li>
						<li class="legislativo"><a href="#">Legislativo</a></li>
						<li class="campaña"><a href="#">Campaña</a></li>
					</ul>
				</div>
			</div>

			<div class="row clearfix mbs">
				<div class="grid_12">
							<ul class="portfolio clearfix">
								<?php
									require_once("vendor/phpFlickr.php");
									$f = new phpFlickr("f8dfa483443f9424a79d73c50344b90c");


									//$f = new phpFlickr("f8dfa483443f9424a79d73c50344b90c"); //Clase de Api, conseguir en: http://www.flickr.com/services/api/keys/
									  $nsid = "139950084@N02"; //NSID Usuario, conseguir en: http://idgettr.com/
									  //Incluir tag, ordenamieno, privacidad, y numero de imagenes a mostrar
									  $photos = $f->photos_search(array("tags"=>"", "user_id"=>$nsid, "sort"=>"date-posted-desc", "privacy_filter"=>"1", "per_page"=>"20"));
									  $url    = "http://www.flickr.com/photos/".$nsid."/"; //Url de la Imgen Original
									  if (is_array($photos['photo'])) 
									  {
										foreach ($photos['photo'] as $photo) 
										{
											//$f->photos->getSizes();

										  	//$salida = "<div class='caja'>";
										  	//$salida .= "<a href='".$url.$photo['id']."'><img alt='".$photo['title']."' title='".$photo['title']."' "."src='".$f->buildPhotoURL($photo, "Medium 640")."' /></a>";
									  	  	//echo $salida."</div>";

											//Obtenemos los tags

											$tags = $f->tags_getListPhoto($photo['id']);

											$tagFoto = null;
											foreach ($tags as $tag){
												if (isset($tag))
												 	$tagFoto = $tag['raw'];
												else
													$tagFoto = 'all';
											}


									  	  	$salida = '<li class="grid_3" data-id="id-1" data-type="'.$tagFoto.'">';
											$salida .=	'<div class="hover-fx">';
											$salida .=			'<img src="'.$f->buildPhotoURL($photo, "Medium 640").'" alt="#">';
											$salida .=		'<a class="fLeft" href="'.$f->buildPhotoURL($photo, "Medium 640").'"><span><i class="icon-link"></i></span></a>';
											$salida .=	'<a class="fRight" href="'.$f->buildPhotoURL($photo, "Medium 640").'" data-gal="lightbox[portfolio]"><span><i class="icon-eye-open"></i></span></a>';
											$salida .= '</div>';
											$salida .= '<div class="detailes">';
											$salida .=			'<h5> <a href="#">'.$photo["title"].'</a> </h5>';
											$salida .=			'<a href="#">Isidro Pedraza</a>, <a href="#">'.$tagFoto.'</a>';
											$salida .=		'</div>';
											$salida .=	'</li>';

											echo $salida;
										}
									  }
								
										//$photo =array_pop($photo);
									//	print_r($photo[0]['title']);
										 //print_r ($photo);
										/*  $salida = "<div class='caja'>";
										  $salida .= "<a href='".$url.$photo['id']."'><img alt='".$photo['title']."' title='".$photo['title']."' "."src='".$f->buildPhotoURL($photo, "square")."' /></a>";
									  	  echo $salida."</div>";
									  	 // echo $photo["title"];
									  	 // echo $f->buildPhotoURL($photo, 'square');

									  	$salida = '<li class="grid_3" data-id="id-1" data-type="3d">';
										$salida .=	'<div class="hover-fx">';
										$salida .=			'<img src="'.$f->buildPhotoURL($photo, 'square').'" alt="#">';
										$salida .=		'<a class="fLeft" href="portfolio-single-wide-slider.html"><span><i class="icon-link"></i></span></a>';
										$salida .=	'<a class="fRight" href="images/assets/portfolio-thumb1.jpg" data-gal="lightbox[portfolio]"><span><i class="icon-eye-open"></i></span></a>';
										$salida .= '</div>';
										$salida .= '<div class="detailes">';
										$salida .=			'<h5> <a href="#">'.$photo["title"].'</a> </h5>';
										$salida .=			'<a href="#">3D Model</a>, <a href="#">Photography</a>';
										$salida .=		'</div>';
										$salida .=	'</li>';

										echo $salida;*/
									

							?>
					</ul>

				</div><!-- grid 12 -->
			</div><!-- row -->
			<!-- termina contenido -->

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
			tpj('.sf-menu').find('li').removeClass('current');
			tpj('.sf-menu').find('li').eq(4).addClass('current');
		});
	/* ]]> */
	</script>
</body>
</html>