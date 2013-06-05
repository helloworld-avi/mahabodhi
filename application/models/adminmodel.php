<?php

    class AdminModel extends CI_Model{
        
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
        
        public function setVideo($arg){
            return $this->db->insert('featured_video', $arg);
        }
        
        public function getFeaturedVideoByCategory($gen){
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', $gen);
            
            $query = $this->db->get();
            
            return $query->result_array();
        }
        
        public function getVideoInfo($id){
            $this->db->select('*');
            $this->db->where('y_id', $id);
            $this->db->from('featured_video');
            
            $query = $this->db->get();
            
            return $query->result_array();
            
        }
        
    }