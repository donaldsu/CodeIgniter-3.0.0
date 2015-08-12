<?php 

function donald_hook()
{
	$CI =&get_instance();
	//var_dump($CI);
	$args = func_get_args();
	$control_name = $CI->uri->segment(2, 0);
	//echo $control_name;
	if ($control_name === 'test_input')
	{
		echo $control_name;
		echo '<br/>';
		echo 'donald<br/>';
	}	
}















