<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helpertest extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper( array('number', 'url', 'string'));
	}	 
	
	public function index()
	{
		echo byte_format(65536).'<br/>';
		echo base_url().'<br/>';
		echo anchor('blog/comments', 'Click Here').'<br/>';
		echo reduce_double_slashes('\\ddd\\\\abcd.html');
	}
	
	
	
	
	
	
}