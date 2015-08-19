<?php 

class Loadconfig_test extends MX_Controller {
	
	
	public function __construct()
    {
        parent::__construct();
		
    }
	
	public function index()
	{
		$this->config->load('donald_settings', TRUE);
		$donald_settings = $this->config->item('donald_settings');
		print_r($donald_settings);
	}
	
	
	public function demo()
	{
		$this->config->load('donald_settings');
		$donald_settings = $this->config->item('donald_settings');
		print_r($this->config);
	}	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}