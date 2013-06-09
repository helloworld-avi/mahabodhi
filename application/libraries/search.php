<?php if(!defined('BASEPATH')) exit ('No direct scripts allowed');

class Search {
	private $_string;
	private $_keys = array();

	public function __construct($string=null){
		if($string != null){
			$string = strtolower(trim($string));
			$this->_string = $string;
			$this->_keys = explode(' ', $string);
		}	
	}

	public function getKeys(){
		return $this->_keys;
	}

	public function getResult(){
	}

}
