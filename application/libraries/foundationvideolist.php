<?php if(!defined('BASEPATH')) exit ('No direct scripts allowed');

class FoundationVideoList extends VideoList{

	public function __construct($data=null){
		if($data instanceof Video)
			$this->_data = $data;
	}
}
