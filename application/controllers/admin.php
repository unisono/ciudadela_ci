<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends MX_Controller {
 
    
    
    
    
     function index()
    {    
       // $this->load->library('UploadHandler'); 
        $this->load->helper(array('form', 'url'));
        
         $data['LISTADO_IMAGENES'] = Modules::run('admin_gallery/admin_gallery/index');
        
        $this->load->view('view_admin', $data);
    }
    
    
    
    
}