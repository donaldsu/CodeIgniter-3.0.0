<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controllers extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Controllers
	 *	- or -
	 * 		http://example.com/index.php/Controllers/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Controllers/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
	{
		parent::__construct();
	}	
	
	public function index()
	{
		echo 'Hello World！';
	}
	
	public function comments()
	{
		echo '看这里！';
	}
	
	public function shoes($sandals='Test', $id=1)
    {
        echo $sandals;
		echo '<br/>';
        echo $id;
    }
	
	public function _remap($method, $params = array())
	{
		$process_method = 'process_'.$method;
		if (method_exists($this, $process_method))
		{
			return call_user_func_array(array($this, $process_method), $params);
		}elseif (method_exists($this, $method)){
			return call_user_func_array(array($this, $method), $params);
		}else {
			//show_404();
			$this->index();
		}
	}
	
	//关键是这个不会重复输出内容的
	public function _output($output)
	{
		echo $output.'ddd';
	}
	

	
	

	
}
