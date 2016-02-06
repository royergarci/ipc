<?php
/* Last updated with phpFlickr 1.3.2
 *
 * This example file shows you how to call the 100 most recent public
 * photos.  It parses through them and prints out a link to each of them
 * along with the owner's name.
 *
 * Most of the processing time in this file comes from the 100 calls to
 * flickr.people.getInfo.  Enabling caching will help a whole lot with
 * this as there are many people who post multiple photos at once.
 *
 * Obviously, you'll want to replace the "<api key>" with one provided 
 * by Flickr: http://www.flickr.com/services/api/key.gne
 */

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

	  	$salida = "<div class='caja'>";
	  	$salida .= "<a href='".$url.$photo['id']."'><img alt='".$photo['title']."' title='".$photo['title']."' "."src='".$f->buildPhotoURL($photo, "Medium 640")."' /></a>";
  	  	echo $salida."</div>";
	}
  }
?>
