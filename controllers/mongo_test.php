<?php
class Mongo_test extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
	}
	
	function index()
	{
		// 
		
		// Report!
		echo $this->unit->report();
	}

} // EOF