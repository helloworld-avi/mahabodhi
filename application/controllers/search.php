<?php

	class Search extends CI_Controller{
		
		private $_searchList;
		private $_searchString;

		public function __construct($string=null){
			parent::__construct();
		}
		
		public function index(){
			//clean the data
			$this->_searchString = $this->security->xss_clean(strtolower(trim($this->input->post('search_text'))));
			
			//check here if it contains character e.g: ;, "", etc;
			//code goes here
			
			$data['videos'] = $this->_getSearchList();
			
			$this->load->view('search/index', $data);
		}

		private function _getSearchList(){
			
			if(!empty($this->_searchString)){
				$this->load->model('searchmodel');
				$this->searchmodel->setSearchString($this->_searchString);
				return $this->searchmodel->getSearchResult();
				
			}
			else{
				return "User error: Empty string ' ', nothing to search ";
			}
		}
	}