<?php

class Cachetest extends MX_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
    }

	public function set_cache()
	{
		if ( ! $foo = $this->cache->get('foo'))
		{
				echo 'Saving to the cache!<br />';
				$foo = 'foobarbaz!';

				// Save into the cache for 5 minutes
				$this->cache->save('foo', $foo, 300);
		}
		
	}
	
	public function set_lots_of_cache()
	{
		$this->cache->save('donald', array(1, 2, 3, 4, 5, 6), 300);
	}
	
	public function get_cache()
	{
		print_r($this->cache->get('donald'));
	}

	public function del_cache()
	{
		$this->cache->delete('foo');
	}
	
	public function clean_up_cache()
	{
		$this->cache->clean();
	}

	public function show_all_cache()
	{
		var_dump($this->cache->cache_info());
	}

	public function show_cache_metadata()
	{
		var_dump($this->cache->get_metadata('donald'));
	}























}
