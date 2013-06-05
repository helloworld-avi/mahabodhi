<?php

    class Home extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
        }
        
        public function index(){
            $this->load->model('homemodel');
            $data['videos'] = $this->homemodel->getVideos();
            $this->load->view('home/index', $data);
	}
    }
