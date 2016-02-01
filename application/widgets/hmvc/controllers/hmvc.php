<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Hmvc extends MX_Controller {
 
   public function node()
   {
      $this->load->library('googlemaps');
      

$config['center'] = '-31.6323891,-60.6994591';
$config['zoom'] = '9';
$config['disableMapTypeControl']='false';
$this->googlemaps->initialize($config);

$marker = array();
switch ($this->uri->segment(2, 0)) {

                case 1:
                    $marker['position'] = '-34.640118,-58.538348';
                    $config['center'] = '-34.9323891,-58.9094591';
                    $marker['infowindow_content'] = 'Ciudadela, Bs As, Argentina';
                    $config['zoom'] = '8';
                    break;
                case 2:
                    $marker['position'] = '-29.228045,-59.675899';
                    $config['center'] = '-30.9323891,-59.9094591';
                    $marker['infowindow_content'] = 'Colonia el Toba, Sta. Fe, Argentina';
                    $config['zoom'] = '6';
                    break;
                case 6:
                    $marker['position'] = '-26.184816,-60.454853';
                    $config['center'] = '-26.9323891,-61.9094591';
                    $marker['infowindow_content'] = 'Tres Isletas, Chaco';
                    $config['zoom'] = '6';
                    break;
                case 4:
                    $marker['position'] = '-29.435258,-59.261619';
                    $marker['infowindow_content'] = 'La invernda, Corrientes';
                    $config['center'] = '-29.9323891,-59.9094591';

                    $config['zoom'] = '6';
                    break;
                case 8:
                    $marker['position'] = '-25.718057,-59.184559';

                    $marker['infowindow_content'] = 'Lote 9, Formosa';
                    $this->googlemaps->add_marker($marker); 
                    $marker = array();
                    $marker['position'] = '-25.928203,-59.140614';

                    $marker['infowindow_content'] = 'El Colorado, Formosa';
                    $this->googlemaps->add_marker($marker); 
                    $config['center'] = '-25.9323891,-59.9094591';

                    $config['zoom'] = '6';
                    break;
            }


            $config['adsensePosition']='CENTER_TOP';

$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
//$marker['onclick'] = 'alert("You just clicked me!!")';
$this->googlemaps->add_marker($marker);


//$groundOverlay = array();
//$groundOverlay['image'] = 'http://localhost/ciudadela/application/views/ciudad/img/la_invernada_top.jpg';
//$groundOverlay['positionSW'] = '-31.6323891,-60.6994591';
//$groundOverlay['positionNE'] = '-31.5323891,-60.5994591';
//$this->googlemaps->add_ground_overlay($groundOverlay);
            
           
            
            
            


            


            
            $this->googlemaps->initialize($config);
            $data['map'] = $this->googlemaps->create_map();
            $this->load->view('hmvc_view', $data);
   }
   
   
   public function zonificacion()
   {
      $this->load->library('googlemaps');
      

$config['center'] = '-34.6323891,-60.0094591';
$config['zoom'] = '4';
$config['adsensePosition']='CENTER_TOP';
$directionsDraggable; //boolean

$directionsStart; //A latitude/longitude coordinate OR an address. If an address is supplied the Google geocoding service will be used to return a lat/long.

$directionsEnd; //A latitude/longitude coordinate OR an address. If an address is supplied the Google geocoding service will be used to return a lat/long.

$directionsDivID; //An element's ID on the page where textual directions will be output to. Leave blank if not required
$directionsMode; //“DRIVING”, “WALKING”, “BICYCLING” (US only)

$directionsAvoidTolls ;//boolean
$directionsAvoidHighways; //boolean
$disableDefaultUI; //boolean If set to TRUE will hide the default controls (ie. zoom, scale)
$disableMapTypeControl; //boolean If set to TRUE will hide the MapType control (ie. Map, Satellite, Hybrid, Terrain)
$disableNavigationControl; //boolean//If set to TRUE will hide the Navigation control (ie. zoom in/out, pan)
$disableScaleControl; //boolean If set to TRUE will hide the Scale control
$disableStreetViewControl; //boolean If set to TRUE will hide the Street View control
$disableDoubleClickZoom; //boolean If set to TRUE will disable zooming when a double click occurs
$draggable; //boolean If set to FALSE will prevent the map from being dragged around
$draggableCursor; //string The name or url of the cursor to display on a draggable object
$draggingCursor; //string The name or url of the cursor to display when an object is dragging
$geocodeCaching; //boolean
$https;

$config['disableMapTypeControl']='false';
$config['disableNavigationControl']='false';
$config['disableStreetViewControl']='false';


$this->googlemaps->initialize($config);


 


//Ciudadela
$marker['position'] = '-34.640118,-58.538348';
$marker['infowindow_content'] = 'Buenos Aires, Ciudadela';
$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=Ciudadela|9C1319|000000';
//$marker['onclick'] = 'alert("You just clicked me!!")';
$this->googlemaps->add_marker($marker);

//El toba
$marker['position'] = '-29.228045,-59.675899';
$marker['infowindow_content'] = 'El Toba, Santa Fe';
$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=El Toba|9B7214|000000';
//$marker['onclick'] = 'alert("You just clicked me!!")';
$this->googlemaps->add_marker($marker);
//El 94 ?
$marker = array();
$marker['position'] = '-31.6323891,-60.6994591';
$marker['infowindow_content'] = '1 - Santa fe Obra de las clarasObra de las claras Obra de las claras Obra de las claras Obra de las clarasObra de las claras';
$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9B7214|000000';
//$marker['onclick'] = 'alert("You just clicked me!!")';
$this->googlemaps->add_marker($marker);

//Tres isletas chaco

$marker = array();
$marker['position'] = '-26.184816,-60.454853';
$marker['infowindow_content'] = 'Tres Isletas, Chaco';
$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=Tres isletas|134999|000000';
//$marker['onclick'] = 'alert("You just clicked me!!")';
$this->googlemaps->add_marker($marker);      

//Lote 9 Formosa

 $marker = array();
$marker['position'] = '-25.718057,-59.184559';
$marker['infowindow_content'] = 'Lote 9, Formosa';
$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=Lote 9|4B9913|000000';
//$marker['onclick'] = 'alert("You just clicked me!!")';
$this->googlemaps->add_marker($marker);   


        
        //El Colorado Formosa
        $marker = array();
$marker['position'] = '-25.928203,-59.140614';
$marker['infowindow_content'] = 'El Colorado, Formosa';
$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=El Colorado|4B9913|000000';
//$marker['onclick'] = 'alert("You just clicked me!!")';
$this->googlemaps->add_marker($marker); 


        
        //La invernada Corrientes
         $marker = array();
$marker['position'] = '-29.435258,-59.261619';
$marker['infowindow_content'] = 'La invernda, Corrientes';
$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=La Invernada|6E4B7F|000000';
//$marker['onclick'] = 'alert("You just clicked me!!")';
$this->googlemaps->add_marker($marker); 

$groundOverlay = array();
$groundOverlay['image'] = 'http://localhost/ciudadela/application/views/ciudad/img/la_invernada_top.jpg';
$groundOverlay['positionSW'] = '-31.6323891,-60.6994591';
$groundOverlay['positionNE'] = '-31.5323891,-60.5994591';





$this->googlemaps->add_ground_overlay($groundOverlay);
            
           
            
            
            


            


            
            $this->googlemaps->initialize($config);
            $data['map'] = $this->googlemaps->create_map();
            $this->load->view('hmvc_view', $data);
   }
}