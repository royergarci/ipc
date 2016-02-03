<?php
require './vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseUser;
use Parse\ParseQuery;
ParseClient::initialize('w7EDsYMLcQd3WbgsTaWHpQYFhij5N8mcxoKEBAIh', 'MzlLQpI8mRyhR9Vtv2CU7LGbHa9GdpKwhc571Iam', '2EC4tO8Gqo6XLHdE1MquGPTEei5A3hxs4xBhnPEF');
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
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('upload', array('error' => ' ' ));
		$this->load->helper('form');
		/*$query = ParseUser::query();
		$query->equalTo("tipo_usuario", "STAFF"); 
		$results = $query->find();
		$count = $query->count();
		for ($i = 0; $i < count($results); $i++) {
		  // This does not require a network access.
		  echo $results[$i]->nombre.'<br>';
		  
		}
		echo $count;*/
	}
	
	public function leerNoticiasPrincipal(){
			/*$query = new ParseQuery("noticias");
			$query->descending("fecha");
			$results = $query->find();*/

			$results = '{
    "results": [
        {
            "createdAt": "2016-02-02T22:27:28.977Z",
            "fecha": {
                "__type": "Date",
                "iso": "2016-02-02T22:32:03.851Z"
            },
            "fecha_str": "2016-02-02T22:32:03",
            "galeria": "N",
            "objectId": "VKDM5fRJ6K",
            "path_image": "http://www.isidropedrazachavez.com/images/stories/isidro/IsidroMitin_2016_01_19.png",
            "tags": "candidato, prd, AMLO",
            "texto": "El Senador Isidro Pedraza Chávez, resulta ser el candidato más sólido que el PRD puede tener para ganar por primera vez la gubernatura de Hidalgo en el próximo mes de junio. A diferencia de su contrincante en la lucha interna, José Guadarrama, quien representa una cara bastante negociadora a favor del PRI lo cual no garantiza la tranquilidad de los ciudadanos hidalguenses en torno a una carta distinta.\n\nAmbos son maestros normalistas en el Estado, sin embargo la carrera de Pedraza resulta ser más popular y entendible con el proyecto del PRD, e incluso el mismo PAN y a los ojos de Andrés Manuel López Obrador, es un candidato realmente auténtico, libre y no a modo del PRI.\nLo que pasa es que Guadarrama por su gran amistad y cercanía con Miguel Osorio Chong, actual secretario de gobernación de Enrique Peña Nieto, le quita imparcialidad en su propuesta y hasta es un elemento a modo para que el PRI retenga el poder.\nPedraza Chávez en cambio, siendo líder del organismo de Campesinos de México por la Democracia desde el 2002 le da ese acercamiento con la base popular, especialmente con la comunidad indígena quien en Hidalgo representa casi un 26 por ciento del padrón.\nGuadarrama trae una campaña de mucho denostar a Pedraza y eso no está cayendo nada bien entre los agremiados del PRD, que a nivel nacional y basado en las últimas encuestas del Estado, Pedraza trae un 21 por ciento de popularidad contra un 11 del ex senador Guadarrama.\nEs importante señalar que los tres abanderados que tiene el PRI a la gubernatura, y que en otra ocasión hablaremos, no quieren que sea Pedraza el abanderado, dado que ninguno de ellos rebasa los 25 por ciento de aceptación de manera automática.\n\nCon el margen de error que hay en las encuestas a la fecha, es factible que Pedraza los rebase en cuanto se de una campaña abierta y es más posible que el mismo Pedraza pueda encabezar un Frente Popular con el apoyo del PAN, PT, Nueva Alianza y porque no, hasta Morena puede jugar directa o indirectamente con él.\nCabe destacar la gran campaña que trae Isidro como senador, que aunque no es muy dado a ser ese muchacho sonriente de 57 años, si tiene un don que lo distingue, que cuando se acerca a la gente se le siente de verdad y no fingido y lo más importante, entre más lo conocen más encaja en el electorado femenino y entre la chaviza.\nHay quienes apuestan que si el PRD no lo lleva de abanderado, Isidro tiene tanto carisma y arrastre, que puede ir por una bandera Independiente y entonces de el mismo brinco y sorpresa que impuso Jaime Rodríguez El Bronco en Nuevo León.\nCuando habla Isidro, su voz fuerte parece representar a un grupo de conductores de radio y televisión, le impone clase a cada tema que maneja, especialmente el ayudar a terminar con la marginación que vive Hidalgo desde hace más de 70 años y lo planea apoyando especialmente a la mujer.\nIsidro Pedraza maneja la idea de fomentar las guarderías de tres turnos, la capacitación a las mujeres jefas de familia, darles ciertos privilegios a las mamas que trabajan con tarifa especial en el transporte y especialmente becar a los niños de preescolar, primaria y secundaria.\nDice que si resuelve la paz familiar donde hay muchas mujeres viudas, mamas solteras, divorciadas, de la tercera edad, abuelas trabajadoras, que si ve por ellas, sin duda Hidalgo será distinto.\nIncluso trae un estudio impactante donde puede uniformar gratis a todos los niños de pre escolar, primaria y secundaria y que todas las mujeres no se queden sin su revisión anual de la lucha vs el cáncer de mama y otras enfermedades que en ellas se reflejan.\nNo se diga el apoyo a la gente de la tercera edad, donde incluso destaca que puede llegar a un apoyo mensual de mil pesos a los mayores de 60 años y a todos lo jóvenes que quieran estudiar la prepa, una carrera técnica o profesional, becarlos de acuerdo a su potencial y acercarlos a todas las tecnologías de la actualidad.\nGuadarrama no sale de lo mismo en sus recorridos, solo abraza, besa y sonríe sin darles ninguna esperanza de cambio a los hidalguenses y eso realmente ya no cae en la confianza de los ciudadanos.\nGuadarrama se ve perdido en su discurso y muchos de sus seguidores le dan coba y le aplauden a cada burrada que dice y especialmente no se cansan de decir que es el amigo de Osorio Chong y eso ayudara.\nPues vaya elección del PRD, que si busca a un candidato con enlace social y conocimiento de causa del Estado, lo tienen en el actual senador, quien desde hace tres años esta cerca de cada comunidad resolviendo temas de tenencia de tierra, agua, escrituras, riego y muchísimos temas que tienen los hidalguenses.\nOjala el partido del sol resuelva con sabiduría y le de a Pedraza la bandera a la gubernatura y el mismo Guadarrama puede ser un diputado federal de lista o que vaya a correr las calles para que vuelva a calentar la suela y sepa lo que es talacha social.",
            "tipo": "post",
            "tipo_post": "imagen",
            "titulo": "Isidro Pedroza, Candidato mas solido del PRD",
            "updatedAt": "2016-02-02T22:39:48.308Z"
        },
        {
            "autor": "unionhidalgo.mx",
            "createdAt": "2016-02-02T22:41:54.587Z",
            "fecha": {
                "__type": "Date",
                "iso": "2015-08-08T22:44:00.000Z"
            },
            "fecha_str": "2015-08-08T22:44:00",
            "galeria": "N",
            "objectId": "rxhp6yOPrj",
            "path_image": "http://www.unionhidalgo.mx/sites/default/files/styles/galeria/public/field/image/prd_hidalgo_0.jpg",
            "tags": "prd, elecciones2016, isidro pedroza chavez, elecciones hidalgo",
            "texto": "El futuro del PRD Hidalgo se va a disputar entre 2 liderazgos: el del senador Isidro Pedraza Chávez y el ex senador José Guadarrama Márquez, quien aspira a contender como candidato en la próxima elección para elegir gobernador.\n\nPedraza Chávez reconoció que Guadarrama es el rival a vencer en las próximas elecciones internas, pero acotó que los más brillantes están con él.\n\n“Es muy probable que (Guadarrama) busque la gubernatura, pero los listos estamos aquí y los tontos andan por otro lado, será difícil, pero confió en ser el candidato del partido”, señaló.\n\nSegún la convocatoria al acto, también se elegirá a los integrantes de los órganos del Partido de la Revolución Democrática (PRD), y se aprobará la política de alianzas para las entidades federativas con proceso electoral local 2015-2016.\n\nSe trata de Aguascalientes, Baja California, Chihuahua, Durango, Hidalgo, Oaxaca, Puebla, Quintana Roo, Sinaloa, Tamaulipas, Tlaxcala, Veracruz y Zacatecas.\n\nAdemás, el presidente nacional del PRD, Carlos Navarrete Ruiz, presentará un informe y el consejo ordenará al Comité Ejecutivo Nacional convocar a los grupos parlamentarios perredista en el Senado y la Cámara de Diputados a elegir a sus coordinadores a través de la Comisión Electoral.\n\nDe igual manera, los perredistas avalarán la convocatoria para llevar a cabo el XIV Congreso Nacional Extraordinario del PRD, para lo cual se conformará una comisión organizadora.\n\nAsimismo Navarrete presentará, de acuerdo a la convocatoria firmada por el presidente del consejo, Ángel Clemente Ávila, un informe financiero; se analizará el gasto de campaña 2015 y el dictamen de fiscalización, además habrá un reporte de la Comisión de Auditoría de este órgano.",
            "tipo": "post",
            "tipo_post": "imagen",
            "titulo": "Pedraza y Guadarrama van por el PRD",
            "updatedAt": "2016-02-02T22:47:12.911Z"
        }
    ]
}';
		
			$object = new stdClass();
			//echo $results;
			$res = json_decode($results,true);

			foreach ($res['results'] as $result) {
				echo $result['tipo'];
			}
			$data['post'] = $res['results'];

			$this->load->view('index', $data);
	}

	public function do_upload()
	{
		$config['upload_path'] = './facturas/';
		$config['allowed_types'] = '*';
		$config['max_size']	= '10000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload', $error);
			echo $error;
		}
		else
		{
			$data['action'] = 'Subiendo la factura';
			$this->load->view('cargandoFactura', $data);
			$data = array('upload_data' => $this->upload->data());
			
			//print_r($data['upload_data']);
			//Si el archivo es un zip o xml puro
			if ($data['upload_data']['file_type'] == 'application/xml'){
				$xmlFile = $this->leerArchivo($data['upload_data']['file_name']);
				$this->leerFactura($xmlFile);
			} 
			if ($data['upload_data']['file_type'] == 'application/zip'){
				//Unzip el archivo
				$this->unzipFile($data['upload_data']['file_name']);
				//Leemos todas las facturas del zip y las ponemos en un array
				$nameZip = $data['upload_data']['file_name'];
				$facturas = $this->leerArhivosDir($nameZip);
				
			//	print_r($facturas);
				foreach($facturas as $xmlFileName){ // iterate files
				  	if(is_file(FCPATH.'facturas/tmp/'.$xmlFileName)){
				  		
				  		$pos = strpos($xmlFileName, 'XML');
				  		if ($pos === false)
				  			echo $xmlFileName.' No es factura <br>';
				  		else{
				  			//echo 'Aqui cargando factura '.$xmlFileName.'<br>';
				    		$xmlFile = $this->leerArchivo('tmp/'.$xmlFileName);
				    		$this->leerFactura($xmlFile);
				    	}
					}
				}
			}
		}
	}
	public function leerArchivo($name){
		echo $name;
		//aqui se debe crear el proceso
		$file = fopen(FCPATH.'facturas/'.$name, "rb") or exit("Unable to open file!");
				
		$cadena = '';
		$line = 0;
				
		while(!feof($file)){
			$cadena = $cadena.fgets($file);
		}
				
		fclose($file);			
		return ($cadena);
	}
	public function unzipFile($name){
			$files = glob(FCPATH.'facturas/tmp/*'); // get all file names
			foreach($files as $file){ // iterate files
			  if(is_file($file))
			    unlink($file); // delete file
			  else
			  	rmdir($file);
			}
			
            $zip = new ZipArchive;
            $file = FCPATH.'facturas/'.$name;
            chmod($file,0777);
            if ($zip->open($file) === TRUE) {
                    $zip->extractTo(FCPATH.'facturas/tmp');
                    $zip->close();
                    echo 'zip ok <br>';
            } else {
                    echo 'failed';
            }
	}
	public function leerArhivosDir($nameZip){
			
			$facturas = array();
			$directorio = opendir(FCPATH.'facturas/tmp/'); //ruta zip facturas
			while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
			{
			    if (!is_dir($archivo))//verificamos si es o no un directorio
			    {
			        array_push($facturas, $archivo);
			    }
			}
			return ($facturas);
	}
	public function leerFactura($cadenaXml){
			$factura = array();
			$dom = new DOMDocument();
			$dom->loadXML($cadenaXml);
			$conceptoNum = 0;
			foreach ($dom->getElementsByTagNameNS('http://www.sat.gob.mx/TimbreFiscalDigital','*') as $element){
				if ($element->localName == 'TimbreFiscalDigital'){
					$factura['datos']['uuid'] = $element->getAttribute('UUID');
					$factura['datos']['fechaTimbrado'] = $element->getAttribute('FechaTimbrado');
				}
			}
			foreach ($dom->getElementsByTagNameNS('http://www.sat.gob.mx/cfd/3','*') as $element){
				//print_r $element;
				//echo 'localName '. $element->localName. ', prefix: '. $element->prefix ."<br>";
				if ($element->localName == 'Comprobante'){
					$factura['datos']['serie'] = $element->getAttribute('serie');
					$factura['datos']['folio'] = $element->getAttribute('folio');
					$factura['datos']['total'] = $element->getAttribute('total');
					$factura['datos']['fecha'] = $element->getAttribute('fecha');
					$factura['datos']['tipoComprobante'] = $element->getAttribute('tipoDeComprobante');
					$factura['datos']['moneda'] = $element->getAttribute('Moneda');
				}
				if ($element->localName == 'Emisor'){
					$factura['emisor']['rfc'] = $element->getAttribute('rfc');
					$factura['emisor']['nombre'] = $element->getAttribute('nombre');
				}
				if ($element->localName == 'Receptor'){
					$factura['receptor']['rfc'] = $element->getAttribute('rfc');
					$factura['receptor']['nombre'] = $element->getAttribute('nombre');
				}
				if ($element->localName == 'Concepto'){
					$factura['productos'][$conceptoNum]['cantidad'] = $element->getAttribute('cantidad');
					$factura['productos'][$conceptoNum]['unidad'] = $element->getAttribute('unidad');
					$factura['productos'][$conceptoNum]['noIdentificacion'] = $element->getAttribute('noIdentificacion');
					$factura['productos'][$conceptoNum]['descripcion'] = $element->getAttribute('descripcion');
					$factura['productos'][$conceptoNum]['valorUnitario'] = $element->getAttribute('valorUnitario');
					$factura['productos'][$conceptoNum]['importe'] = $element->getAttribute('importe');
					$conceptoNum++;
				}
			}
			//Revisamos si existe la factura para ya no guardarla
			$query = new ParseQuery("facturas");
			$query->equalTo("idFactura", $factura['datos']['uuid']);
			$results = $query->find();
			if (count($results) == 0){
				//$data['action'] = 'Cargando Receptor';
				//$this->load->view('cargandoFactura', $data);
				$receptor = $this->guardarReceptor($factura['receptor']);
				//$data['action'] = 'Cargando Receptor <br> CargandoFactura';
				//$this->load->view('cargandoFactura', $data);
				$facturaObj = $this->guardarFactura($factura['datos'],$receptor);
				//$data['action'] = 'Cargando Receptor <br> CargandoFactura<br> CargandoProductos';
				//$this->load->view('cargandoFactura', $data);
				$this->guardarProductos($factura['productos'],$facturaObj);
				//$data['action'] = 'Cargando Receptor <br> CargandoFactura<br> CargandoProductos<br>FacturaRegistrada';
				//$this->load->view('cargandoFactura', $data);
			}
			else{
				echo 'La factura '.$factura['datos']['uuid'].' ya esta registrada';
			}
	}
	public function guardarReceptor($receptor){
		$cliente = new ParseObject("clientes");
		//$cliente->set("objectId", $receptor['rfc']);
		$cliente->set("rfc", $receptor['rfc']);
		$cliente->set("nombre", $receptor['nombre']);
		try {
			$query = new ParseQuery("clientes");
			$query->equalTo("rfc", $receptor['rfc']);
			$results = $query->find();
			if (count($results) == 0){
		  		$cliente->save();
		  		return $cliente;
		  	}
		  	else{
		  		echo 'El cliente ya existe';
		  		return $results[0];
		  	}
		  	
		} catch (ParseException $ex) {  
			  // Execute any logic that should take place if the save fails.
			  // error is a ParseException object with an error code and message.
			  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
		}
		
	}
	public function guardarFactura($factura,$cliente){
		$object = ParseObject::create("facturas");
		$objectId = $object->getObjectId();
		// Set values:
		$object->set("serie", $factura['serie']);
		$object->set("idFactura", $factura['uuid']);
		$object->set("folio", $factura['folio']);
		$object->set("cliente", $cliente);
		$object->set("total", $factura['total']);
		$object->set("fecha", $factura['fecha']);
		/*$object->set("today", new DateTime());
		$object->setArray("mylist", [1, 2, 3]);
		$object->setAssociativeArray(
		    "languageTypes", array("php" => "awesome", "ruby" => "wtf")
		);*/
		// Save:
		try {
			$object->save();
			return $object;
		}
		catch (ParseException $ex) {  
			  // Execute any logic that should take place if the save fails.
			  // error is a ParseException object with an error code and message.
			  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
		}
	}
	public function guardarProductos($productos,$facturaObj){
		for ($i=0; $i < count($productos); $i++){
			//revisamos si existe el producto
			$query = new ParseQuery("productos");
			$query->equalTo("idProducto", $productos[$i]['noIdentificacion']);
			$results = $query->find();
			if (count($results) == 0){
				$producto = new ParseObject("productos");
				
				$producto->set("idProducto", $productos[$i]['noIdentificacion']);
				$producto->set("descripcion", $productos[$i]['descripcion']);
				$producto->set('unidad',$productos[$i]['unidad']);
				$producto->save();
			}
			else{
				$producto = $results[0];
			}
			  
				$facProd = new ParseObject("factura_productos");
				$facProd->set('idFactura',$facturaObj);
				$facProd->set('idProducto',$producto);
				$facProd->set('piezas',$productos[$i]['cantidad']);
				$facProd->set('precio',(float)$productos[$i]['valorUnitario']);
				try{
				  	$facProd->save();
				} catch (ParseException $ex) {  
				  // Execute any logic that should take place if the save fails.
				  // error is a ParseException object with an error code and message.
				  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
				}
		}
	}
}
?>