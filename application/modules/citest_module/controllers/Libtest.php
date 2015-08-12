<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Libtest extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Libtest
	 *	- or -
	 * 		http://example.com/index.php/Libtest/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Libtest/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
    {
        parent::__construct();
		$this->load->library(array('email', 'table'));
		$this->load->library('Mylib');
		$this->load->model('blog_model', 'blog');
    }
	
	public function index()
	{
		$this->mylib->bar();
	}
	
    public function demo()
	{
		$this->table->set_caption('Colors');
		$this->table->set_heading('Name Donald', 'Color Donald', 'Size Donald');
		$data = array(
				 array('Name', 'Color', 'Size'),
				 array('Fred', 'Blue', 'Small'),
				 array('Mary', 'Red', 'Large'),
				 array('John', 'Green', 'Medium')
        );
		echo $this->table->generate($data);
	}

	public function demo2()
	{
		$tmpl = array (
							'table_open'          => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">',

							'heading_row_start'   => '<tr>',
							'heading_row_end'     => '</tr>',
							'heading_cell_start'  => '<th>',
							'heading_cell_end'    => '</th>',

							'row_start'           => '<tr>',
							'row_end'             => '</tr>',
							'cell_start'          => '<td>',
							'cell_end'            => '</td>',

							'row_alt_start'       => '<tr>',
							'row_alt_end'         => '</tr>',
							'cell_alt_start'      => '<td>',
							'cell_alt_end'        => '</td>',

							'table_close'         => '</table>'
					  );

		$this->table->set_template($tmpl);
		echo $this->table->generate($this->blog->get_last_ten_entries_array());
	}	
	
	public function foo()
	{
		$this->mylib->foo();
	}
	
	
	
	
	
	
}