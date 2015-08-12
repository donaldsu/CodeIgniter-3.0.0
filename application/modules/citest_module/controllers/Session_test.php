<?php 

class Session_test extends MX_Controller {


	public function __construct()
    {
        parent::__construct();
		$this->load->library('session');
		if ($this->session->logged_in!==TRUE)
		{
			$newdata = array(
				'username'  => 'johndoe',
				'email'     => 'johndoe@some-site.com',
				'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
		}else{
			echo 'Session init and be setted data!<br/>';
		}
    }


	public function index($to = 'World')
	{
		print_r($this->session);
		if ($this->session->has_userdata('logged_in'))
		{
			echo 'Have data';
		}
	}
	
	public function demo1()
	{
		echo $this->session->username;
	}
  
	public function demo2()
	{
		$array_items = array('username', 'email', 'logged_in');
		$this->session->unset_userdata($array_items);	
	}
    
	public function demo3()
	{
		$this->session->set_flashdata('donald_flash', 'my test data');	
	}
  
	public function demo4()
	{
		echo $this->session->flashdata('donald_flash');
	}
  
	public function demo5()
	{		
		// Both 'item' and 'item2' will expire after 300 seconds
		$this->session->mark_as_temp(array('item', 'item2'), 300);

		// 'item' will be erased after 300 seconds, while 'item2'
		// will do so after only 240 seconds
		/*
		$this->session->mark_as_temp(array(
				'item'  => 300,
				'item2' => 240
		));
		*/
	}
  
	public function demo6()
	{
		$tempdata = array('newuser' => TRUE, 'message' => 'Thanks for joining!');
		$this->session->set_tempdata($tempdata, NULL, 500);
	}
  
	public function demo7()
	{
		print_r($this->session->tempdata());
	}
  
	public function demo8()
	{
		$this->session->unset_tempdata('newuser');
	}
  
	public function demo9()
	{
		$this->session->sess_destroy();
	}
  
  
  
}
