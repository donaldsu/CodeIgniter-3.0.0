<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Views_test extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Views_test
	 *	- or -
	 * 		http://example.com/index.php/Views_test/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Views_test/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function m()
	{
		$data['page_title'] = 'Your title';
		$this->load->view('muilt/a');
		$this->load->view('muilt/b', $data);
		$this->load->view('muilt/c');
	}
	
	
}