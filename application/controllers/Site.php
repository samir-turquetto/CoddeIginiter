<?php 
defined('BASEPATH') OR exit('No direct spcript access allowed');

    class Site extends CI_Controller{
        
        public function index(){

            $data['title'] = "Bem - vindo";

            $this->load->view('templates/header');
            $this->load->view('templates/banner');
            $this->load->view('home');
            $this->load->view('templates/slider');
            $this->load->view('templates/footer');
        }

        public function view($page = 'home'){
            if(!file_exists(APPPATH.'views/'.$page.'.php')){
                show_404();
            }

            $data['title'] = ucfirst($page);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/banner');
            $this->load->view($page);            
            $this->load->view('templates/footer');
        }
    }
?>