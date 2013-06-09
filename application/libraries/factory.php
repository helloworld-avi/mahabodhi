<?php if(!defined('BASEPATH')) exit ('No direct scripts allowed');

class Factory {

	public function __construct(){

		//start abstract classes

		require_once APPPATH.'libraries/video.php';
		require_once APPPATH.'libraries/videolist.php';

		//end of abstract classes

		//start concrete classes

		require_once APPPATH.'libraries/foundationvideo.php';
		require_once APPPATH.'libraries/generalvideo.php';
		require_once APPPATH.'libraries/foundationvideolist.php';
		require_once APPPATH.'libraries/search.php';

		//end of concrete classes
	}
}

