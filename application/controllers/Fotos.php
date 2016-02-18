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
       // $f = new phpFlickr("f8dfa483443f9424a79d73c50344b90c"); //Clase de Api, conseguir en: http://www.flickr.

    }
	public function index()
	{
		$data['photos'] = $this->getFotos();
		//print_r($data['photos']);
		$this->load->view('fotos',$data);
	}
	public function getFotos(){

		  $f = new phpFlickr("f8dfa483443f9424a79d73c50344b90c"); //Clase de Api, conseguir en: http://www.flickr.com/services/api/keys/
		  $nsid = "139950084@N02"; //NSID Usuario, conseguir en: http://idgettr.com/
		  //Incluir tag, ordenamieno, privacidad, y numero de imagenes a mostrar

		  $tagsList = $f->tags_getListUser($nsid);
		  $j = 0;
		  foreach ($tagsList as $tagl){
					
					$photos = $f->photos_search(array("tags"=>$tagl['_content'], "user_id"=>$nsid, "sort"=>"date-posted-desc", "privacy_filter"=>"1"));
					//$photoList[$tagl['_content']] = $photos['photo'];
					$i = 0;
					$photoList[$j]['tag'] = $tagl['_content'];
					foreach ($photos['photo'] as $photo){
							$photoList[$j]['photos'][$i]['id'] = $photo['id'];
							$photoList[$j]['photos'][$i]['url'] = $f->buildPhotoURL($photo, "Medium 640");
							$i++;
					}
					$j++;
				/*	if (is_array($photos['photo'])){
						$i = 0;
						foreach ($photos['photo'] as $photo){
								$photoList[$tagl['_content']][$i] = $f->buildPhotoURL($photo, "Medium 640");
						}
					}*/
		 }

													
		  return $photoList;
	}
}
