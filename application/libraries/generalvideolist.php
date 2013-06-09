<?php if(!defined('BASEPATH')) exit ('No direct scripts allowed');

class GeneralVideoList extends VideoList{

	public function __construct($data=null){
		if($data instanceof Video)
			$this->_data = $data;
	}	
}
