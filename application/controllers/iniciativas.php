<?php
require './vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseUser;
use Parse\ParseQuery;
ParseClient::initialize('w7EDsYMLcQd3WbgsTaWHpQYFhij5N8mcxoKEBAIh', 'MzlLQpI8mRyhR9Vtv2CU7LGbHa9GdpKwhc571Iam', '2EC4tO8Gqo6XLHdE1MquGPTEei5A3hxs4xBhnPEF');
defined('BASEPATH') OR exit('No direct script access allowed');

class Iniciativas extends CI_Controller {

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

	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->library('utilerias');
        $this->load->helper('form');
		
		$this->load->model('ambiente');
		$this->load->model('categorias');
		$this->load->model('noticias');

    }
	public function index()
	{
			$results = $this->noticias->traerNoticiasSeccion('iniciativas');
			//var_dump($results[0]);
			//$posts = $this->arrayToObject($results);
			$data['posts'] = $results;

			$results = $this->categorias->traerCategorias();
			$categorias = $this->utilerias->arrayToObject($results);

			$data['categorias'] = $categorias;

			$data['enviroment'] = $this->ambiente->getAmbiente();
			$this->load->view('iniciativas', $data);
	}
}
