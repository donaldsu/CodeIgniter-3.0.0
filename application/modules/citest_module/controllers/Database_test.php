<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_test extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Database_test
	 *	- or -
	 * 		http://example.com/index.php/Database_test/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Database_test/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
    {
        parent::__construct();
		$this->output->enable_profiler(TRUE);
		$this->load->database();
    }		 
	 
	public function index()
	{

	}
	
	public function demo()
	{
		$query = $this->db->query('SELECT cat_id, cat_name, order_id FROM '.$this->db->dbprefix('tblcategory').' LIMIT 10');
		foreach ($query->result() as $row)
		{
				echo $row->cat_id.', ';
				echo $row->cat_name.', ';
				echo $row->order_id.'<br/>';
		}
		echo 'Total Results: ' . $query->num_rows();
		
		echo '<br/><br/>';

		if ($query->num_rows() > 0)
		{
			foreach ($query->result_array() as $row)
			{
					echo $row['cat_id'].', ';
					echo $row['cat_name'].', ';
					echo $row['order_id'].'<br/>';
			}
			echo 'Total Results: ' . $query->num_rows();
		}
		
		$query->free_result();  // The $query result object will no longer be available
		echo '<br/><br/>';
		
		$query = $this->db->query('SELECT cat_id, cat_name, order_id FROM '.$this->db->dbprefix('tblcategory').' LIMIT 10');
		//拿出当前这个row的内容, 并将指针指向下一个row的内容
		$query->data_seek(5); // Skip the first 5 rows
		
		while ($row = $query->unbuffered_row())
		{
				echo $row->cat_id.', ';
				echo $row->cat_name.', ';
				echo $row->order_id.'<br/>';
		}
		
		
	}
	
	public function demo1()
	{
		$table = $this->db->protect_identifiers('tblcategory', TRUE);
		$query = $this->db->query("SELECT cat_name FROM {$table} LIMIT 1");
		$row = $query->row();
		echo $row->cat_name;
		
		echo '<br/><br/>';
		
		$row = $query->row_array();
		echo $row['cat_name'];
	}
	
	public function demo2()
	{
		$sql = "INSERT INTO pearson_tblcategory (cat_id, cat_name, order_id) VALUES (".$this->db->escape(33).", ".$this->db->escape('mytest').", ".$this->db->escape(3).")";
		$this->db->query($sql);
		echo $this->db->affected_rows();
	}
	
	public function demo3()
	{
		$query = $this->db->get('pearson_tblcategory');
		foreach ($query->result() as $row)
		{
			echo $row->cat_id.', ';
		}
	}
	
	public function demo4()
	{
		$data = array(
				'cat_id' => 22,
				'cat_name' => 'Donald test',
				'order_id' => 11
		);
		
		// Produces: INSERT INTO mytable (title, name, date) VALUES ('{$title}', '{$name}', '{$date}')
		$this->db->insert('pearson_tblcategory', $data);  
	}	

	public function demo5()
	{
		$table = $this->db->protect_identifiers('tblcategory', TRUE);
		$like_str = '%'.$this->db->escape_like_str('d%s%').'%';
		$this->db->query("SELECT * FROM {$table} WHERE id IN ? AND cat_name LIKE ?", array(array(3, 55), $like_str));
		echo $like_str;
	}
	
	public function demo6()
	{
		if ( ! $this->db->simple_query('SELECT `example_field` FROM `example_table`'))
		{
				$error = $this->db->error(); // Has keys 'code' and 'message'
				print_r($error);
		}	
	}
	
	//Query Builder Class
	public function demo7()
	{
		$query = $this->db->get('tblcategory', 10, 20);
		$query->free_result();  // The $query result object will no longer be available

		
		$this->db->limit(20, 10)->select('cat_name', 'cat_id', 'file_name')->from(array('tblcategory', 'tblpicture'))->get();
		$query->free_result();  // The $query result object will no longer be available	
		
		$this->db->select('(SELECT SUM(pearson_tblpicture.pic_status) FROM pearson_tblpicture WHERE pearson_tblpicture.pic_id=4) AS amount_paid, pearson_tblcategory.*', FALSE);
		$this->db->where('cat_id', 5);
		$query = $this->db->get('tblcategory');
		$query->free_result();  // The $query result object will no longer be available	
		
		$this->db->select('tblcategory.cat_name, tblpicture.keyword, tblpicturecategory.date_create');
		$this->db->from('tblpicture');
		$this->db->join('tblpicturecategory', 'tblpicture.pic_id = tblpicturecategory.pic_id');
		$this->db->join('tblcategory', 'tblpicturecategory.cat_id = tblcategory.cat_id', 'left');
		//$this->db->where(array('tblpicture.pic_id >' => 4, 'tblcategory.cat_id <'=>6));
		$this->db->group_start();
			$this->db->where("tblpicture.pic_id=4 AND tblcategory.cat_id=6");
		$this->db->group_end();
		$this->db->or_group_start();
			$this->db->where("tblpicture.pic_id=8 AND tblcategory.cat_id=7");
			$this->db->where_in('tblcategory.cat_id', array(8, 9, 10, 11, 13, 14));
		$this->db->group_end();
		//$this->db->or_where_in('tblcategory.cat_id', array(8, 9, 10, 11, 13, 14));
		//$this->db->where_not_in('tblcategory.cat_id', array(8, 9, 10, 11, 13, 14));
		//$this->db->or_where_not_in('tblcategory.cat_id', array(8, 9, 10, 11, 13, 14));
		
		$this->db->like('tblpicture.keyword', 'match', 'before');    // Produces: WHERE `title` LIKE '%match' ESCAPE '!'
		$this->db->or_like('tblpicture.keyword', 'match', 'after');     // Produces: WHERE `title` LIKE 'match%' ESCAPE '!'
		$this->db->not_like('tblpicture.keyword', 'match');      // Produces: WHERE `title` LIKE '%match%' ESCAPE '!'
		
		//not work in my CI3
		//$this->db->or_like(array('tblpicture.keyword'=>'a', 'tblpicture.keyword'=>'b', 'tblpicture.keyword'=>'c'));
		
		$query = $this->db->get();
		$query->free_result();  // The $query result object will no longer be available	
		
		$this->db->select('*');
		$this->db->from('tblpicture');
		$this->db->group_by(array("keyword", "pic_status"));
		//$this->db->having(array('keyword =' => 'axe', 'COUNT(pic_status) >' => 1));
		$this->db->order_by('keyword DESC, date_create ASC');
		$query = $this->db->get();
		$query->free_result();  // The $query result object will no longer be available			
		
		
	}
	
	public function demo8()
	{
		$this->db->set('cat_id', 'cat_id+1', FALSE);
		$this->db->set('cat_name', 'Donald use "set" to insert data');
		$this->db->set('order_id', 24);
		$this->db->insert('tblcategory');
	}
	
	public function demo9()
	{
		$this->db->set(array('cat_id'=>22, 'cat_name'=>'my data insert', 'order_id'=>24));
		$this->db->insert('tblcategory');
	}
	
	public function demo10()
	{
		$data = array(
			array(
					'cat_id' => 45,
					'cat_name' => 'My Name',
					'order_id' => 22
			),
			array(
					'cat_id' => 46,
					'cat_name' => 'Another Name',
					'order_id' => 22
			)
		);
		$this->db->insert_batch('tblcategory', $data);
	}
	
	public function demo11()
	{
		$data = array(
			'cat_id' => 45,
			'cat_name' => 'My Name',
			'order_id' => 22
		);
		$this->db->where('id', 82);
		$this->db->update('tblcategory', $data);
		
		//或者直接这样也是可以的
		//$this->db->update('tblcategory', $data, array('id' => 82));
	}
	
	public function demo12()
	{
		$data = array(
			array(
					'cat_id' => 45,
					'cat_name' => 'My Name 2',
					'order_id' => 22
			),
			array(
					'cat_id' => 46,
					'cat_name' => 'Another Name 2',
					'order_id' => 22
			)
		);
		$this->db->update_batch('tblcategory', $data, 'cat_id');
	}	
	
	public function demo13()
	{
		$this->db->delete('tblcategory', array('id' => 80));
		
		$this->db->where('id', 80);
		$this->db->delete('tblcategory');
	}
	
	public function demo14()
	{
		//Not work, from my tested.
		$tables = array('tblcategory', 'tblpicture', 'tblpicturecategory');
		$this->db->where('id', 5);
		$this->db->delete($tables);
	}
	
	public function demo15()
	{
		$this->db->start_cache();
		$query = $this->db->get('tblpicture', 10, 20);
		$this->db->flush_cache();
		$this->db->where('cat_id', 5);
		$query = $this->db->get('tblcategory');
		$this->db->stop_cache();
	}
	
	public function demo16()
	{
		//你可以选择性地将事务系统设置到 "测试模式" , 这将导致你的查询被回滚 -- 尽管查询会生成有效结果。要使用测试模式, 只需将 $this->db->trans_start() 函数的第一个参数设置为 TRUE 即可:
		
		$this->db->trans_start(TRUE); 
		$query = $this->db->get('tblpicture', 10, 20);
		$this->db->set(array('cat_id'=>22, 'cat_name'=>'kkmy data insert', 'order_id'=>23));
		$this->db->insert('tblcategory');
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === FALSE)
		{
			echo '操作失效, 实现了事物, 关键系里面的SQL并不是完全执行成功!';
		}
		
	}
	
	public function demo17()
	{
		$this->db->trans_begin();

		$query = $this->db->get('tblpicture', 10, 20);
		$this->db->set(array('cat_id'=>22, 'cat_name'=>'ddmy data insert', 'order_id'=>23));
		$this->db->insert('tblcategory');

		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
		}else{
			$this->db->trans_commit();
		}
		
	}
	
	public function demo18()
	{
		$this->db->cache_on();
		$query = $this->db->get('tblpicture', 10, 20);
		$this->db->where('cat_id', 5);
		$query = $this->db->get('tblcategory');
		$this->db->cache_off();
	}
	
	public function demo19()
	{
		$this->db->cache_delete('database_test', 'demo18');
	}
	
	public function demo20()
	{
		$this->db->cache_delete_all();
	}
	
	
	
}