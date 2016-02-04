<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	
	public function index()
	{	

			$this->load->model('ambiente');
			$this->load->model('categorias');
			$this->load->model('noticias');

			$this->load->library('utilerias');

			//echo $this->ambiente->getAmbiente();
			//$results = $this->traerNoticias();
			$results = $this->noticias->traerNoticiasJson();

			$data['posts'] = $results;

			//$results = $this->traerCategorias();
			$results = $this->categorias->traerCategoriasJson();

			$categorias = $this->utilerias->arrayToObject($results);

			foreach ($categorias as $cat){
				//echo $cat->nombre;
			}
			$data['categorias'] = $categorias;

			$data['enviroment'] = $this->ambiente->getAmbiente();
			$this->load->view('index', $data);
	}
	
}
