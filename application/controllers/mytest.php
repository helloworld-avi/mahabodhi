<?php
	class MyTest extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			echo "Hello I am MyTest controller. This is index function";
		}

		public function what(){
			echo "Hello I am MyTest controller. This is what function";
		}
}	
