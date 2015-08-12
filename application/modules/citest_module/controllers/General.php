<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/General
	 *	- or -
	 * 		http://example.com/index.php/General/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/General/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if (is_php('5.3'))
		{
			echo 'This is a PHP5.3 Server!';
		}
		
		echo '<br/>';
		
		if (is_really_writable(APPPATH.'index.html'))
		{
			echo "I could write to this if I wanted to";
		}else{
			echo "File is not writable";
			//echo APPPATH;
		}
	
		echo '<br/>';

			log_message('error', 'Some variable did not contain a value.');

			log_message('debug', 'Some variable was correctly set');

		
	
	}
	
	
	
	
}