<?php
    class General extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
        }
        
        public function index(){
            $this->load->view('general/index');
        }
        public function teaching(){
            $this->load->view('general/teaching/index');
        }
        public function biography(){
            $this->load->view('general/biography/index');
        }
        public function work(){
            $this->load->view('general/work/index');
        }
        public function documentry(){
            $this->load->view('general/documentry/index');
        }
        public function player(){
            $this->load->view('foundationvideo/player/index');
        }
    }