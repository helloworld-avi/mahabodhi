<?php

	class SearchModel extends CI_Model{
		
		private $_searchKeys;

		public function __construct(){
			parent::__construct();
		}
		
		public function setSearchString($string = null){
			$this->load->database();
			$this->_searchKeys = explode(' ', $string);
		}

		public function getSearchResult(){
			
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
	}
