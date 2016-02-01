<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Nadairreal extends CI_Controller {

        public $categoria;
        public $tema;

        public function __construct() {
            parent::__construct();
            $this->load->model('MNadairreal');
            $this->load->helper('date');
            $this->load->helper('url');
            $this->categoria = $this->uri->segment(4);
            $this->tema = $this->uri->segment(3);
            @session_start();
        }

        function index() {
            $this->input->post('usuario');
            $this->input->post('password');
            $data['content'] = 'login';
            $this->load->view('template_ni', $data);
        }

        function dashboard($id = 1) {
            if (@$this->token($_GET['token']))
                ;
            if (!$_SESSION) {
                redirect('nadairreal', 'refresh');
                die('<h1>No Tiene permitodo el acceso<h1>');
            }
            if ($_SESSION and !$this->uri->segment(3) or !$this->uri->segment(4)) {
                redirect('nadairreal/dashboard/1/1', 'refresh');
            }
            // print_r($_SESSION);
            $data['chat'] = $this->MNadairreal->fillAllCampos('ni_tema', $id, $this->categoria);
            $data['topico'] = $this->MNadairreal->byIdTopic($id, $this->categoria);
            $data['temas'] = $this->MNadairreal->byIdTema($this->tema);
            $data['todas_categorias'] = $this->MNadairreal->allCategory($this->tema);
            $data['categorias'] = $this->MNadairreal->byIdCategory($this->categoria);
            $data['content'] = 'form';
            $this->load->view('template_ni', $data);
        }

        function token($token) {
            if ($token) {
                switch ($token) {
                    case 'RdD331d1':
                        @session_start();
                        $_SESSION['username'] = 'Eliseo';
                        $_SESSION['user_id'] = 1;
                        break;
                    case 'RdD331d2':
                        @session_start();
                        $_SESSION['username'] = 'Valeria';
                        $_SESSION['user_id'] = 2;
                        break;
                    case 'RdD331d3':
                        @session_start();
                        $_SESSION['username'] = 'Daiana';
                        $_SESSION['user_id'] = 3;
                        break;
                    case 'RdD331d4':
                        @session_start();
                        $_SESSION['username'] = 'Julian';
                        $_SESSION['user_id'] = 4;
                        break;
                    case 'RdD331d5':
                        @session_start();
                        $_SESSION['username'] = 'Mariana';
                        $_SESSION['user_id'] = 5;
                        break;
                    case 'RdD331d6':
                        @session_start();
                        $_SESSION['username'] = 'Ema';
                        $_SESSION['user_id'] = 6;
                        break;
                    case 'RdD331d7':
                        @session_start();
                        $_SESSION['username'] = 'Esteban';
                        $_SESSION['user_id'] = 7;
                        break;
                    case 'RdD331d8':
                        @session_start();
                        $_SESSION['username'] = 'Ezequiel';
                        $_SESSION['user_id'] = 8;
                        break;
                }
            }
        }

        function logueo() {
          //die($this->input->post('username'));
            if ($this->input->post('username') and $this->input->post('password') == 'nada123' or $this->input->post('password') == 'grupoa123') {
                switch ($this->input->post('username')) {
                    case 'Eliseo':
                        @session_start();
                        $_SESSION['username'] = $this->input->post('username');
                        $_SESSION['user_id'] = 1;
                        break;
                    case 'Valeria':
                        @session_start();
                        $_SESSION['username'] = $this->input->post('username');
                        $_SESSION['user_id'] = 2;
                        break;
                    case 'Daiana':
                        @session_start();
                        $_SESSION['username'] = $this->input->post('username');
                        $_SESSION['user_id'] = 3;
                        break;
                    case 'Julian':
                        @session_start();
                        $_SESSION['username'] = $this->input->post('username');
                        $_SESSION['user_id'] = 4;
                        break;
                    case 'Mariana':
                        @session_start();
                        $_SESSION['username'] = $this->input->post('username');
                        $_SESSION['user_id'] = 5;
                        break;
                    case 'Ema':
                        @session_start();
                        $_SESSION['username'] = $this->input->post('username');
                        $_SESSION['user_id'] = 6;
                        break;
                    case 'Esteban':
                        @session_start();
                        $_SESSION['username'] = $this->input->post('username');
                        $_SESSION['user_id'] = 7;
                        break;
                    case 'Ezequiel':
                        @session_start();
                        $_SESSION['username'] = $this->input->post('username');
                        $_SESSION['user_id'] = 8;
                        break;
                    case 'grupoa':
                        @session_start();
                        $_SESSION['username'] = $this->input->post('username');
                        $_SESSION['user_id'] = 8;
                        $_SESSION['tipo'] = 2;
                        
                        die('grupoa');
                }
                //$_SESSION['password'] = $this->input->post('password');
                echo 'true';
            } else {
                echo 'Usted no es un usuario registrado';
            }
        }

        function grupoa(){
            echo 'hola';
             $data['content'] = 'music';
            $this->load->view('template_ni', $data);
        }
        function posteos() {
            print_r($this->input->post());
            $this->MNadairreal->insertEntry($this->input->post());
            $this->enviarMail($this->input->post());
            //die();
        }

        function enviarMail($array) {
            $this->load->library('email');
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = '\n';
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            if (!empty($array['posteo-chat'])) {
                $m = $this->MNadairreal->allUsuario();
                foreach ($m as $a) {
                    $this->email->to($a['mail']);
                    $this->email->from('nadairreal@centrocristianociudadela.com', 'Nada Irreal');
                    $this->email->subject('Nuevo cometario: de ' . $_SESSION['username'] . ' #topico: ' . $array['id_posteo']);
                    $this->email->message(
                            'Hola ' . $a['nombre'] . ',<br/><b>' . $_SESSION['username'] . '</b> Agrego un comentario sobre <b>' . $array['categoria'] .
                            '</b> #topico: ' . $array['id_posteo'] . '<br/>' . $array['texto']
                            . ' <br/> <a href="http://www.centrocristianociudadela.com/nadairreal/dashboard/3/' . $array['id_categoria'] . '?token=' . $a['token'] . '">Ir a la publicacion</a>');
                    $this->email->send();
                }
            }
            if (!empty($array['posteo-topico'])) {
                $m = $this->MNadairreal->allUsuario();
                foreach ($m as $a) {
                    $this->email->to($a['mail']);
                    $this->email->from('nadairreal@centrocristianociudadela.com', 'Nada Irreal');
                    $this->email->subject('Se Creo un nuevo topico: de ' . $_SESSION['username']);
                    $this->email->message(
                            'Hola ' . $a['nombre'] . ',<br/><b>' . $_SESSION['username'] . ' </b> Agrego un nuevo topico a la categoria <b> ' . $array['categoria'] .
                            '<br/>' . $array['texto']
                            . ' <br/> <a href="http://www.centrocristianociudadela.com/nadairreal/dashboard/3/' . $array['id_categoria'] . '?token=' . $a['token'] . '">Ir a la publicacion</a>');
                    $this->email->send();
                }
            }
        }

        function chat($id, $categoria) {
            $data['chat'] = $this->MNadairreal->fillAllCampos('ni_tema', $id, $this->categoria);
            $data['topico'] = $this->MNadairreal->byIdTopic($id, $this->categoria);
            // $data['cantidad'] = $this->MNadairreal->byNumTopic($id, $this->categoria);
            $data['temas'] = $this->MNadairreal->allTable('ni_tema');
            //sleep(3);
            $this->load->view('chat', $data);
        }

        function logout() {
            session_destroy();
            redirect('nadairreal', 'refresh');
        }

    }

?>