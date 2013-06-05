<?php if(!defined('BASEPATH')) exit ('No direct scripts allowed');

abstract class VideoList{

	private $_data = array();

	public function push($data=null){
		if($data instanceof Video){
			$this->_data[] = $data;
			return true;
		}
		return false;
	}

	public function pop(){
		if(count($this->_data) != 0){
			$ret = $this->_data[count($this->_data)-1];
			unset($this->_data[count($this->_data)-1]);
			return $ret;
		}
		return false;
	}
}
