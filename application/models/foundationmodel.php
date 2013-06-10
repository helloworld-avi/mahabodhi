<?php
    
    class FoundationModel extends CI_Model{
        
        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->list_count = 2;
        }
        
        public function prepareVideos(){
            
            //prepare teaching videos
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'teaching');
            $this->db->limit($this->list_count);
            
            $q = $this->db->get();
            
            $ret['teaching'] = $q->result_array();
            
            //prepare meditation videos
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'meditation');
            $this->db->limit($this->list_count);
            
            $q = $this->db->get();
            
            $ret['meditation'] = $q->result_array();
            
            //prepare pilgrimage videos
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'pilgrimage');
            $this->db->limit($this->list_count);
            
            $q = $this->db->get();
            
            $ret['pilgrimage'] = $q->result_array();
            
            //prepare workshop videos
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'workshop');
            $this->db->limit($this->list_count);
            
            $q = $this->db->get();
            
            $ret['workshop'] = $q->result_array();
            
            //prepare event videos
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'event');
            $this->db->limit($this->list_count);
            
            $q = $this->db->get();
            
            $ret['event'] = $q->result_array();
            
            //prepare biography videos
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'biography');
            $this->db->limit($this->list_count);
            
            $q = $this->db->get();
            
            $ret['biography'] = $q->result_array();
            
            //prepare documentry videos
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'documentry');
            $this->db->limit($this->list_count);
            
            $q = $this->db->get();
            
            $ret['documentry'] = $q->result_array();
            
            //prepare other videos
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'other');
            $this->db->limit($this->list_count);
            
            $q = $this->db->get();
            
            $ret['other'] = $q->result_array();
            
            return $ret;
        }
        
        public function prepareTeachingVideos(){
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'teaching');
            $this->db->order_by('entry_timestamp', 'desc');
            
            $q = $this->db->get();
            
            return $q->result_array();
        }
        
        public function prepareMeditationVideos(){
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'meditation');
            $this->db->order_by('entry_timestamp', 'desc');
            
            $q = $this->db->get();
            
            return $q->result_array();
        }
        
        public function preparePilgrimageVideos(){
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'pilgrimage');
            $this->db->order_by('entry_timestamp', 'desc');
            
            $q = $this->db->get();
            
            return $q->result_array();
        }
        
        public function prepareWorkshopVideos(){
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'workshop');
            $this->db->order_by('entry_timestamp', 'desc');
            
            $q = $this->db->get();
            
            return $q->result_array();
        }
        
        public function prepareEventVideos(){
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'event');
            $this->db->order_by('entry_timestamp', 'desc');
            
            $q = $this->db->get();
            
            return $q->result_array();
        }
        
        public function prepareBiographyVideos(){
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'biography');
            $this->db->order_by('entry_timestamp', 'desc');
            
            $q = $this->db->get();
            
            return $q->result_array();
        }
        
        public function prepareDocumentryVideos(){
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'documentry');
            $this->db->order_by('entry_timestamp', 'desc');
            
            $q = $this->db->get();
            
            return $q->result_array();
        }
        
        public function prepareOtherVideos(){
            $this->db->select('*');
            $this->db->from('featured_video');
            $this->db->where('category', 'other');
            $this->db->order_by('entry_timestamp', 'desc');
            
            $q = $this->db->get();
            
            return $q->result_array();
        }
    }