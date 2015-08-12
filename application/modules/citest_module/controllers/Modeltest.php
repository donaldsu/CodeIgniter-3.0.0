<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeltest extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/modeltest
	 *	- or -
	 * 		http://example.com/index.php/modeltest/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/modeltest/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
    {
        parent::__construct();
		$this->load->model('blog_model', 'blog');
    }	
	
	public function index()
	{
		echo '打印最后十条数据:<br/>';
		print_r($this->blog->get_last_ten_entries());
	}
	
	public function add2update()
	{
		if ($this->blog->insert_entry())
		{
			echo '插入成功! <br/>';
		}

		if ($this->blog->update_entry())
		{
			echo '更新成功! <br/>';
		}
	
	}

	
	
}