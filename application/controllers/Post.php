<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Post extends CI_Controller {
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
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
		//$this->load->view('welcome_message');
		
	}
	public function getPost($id){
		/*$query = new ParseQuery("noticias");

		$query->equalTo("objectId", $id);
		$post = $query->find();*/
		if ($this->ambiente->getAmbiente()== "parse"){
		
			$data['post'] = $this->noticias->traerNoticiaId($id);

			$results = $this->categorias->traerCategorias();
			$categorias = $this->utilerias->arrayToObject($results);

			$data['categorias'] = $categorias;
		}
		else {
			$data['post'] = $this->noticias->traerNoticiaIdJson($id);

			$results = $this->categorias->traerCategoriasJson();
			$categorias = $this->utilerias->arrayToObject($results);

			$data['categorias'] = $categorias;
		}
		
		$this->load->view('post', $data);
	}
	
}
?>