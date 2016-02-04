<?php
date_default_timezone_set('America/Mexico_City');
require './vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseUser;
use Parse\ParseQuery;
ParseClient::initialize('w7EDsYMLcQd3WbgsTaWHpQYFhij5N8mcxoKEBAIh', 'MzlLQpI8mRyhR9Vtv2CU7LGbHa9GdpKwhc571Iam', '2EC4tO8Gqo6XLHdE1MquGPTEei5A3hxs4xBhnPEF');
defined('BASEPATH') OR exit('No direct script access allowed');
class Categorias extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->library('utilerias');
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
    function traerCategoriasJson(){
         
          $categorias[0]['nombre'] = 'noticia';
          $categorias[0]['num'] = 2;


         
          $categorias[1]['nombre'] = 'intervenciones';
          $categorias[1]['num'] = 4;

          
          $categorias[2]['nombre'] = 'videos';
          $categorias[2]['num'] =4;

          $categorias[3]['nombre'] = 'iniciativas';
          $categorias[3]['num'] =201;

          $categorias[4]['nombre'] = 'prensa';
          $categorias[4]['num'] = 223;

          $categorias[5]['nombre'] = 'comunicados';
          $categorias[5]['num'] = 123;

          return $categorias;
    }
}
?>