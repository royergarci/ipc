<?php
require './vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseUser;
use Parse\ParseQuery;
ParseClient::initialize('w7EDsYMLcQd3WbgsTaWHpQYFhij5N8mcxoKEBAIh', 'MzlLQpI8mRyhR9Vtv2CU7LGbHa9GdpKwhc571Iam', '2EC4tO8Gqo6XLHdE1MquGPTEei5A3hxs4xBhnPEF');
defined('BASEPATH') OR exit('No direct script access allowed');

class Intervenciones extends CI_Controller {

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
	public $enviroment = "local";
	public function index()
	{
			$results = $this->traerNoticias();
			//var_dump($results[0]);
			//$posts = $this->arrayToObject($results);
			$data['posts'] = $results;

			$results = $this->traerCategorias();
			$categorias = $this->arrayToObject($results);

			$data['categorias'] = $categorias;

			$data['enviroment'] = $this->enviroment;
			$this->load->view('intervenciones', $data);
	}
/*	public function traerNoticias(){
			$query = new ParseQuery("noticias");
			$query->equalTo("categorias","intervencion");
			$query->descending("fecha");
			$results = $query->find();

			return $results;
	}
	public function traerNoiciasJson(){
			$query = new ParseQuery("noticias");
			$query->equalTo("categorias","intervencion");
			$query->descending("fecha");
			$results = $query->find();

			return $results;
	}
	public function traerCategorias(){
		  //$categorias = new stdClass();
		  $query = new ParseQuery("noticias");

		  $query->equalTo("categorias", "noticia");
		  $categorias[0]['nombre'] = 'noticia';
		  $categorias[0]['num'] = $query->count();


		  $query->equalTo("categorias","intervencion");
		  $categorias[1]['nombre'] = 'intervenciones';
		  $categorias[1]['num'] = $query->count();

		  $query->equalTo("categorias","video");
		  $categorias[2]['nombre'] = 'videos';
		  $categorias[2]['num'] = $query->count();

		  $query->equalTo("categorias","iniciativa");
		  $categorias[3]['nombre'] = 'iniciativas';
		  $categorias[3]['num'] = $query->count();

		  $query->equalTo("categorias","prensa");
		  $categorias[4]['nombre'] = 'prensa';
		  $categorias[4]['num'] = $query->count();

		  $query->equalTo("categorias","comunicado");
		  $categorias[5]['nombre'] = 'comunicados';
		  $categorias[5]['num'] = $query->count();

		  return $categorias;

	}
	public function array_to_obj($array, &$obj)
	 {
	    foreach ($array as $key => $value)
	    {
	      if (is_array($value))
	      {
	      $obj->$key = new stdClass();
	      $this->array_to_obj($value, $obj->$key);
	      }
	      else
	      {
	        $obj->$key = $value;
	      }
	    }
	  return $obj;
	  }

	public function arrayToObject($array)
	{
	 $object= new stdClass();
	 return $this->array_to_obj($array,$object);
	}*/
}
