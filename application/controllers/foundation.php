<?php
    class Foundation extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
        }
        
        public function index(){
            $this->load->view('foundationvideo/index');
        }
        public function teaching(){
            $this->load->view('foundationvideo/teaching/index');
        }
        public function biography(){
            $this->load->view('foundationvideo/biography/index');
        }
        public function workshop(){
            $this->load->view('foundationvideo/workshop/index');
        }
        public function documentry(){
            $this->load->view('foundationvideo/documentry/index');
        }
        public function events(){
            $this->load->view('foundationvideo/events/index');
        }
        public function meditation(){
            $this->load->view('foundationvideo/meditation/index');
        }
        public function misc(){
            $this->load->view('foundationvideo/misc/index');
        }
        public function pilgrimage(){
            $this->load->view('foundationvideo/pilgrimage/index');
        }
        public function player(){
            $this->load->view('foundationvideo/player/index');
        }
    }