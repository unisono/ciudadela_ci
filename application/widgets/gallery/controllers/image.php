<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

    class Image extends MX_Controller {

        public function index($start = 0) {

            $this->load->model('MGallery');

            switch ($this->uri->segment(2)){
                case 'novedades':
                $data['im'] = $this->MGallery->multimedia($this->uri->segment(100, 100));
                break;
            default :
                $data['im'] = $this->MGallery->multimedia($this->uri->segment(2, 100));
                break;
            }
            

            $this->load->view('index', $data);
        }

    }

    /* End of file image.php */
/* Location: ./system/application/controllers/image.php */