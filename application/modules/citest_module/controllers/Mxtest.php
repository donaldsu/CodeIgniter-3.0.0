<?php 

class Mxtest extends MX_Controller{
	
	
	function __construct()
    {
        parent::__construct();
		
    }
	
	public function call_from_other_module()
	{
		echo 'call_from_other_module';
	}
	
	
	
}
