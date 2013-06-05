<?php if(!defined('BASEPATH')) exit('No direct scripts allowed');

    class GeneralVideo extends Video{
	public function __construct($ID=null, $youID=null, $genre=null){
	    $this->ID = $ID;
	    $this->youID = $youID;
	    $this->genre = $genre;
	}
    }

