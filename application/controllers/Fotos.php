<?php
  require './vendor/phpflickr-master/phpFlickr.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class Fotos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $f = new phpFlickr("f8dfa483443f9424a79d73c50344b90c"); //Clase de Api, conseguir en: http://www.flickr.

    }
	public function index()
	{
		$data['photos'] = $this->getFotos();
		$this->load->view('fotos',$data);
	}
	public function getFotos(){

		  $f = new phpFlickr("f8dfa483443f9424a79d73c50344b90c"); //Clase de Api, conseguir en: http://www.flickr.com/services/api/keys/
		  $nsid = "139950084@N02"; //NSID Usuario, conseguir en: http://idgettr.com/
		  //Incluir tag, ordenamieno, privacidad, y numero de imagenes a mostrar
		  $photos = $f->photos_search(array("tags"=>"", "user_id"=>$nsid, "sort"=>"date-posted-desc", "privacy_filter"=>"1", "per_page"=>"20"));


			/*if (is_array($photos['photo'])) 
			  {
				foreach ($photos['photo'] as $photo) 
				{
				  $salida = "<div class='caja'>";
				  $salida .= "<a href='".$url.$photo['id']."'><img alt='".$photo['title']."' title='".$photo['title']."' "."src='".$f->buildPhotoURL($photo, "square")."' /></a>";
			  	  echo $salida."</div>";
				}
			  }*/
		  return $photos;
	}
}
