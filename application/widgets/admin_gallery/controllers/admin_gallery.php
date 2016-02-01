<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_gallery extends MX_Controller {
    
//    function Upload()
//    {
//        parent::MX_Controller();
//        $this->load->helper(array('form', 'url'));
//    }
    
    function index()
    {    
       // $this->load->library('UploadHandler'); 
        $this->load->helper(array('form', 'url'));
        $this->load->model('MAdmin_gallery');
        $data['list']=$this->MAdmin_gallery->multimedia();
        $this->load->view('view_admin_gallery',$data);
    }

      
}
?>