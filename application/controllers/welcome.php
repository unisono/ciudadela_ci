<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Welcome extends MX_Controller {
 
    
    
    
    
    public function index()
	{
            
            $data['id_style']= 'inicio';
            $data['page']= 'inicio';
            
            $this->load->view('ciudad/index', $data);
	}
    

    function proyectos(){
            $data['id_style'] = 'column_2';
            $data['page'] = 'detalle_proyecto';
            $this->MWelcome->fillCampos('proyectos',  $this->uri->segment(2, 1));
             
           $data['titulo'] = $this->MWelcome->getCampo('titulo');
           $data['descripcion'] = $this->MWelcome->getCampo('descripcion');
           $data['bajada'] = $this->MWelcome->getCampo('bajada');
           $data['datos_provincia'] = $this->MWelcome->getCampo('datos_provincia');
           $data['provincia_nombre'] = $this->MWelcome->getCampo('provincia_nombre');
           $data['MAPA'] = Modules::run('hmvc/hmvc/node');
           $data['SLIDER'] = Modules::run('gallery/image/index');   
           

           
           //ZONIFICACION
           $data['proyectos_provincias'] = $this->MWelcome->proyectosProvincias();
           $data['proyectos_localidades'] = $this->MWelcome->provinciasLocalidades();
           
            $this->load->view('ciudad/index',$data);
        }
        function historias(){
            $data['id_style'] = 'column_2_b';
            $data['page'] = 'detalle_historia';
            $this->MWelcome->fillCampos('historias','1');
             
           $data['titulo'] = $this->MWelcome->getCampo('titulo');
           $data['descripcion'] = $this->MWelcome->getCampo('descripcion');
           $data['bajada'] = $this->MWelcome->getCampo('bajada');
           //$data['provincia_nombre'] = $this->MWelcome->getCampo('provincia_nombre');
           
           
            //ZONIFICACION
           $data['proyectos_provincias'] = $this->MWelcome->proyectosProvincias();
           $data['proyectos_localidades'] = $this->MWelcome->provinciasLocalidades();
           
           
           
            
            $this->load->view('ciudad/index',$data);
        }
        
        
        
        function estudios(){
            $data['id_style'] = 'column_2_c';
            $data['page'] = 'listado_estudio';
            $this->MWelcome->fillCampos('historias','1');
             
           $data['titulo'] = $this->MWelcome->getCampo('titulo');
           $data['descripcion'] = $this->MWelcome->getCampo('descripcion');
           $data['bajada'] = $this->MWelcome->getCampo('bajada');
           //$data['provincia_nombre'] = $this->MWelcome->getCampo('provincia_nombre');
           
           
            //ZONIFICACION
           $data['proyectos_provincias'] = $this->MWelcome->proyectosProvincias();
           $data['proyectos_localidades'] = $this->MWelcome->provinciasLocalidades();
           
           
           
            
            $this->load->view('ciudad/index',$data);
        }
        
        
          function novedades(){
            $data['id_style'] = 'column_2_b';
            $data['page'] = 'detalle_novedad';
            $this->MWelcome->fillCampos('novedades',1);
             
           $data['titulo'] = $this->MWelcome->getCampo('titulo');
           $data['descripcion'] = $this->MWelcome->getCampo('descripcion');
           $data['bajada'] = $this->MWelcome->getCampo('bajada');
           //$data['provincia_nombre'] = $this->MWelcome->getCampo('provincia_nombre');
           $data['SLIDER'] = Modules::run('gallery/image/index');   
           
            //ZONIFICACION
           $data['proyectos_provincias'] = $this->MWelcome->proyectosProvincias();
           $data['proyectos_localidades'] = $this->MWelcome->provinciasLocalidades();
           
           
           
            
            $this->load->view('ciudad/index',$data);
        }
    
    
    function listados_proyectos(){
       // $this->load->library();
        
            $data['id_style'] = 'listado';
            $data['page'] = 'listado_proyecto';
            //ZONIFICACION            
            $data['proyectos_provincias'] = $this->MWelcome->proyectosProvincias();
            $data['proyectos_localidades'] = $this->MWelcome->provinciasLocalidades();
            
              
           $this->load->view('ciudad/index',$data);
            
        
    }
    function ajax_listados_proyectos(){
         
        if (is_ajax) {           
        }else{
            redirect('404');
            die();
        }
            $data['id_style'] = 'listado';
            $data['page'] = 'listado_proyecto';
            //ZONIFICACION            
            $d['todo'] =  $this->MWelcome->provinciasLocalidades();
            $d['proyectos_localidades'] = $this->MWelcome->provinciasLocalidades();
            $f=null;
           
            //:::::::::::::
            $tiempo_inicio = microtime(true);
          if (sizeof($d['todo']) > 0) {
            foreach ($d['todo'] as $r){
               $f .= $r['provincia_nombre'].', ';
               usleep(100000);
            }
             }else{ $f .= 'imposible mostrar';}
        $tiempo_final = microtime(true);
        $tiempo = $tiempo_final - $tiempo_inicio;

        $f .= "Ha tardado". $tiempo .' ';
            
           echo json_encode($f);
            
        
    }
    
     function contacto(){
       // $this->load->library();
        
            $data['id_style'] = 'novedades';
            $data['page'] = 'contacto';
            
            
            //ZONIFICACION            
            $data['proyectos_provincias'] = $this->MWelcome->proyectosProvincias();
            $data['proyectos_localidades'] = $this->MWelcome->provinciasLocalidades();
              
           

            
        $this->load->helper('form');
        $this->load->library('email');
        $this->load->helper('captcha');
        
           



         $this->load->helper('form');
	        $this->load->library('email');
	        $config['charset'] = 'iso-8859-1';
	        $config['wordwrap'] = TRUE;
	        $config['newline'] = '\n';
	        $config['mailtype'] ='html';        
	        $this->email->initialize($config);      
       
           
         $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error"><p>', '</p></div>');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'required');
        $this->form_validation->set_rules('mail', 'Email',  'trim|required|valid_email');
       
        $this->form_validation->set_rules('mensaje', 'Mensaje');

        if ($this->form_validation->run() == FALSE ) {
            $data['page'] = 'form';
        } else {
            
            $data['page'] = 'succes'; 
            
       
     
       // $this->email->from($this->input->post('email'), $this->input->post('nombre'));
     
        $this->email->to('info@centrocristianociudadela.com');
        $this->email->from($this->security->xss_clean($this->input->post('mail'))); 
        
        $this->email->subject('Ciudadela WEB: de '.$this->input->post('nombre'));
        $this->email->message('
                               
                Nombre: '  .$this->security->xss_clean($this->input->post('nombre')) .'<br/>
                Apellido: '.$this->security->xss_clean($this->input->post('apellido')) .'<br/>
                Email: '   .$this->security->xss_clean($this->input->post('mail')) .'<br/>
                Ceuluar: ' .$this->security->xss_clean($this->input->post('celular')) .'<br/>
                Mensaje: ' .$this->security->xss_clean($this->input->post('comentario')) 
                
                );
        $this->email->send();
       // $this->email->print_debugger();    
            
        } 
            
            
          
            
            $this->load->view('ciudad/index',$data);
            
        
    }
    
    
    
    
    
}