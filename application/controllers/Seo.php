<?php
Class Seo extends CI_Controller {

    function sitemap()
    {

        $data['urls'] = array("index.php/welcome",
        					"index.php/conoceme",
        					"index.php/iniciativas",
        					"index.php/intervenciones",
        					"index.php/fotos");//select urls from DB to Array
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view("sitemap",$data);
    }
}

?>