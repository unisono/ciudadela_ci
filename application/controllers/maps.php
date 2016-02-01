<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $this->load->library('googlemaps');

$config['center'] = '-31.6323891,-60.6994591';
$config['zoom'] = '15';
$this->googlemaps->initialize($config);


$groundOverlay = array();
$groundOverlay['image'] = 'http://maps.google.com/intl/en_ALL/images/logos/maps_logo.gif';
$groundOverlay['positionSW'] = '-31.6323891,-60.6994591';
$groundOverlay['positionNE'] = '-31.0323891,-59.6994591';
$this->googlemaps->add_ground_overlay($groundOverlay);


$circle = array();
$circle['center'] = '-31.6323891,-60.6994591';
$circle['radius'] = '250';
$this->googlemaps->add_circle($circle);

$marker = array();
$marker['position'] = '-31.6323891,-60.6994591';
//$this->googlemaps->add_marker($marker);

$data['map'] = $this->googlemaps->create_map();

echo $data['paths'] = $this->config->item('path');

          
            

            $data['id_style']= 'inicio';
            $data['page']= 'inicio';

            $this->load->view('ciudad/index', $data);
	}
        
        
        
        
        
        function proyectos(){
            $data['id_style'] = 'col_2';
            $data['page'] = 'col_2';
            $this->load->view('ciudad/index',$data);
        }
    }

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */