<?php

    class AdminModel extends CI_Model{
        
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
        function get_user(){
            $this->db->select('id,first_name,middle_name,last_name,username,email,blocked');
            $this->db->from('user_info');
            $query = $this->db->get();
            
            return $query->result_array();
        }
        
        function delete_user(){
            $this->db->where('id',$this->uri->segment(3));
            $this->db->delete('user_info');
        }
        
        function block_user(){
                $this->db->where('id',$this->uri->segment(3));
                $this->db->set('blocked',1);
                $this->db->update('user_info');
                
        }
        function unblock_user(){
                $this->db->where('id',$this->uri->segment(3));
                $this->db->set('blocked',0);
                $this->db->update('user_info');
                
        }
        
        public function setVideo($arg){
            return $this->db->insert('featured_video', $arg);
        }
        
        public function setGVideo($arg){
            return $this->db->insert('general_video', $arg);
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
        
        public function getGVideoInfo($id){
            $this->db->select('*');
            $this->db->where('y_id', $id);
            $this->db->from('general_video');
            
            $query = $this->db->get();
            
            return $query->result_array();
            
        }
        public function getSearchResult($str){
			
            $this->_searchKeys = explode(' ',$str);
            //prepare query
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->like('featured_video.title', $this->_searchKeys[0]);
            //$this->db->or_like('general_video.title', $this->_searchKeys[0]);
            
            for($i = 1; $i < count($this->_searchKeys); $i++){
                    
                    $this->db->or_like('featured_video.title', $this->_searchKeys[$i]);
                    //$this->db->or_like('general_video.title', $this->_searchKeys[$i]);
            }
                    
            $query = $this->db->get();
            
            $result[] = $query->result_array();
            
            //prepare query
            $this->db->select('*');
            $this->db->from('general_video');
            $this->db->like('general_video.title', $this->_searchKeys[0]);
            
            for($i = 1; $i < count($this->_searchKeys); $i++){
                    
                    //$this->db->or_like('featured_video.title', $this->_searchKeys[$i]);
                    $this->db->or_like('general_video.title', $this->_searchKeys[$i]);
            }
                    
            $query = $this->db->get();
            
            $result[] = $query->result_array();
            
            return $result;
			
	}
        
        public function updateVideo($id, $data){
            $this->db->where('id', $id);
            $this->db->update('featured_video', $data);
        }
        
        public function updateGVideo($id, $data){
            $this->db->where('id', $id);
            $this->db->update('general_video', $data);
        }
        
        public function deleteVideo($y_id){
            $this->db->delete('featured_video', array('y_id' => $y_id));
        }
        
        public function deleteGVideo($y_id){
            $this->db->delete('general_video', array('y_id' => $y_id));
        }        
        public function getAllGVideo(){
            $this->db->select('*');
            $this->db->from('general_video');
            //$this->db->limit(0, 10);
            
            $query = $this->db->get();
            
            return $query->result_array();
        }
    }