<?php
require './vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseUser;
use Parse\ParseQuery;
ParseClient::initialize('w7EDsYMLcQd3WbgsTaWHpQYFhij5N8mcxoKEBAIh', 'MzlLQpI8mRyhR9Vtv2CU7LGbHa9GdpKwhc571Iam', '2EC4tO8Gqo6XLHdE1MquGPTEei5A3hxs4xBhnPEF');
defined('BASEPATH') OR exit('No direct script access allowed');
class Ambiente extends CI_Model {

    var $ambiente   = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->ambiente = "parse";
    }
    
    function getAmbiente()
    {
        return $this->ambiente;
    }
}
?>