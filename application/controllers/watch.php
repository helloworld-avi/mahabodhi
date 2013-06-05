<?php

    class Watch extends CI_Controller{
        
        public function index(){
            echo "I am index of watch";
        }
        
        public function play($id=null){
            $this->load->view('watch/index');
        }
    }