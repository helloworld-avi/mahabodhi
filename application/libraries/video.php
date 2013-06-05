<?php if(!defined('BASEPATH')) exit ('No direct scripts allowed');

	class Video{
		private $ID;
		private $youID;
		private $genre;

		public function setID($ID){
		    $this->ID = $ID;
		}

		public function getID(){
		    return $this->ID;
		}

		public function setYouID($youID){
		    $this->youID = $youID;
		}

		public function getYouID(){
		    return $this->youID;
		}

		public function setGenre($genre){
		    $this->genre = $genre;
		}

		public function getGenre(){
		    return $this->genre;
		}
		
		public function toString(){
			return 'ID: '.$this->getID().' | YouTube ID: '.$this->getYouID().' | Genre: '.$this->getGenre();
		}
	}

