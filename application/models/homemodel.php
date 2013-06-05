<?php

	class HomeModel extends CI_Model{
		
		private $latestLimit = 4;
		private $mostWatchedLimit = 4;
		
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		
		public function getVideos(){
			//get latest videos
			$this->db->select('*');
			$this->db->from('featured_video');
			$this->db->order_by('entry_timestamp', 'desc');
			$this->db->limit($this->latestLimit);
			
			$query = $this->db->get();
			
			$fvLatest = $query->result_array();
			
			$this->db->select('*');
			$this->db->from('featured_video');
			$this->db->order_by('views', 'desc');
			$this->db->limit($this->mostWatchedLimit);
			
			$query = $this->db->get();
			
			$fvMostWatched = $query->result_array();
			
			//general videos
			//get latest videos
			$this->db->select('*');
			$this->db->from('general_video');
			$this->db->order_by('entry_timestamp', 'desc');
			$this->db->limit($this->latestLimit);
			
			$query = $this->db->get();
			
			$gvLatest = $query->result_array();
			
			$this->db->select('*');
			$this->db->from('general_video');
			$this->db->order_by('views', 'desc');
			$this->db->limit($this->mostWatchedLimit);
			
			$query = $this->db->get();
			
			$gvMostWatched = $query->result_array();
			
			$videos = array('fvLatest' => $fvLatest,
					'fvMostWatched' => $fvMostWatched,
					'gvLatest' => $gvLatest,
					'gvMostWatched' => $gvMostWatched
					);
			
			return $videos;
		}
	}
