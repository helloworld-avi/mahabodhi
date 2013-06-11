<?php
    class AboutUs extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
        }
        
        public function index(){
            $this->load->view('aboutus/index');
        }
        public function project(){
            $this->load->view('aboutus/project');
        }
    }