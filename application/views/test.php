<?php
  require '.vendor/phpflickr-master/phpFlickr.php';

  $f = new phpFlickr("f8dfa483443f9424a79d73c50344b90c"); //Clase de Api, conseguir en: http://www.flickr.com/services/api/keys/
  $nsid = "139950084@N02"; //NSID Usuario, conseguir en: http://idgettr.com/
  //Incluir tag, ordenamieno, privacidad, y numero de imagenes a mostrar
  $photos = $f->photos_search(array("tags"=>"", "user_id"=>$nsid, "sort"=>"date-posted-desc", "privacy_filter"=>"1", "per_page"=>"20"));
  $url    = "http://www.flickr.com/photos/".$nsid."/"; //Url de la Imgen Original
  if (is_array($photos['photo'])) 
  {
	foreach ($photos['photo'] as $photo) 
	{
	  $salida = "<div class='caja'>";
	  $salida .= "<a href='".$url.$photo['id']."'><img alt='".$photo['title']."' title='".$photo['title']."' "."src='".$f->buildPhotoURL($photo, "square")."' /></a>";
  	  echo $salida."</div>";
	}
  }
?>