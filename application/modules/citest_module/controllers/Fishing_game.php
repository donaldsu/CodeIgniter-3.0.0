<?php 

class Fishing_game extends MX_Controller {


	/**
     * @var array 普通小鱼
     */
    private $normal_fishes = array(1, 4, 7, 10, 13, 16, 19, 22, 29, 32, 35, 38, 41, 44, 47, 50, 53, 56, 59 );

    /**
     * @var array 大鱼
     */
    private $max_fishes = array();

    /**
     * @var array 带风暴效果的鱼
     */
    private $wind_fishes = array(3, 6, 9, 12, 15, 18, 21, 24, 31, 34, 37, 40, 43, 46, 49, 52, 55, 58, 61);

    /**
     * @var array 带闪电效果的鱼
     */
    private $lightning_fishes = array(2, 5, 8, 11, 14, 17, 20, 23, 30, 33, 36, 39, 42, 45, 48, 51, 54, 57, 60);

    /**
     * @var array 带武器的鱼
     */
    private $crab_fishes = array(25, 26, 27, 28);

    /**
     * @var array BOSS 鱼
     */
    private $boss_fishes = array(62, 63, 64, 65, 66, 67);


	
	public function __construct()
    {
        parent::__construct();
    }
	
	
	public function change_to_table()
	{	
		$track_setting = array (
				1	=>	   array ('distance' => 1313,'track_name' => 'straghit_line','type' => 'line'),
				2	=>	   array ('distance' => 2037,'track_name' => 'curve','type' => 'curve'),
				3	=>	  array ('distance' => 2221,'track_name' => 'circle','type' => 'circle'),
				4	=>	  array ('distance' => 2646,'track_name' => 'eight','type' => 'eight'),
				5	=>	  array ('distance' => 4053,'track_name' => 'wave','type' => 'wave'),
				6	=>	  array ('distance' => 892,'track_name' => 'vline','type' => 'line'),
				7	=>	  array ('distance' => 1281,'track_name' => 'line2','type' => 'line'),
				8	=>	  array ('distance' => 1808,'track_name' => 'w2','type' => 'wave'),
				9	=>	    array ('distance' => 881,'track_name' => 'line5','type' => 'line'),
				10	=>	    array ('distance' => 1493,'track_name' => 'c1','type' => 'curve'),
				11	=>	    array ('distance' => 1512,'track_name' => 'c2','type' => 'curve'),
				12	=>	    array ('distance' => 1692,'track_name' => 'c4','type' => 'curve'),
				13	=>	    array ('distance' => 1422,'track_name' => 'c5','type' => 'curve'),
				14	=>	    array ('distance' => 1469,'track_name' => 'c6','type' => 'curve'),
				15	=>	    array ('distance' => 1282,'track_name' => 'line6','type' => 'line'),
				16	=>	    array ('distance' => 1090,'track_name' => 'cir2','type' => 'circle'),
				17	=>	    array ('distance' => 1523,'track_name' => 'c7','type' => 'curve'),
				18	=>	    array ('distance' => 1392,'track_name' => 'c8','type' => 'curve'),
				19	=>	    array ('distance' => 1608,'track_name' => 'c9','type' => 'curve'),
				20	=>	    array ('distance' => 1460,'track_name' => 'c10','type' => 'curve'),
				21	=>	    array ('distance' => 1256,'track_name' => 'line7','type' => 'line'),
				22	=>	    array ('distance' => 924,'track_name' => 'line8','type' => 'line'),
				23	=>	    array ('distance' => 1358,'track_name' => 'line9','type' => 'line'),
				24	=>	    array ('distance' => 2738,'track_name' => 'cir3','type' => 'circle'),
				25	=>	    array ('distance' => 1860,'track_name' => 'e2','type' => 'eight'),
				26	=>	    array ('distance' => 3112,'track_name' => 'e3','type' => 'eight'),
				27	=>	    array ('distance' => 3056,'track_name' => 'e5','type' => 'eight'),
				28	=>	    array ('distance' => 1822,'track_name' => 'cir4','type' => 'circle'),
				29	=>	    array ('distance' => 1255,'track_name' => 'cir5','type' => 'circle'),
				30	=>	    array ('distance' => 1453,'track_name' => 'cir6','type' => 'circle'),
				31	=>	    array ('distance' => 4700,'track_name' => 'helix1','type' => 'circle'),
				32	=>	    array ('distance' => 5508,'track_name' => 'helixToOut','type' => 'circle'),
				33	=>	    array ('distance' => 1711,'track_name' => 'DNA','type' => 'wave'),
				34	=>	    array ('distance' => 1605,'track_name' => 'DNA_BACK','type' => 'wave'),
				35	=>	    array ('distance' => 5787,'track_name' => 'tornado','type' => 'circle'),
				36	=>	    array ('distance' => 3744,'track_name' => 'tornado2','type' => 'circle'),
				37	=>	    array ('distance' => 1597,'track_name' => 'c11','type' => 'curve'),
				38	=>	    array ('distance' => 1586,'track_name' => 'c12','type' => 'curve'),
				39	=>	    array ('distance' => 1561,'track_name' => 'c13','type' => 'curve'),
				40	=>	    array ('distance' => 1291,'track_name' => 'c14','type' => 'curve'),
				41	=>	    array ('distance' => 893,'track_name' => 'c15','type' => 'curve'),
				42	=>	    array ('distance' => 1550,'track_name' => 'c16','type' => 'curve'),
				43	=>	    array ('distance' => 1389,'track_name' => 'c17','type' => 'curve'),
				44	=>	    array ('distance' => 1364,'track_name' => 'c18','type' => 'curve'),
				45	=>	    array ('distance' => 1175,'track_name' => 'c19','type' => 'curve'),
				46	=>	    array ('distance' => 905,'track_name' => 'c20','type' => 'curve'),
				47	=>	    array ('distance' => 1572,'track_name' => 'c21','type' => 'curve'),
				48	=>	    array ('distance' => 1358,'track_name' => 'c22','type' => 'curve'),
				49	=>	    array ('distance' => 1307,'track_name' => 'c23','type' => 'curve'),
				50	=>	    array ('distance' => 1411,'track_name' => 'c25','type' => 'curve'),
				51	=>	    array ('distance' => 1025,'track_name' => 'c26','type' => 'curve'),
				52	=>	    array ('distance' => 1832,'track_name' => '27','type' => 'curve'),
				53	=>	    array ('distance' => 1383,'track_name' => 'line10','type' => 'line'),
				54	=>	    array ('distance' => 1080,'track_name' => 'line11','type' => 'line'),
				55	=>	    array ('distance' => 1326,'track_name' => 'line12','type' => 'line'),
				56	=>	    array ('distance' => 1594,'track_name' => 'c28','type' => 'curve'),
				57	=>	    array ('distance' => 1522,'track_name' => 'c29','type' => 'curve'),
				58	=>	    array ('distance' => 1430,'track_name' => 'c30','type' => 'curve'),
				59	=>	    array ('distance' => 1260,'track_name' => 'c31','type' => 'curve'),
				60	=>	    array ('distance' => 1265,'track_name' => 'c32','type' => 'curve'),
				61	=>	    array ('distance' => 1670,'track_name' => 'c33','type' => 'curve'),
				62	=>	    array ('distance' => 1086,'track_name' => 'c34','type' => 'curve'),
				63	=>	    array ('distance' => 1036,'track_name' => 'c35','type' => 'curve'),
				64	=>	    array ('distance' => 1415,'track_name' => 'c36','type' => 'curve'),
				65	=>	    array ('distance' => 1494,'track_name' => 'c37','type' => 'curve'),
				66	=>	    array ('distance' => 1137,'track_name' => 'c38','type' => 'curve'),
				67	=>	    array ('distance' => 1317,'track_name' => 'c39','type' => 'curve'),
				68	=>	    array ('distance' => 878,'track_name' => 'c40','type' => 'curve'),
				69	=>	    array ('distance' => 1237,'track_name' => 'c41','type' => 'curve'),
				70	=>	    array ('distance' => 1290,'track_name' => 'c42','type' => 'curve'),
				71	=>	    array ('distance' => 1519,'track_name' => 'c43','type' => 'curve'),
				72	=>	    array ('distance' => 869,'track_name' => 'c44','type' => 'curve'),
				73	=>	    array ('distance' => 1479,'track_name' => 'c45','type' => 'curve'),
				74	=>	    array ('distance' => 1538,'track_name' => 'c46','type' => 'curve'),
				75	=>	    array ('distance' => 1394,'track_name' => 'c47','type' => 'curve'),
				76	=>	    array ('distance' => 1544,'track_name' => 'c48','type' => 'curve'),
				77	=>	    array ('distance' => 1263,'track_name' => 'c49','type' => 'curve'),
				78	=>	    array ('distance' => 1122,'track_name' => 'c50','type' => 'curve'),
				79	=>	    array ('distance' => 1690,'track_name' => 'c51','type' => 'curve'),
				80	=>	    array ('distance' => 1681,'track_name' => 'c52','type' => 'curve'),
				81	=>	    array ('distance' => 1541,'track_name' => 'c53','type' => 'curve'),
				82	=>	    array ('distance' => 1274,'track_name' => 'c54','type' => 'curve'),
				83	=>	    array ('distance' => 1550,'track_name' => 'c55','type' => 'curve'),
				84	=>	    array ('distance' => 1941,'track_name' => 'c56','type' => 'curve'),
				85	=>	    array ('distance' => 1694,'track_name' => 'c57','type' => 'curve'),
				86	=>	    array ('distance' => 1740,'track_name' => 'c58','type' => 'curve'),
				87	=>	    array ('distance' => 1770,'track_name' => 'c59','type' => 'curve'),
				88	=>	    array ('distance' => 2161,'track_name' => 'c60','type' => 'curve'),
				89	=>	    array ('distance' => 1522,'track_name' => 'c61','type' => 'curve'),
				90	=>	    array ('distance' => 941,'track_name' => 'c62','type' => 'curve'),
				91	=>	    array ('distance' => 1079,'track_name' => 'c63','type' => 'curve'),
				92	=>	    array ('distance' => 1101,'track_name' => 'c64','type' => 'curve'),
				93	=>	    array ('distance' => 1003,'track_name' => 'c65','type' => 'curve'),
				94	=>	    array ('distance' => 961,'track_name' => 'c66','type' => 'curve'),
				95	=>	    array ('distance' => 856,'track_name' => 'c68','type' => 'curve'),
				96	=>	    array ('distance' => 874,'track_name' => 'c69','type' => 'curve'),
				97	=>	    array ('distance' => 1317,'track_name' => 'c70','type' => 'curve'),
				98	=>	    array ('distance' => 1203,'track_name' => 'c71','type' => 'curve'),
				99	=>	    array ('distance' => 1452,'track_name' => 'c72','type' => 'curve'),
				100	=>	    array ('distance' => 1276,'track_name' => 'c73','type' => 'curve'),
				101	=>	    array ('distance' => 1482,'track_name' => 'c74','type' => 'curve'),
				102	=>	    array ('distance' => 1588,'track_name' => 'c75','type' => 'curve'),
				103	=>	    array ('distance' => 1717,'track_name' => 'c76','type' => 'curve'),
				104	=>	    array ('distance' => 1400,'track_name' => 'c77','type' => 'curve'),
				105	=>	    array ('distance' => 1973,'track_name' => 'c78','type' => 'curve'),
				106	=>	    array ('distance' => 1814,'track_name' => 'c79','type' => 'curve'),
				107	=>	    array ('distance' => 1895,'track_name' => 'c80','type' => 'curve'),
				108	=>	    array ('distance' => 1503,'track_name' => 'c81','type' => 'curve'),
				109	=>	    array ('distance' => 1183,'track_name' => 'c82','type' => 'curve'),
				110	=>	    array ('distance' => 1278,'track_name' => 'c83','type' => 'curve'),
				111	=>	    array ('distance' => 1398,'track_name' => 'c84','type' => 'curve'),
				112	=>	    array ('distance' => 1110,'track_name' => 'c85','type' => 'curve'),
				113	=>	    array ('distance' => 1747,'track_name' => 'c86','type' => 'curve'),
				114	=>	    array ('distance' => 1770,'track_name' => 'c87','type' => 'curve'),
				115	=>	    array ('distance' => 1969,'track_name' => 'c88','type' => 'curve'),
				116	=>	    array ('distance' => 2042,'track_name' => 'c89','type' => 'curve'),
				117	=>	    array ('distance' => 2042,'track_name' => 'c90','type' => 'curve'),
				118	=>	    array ('distance' => 1656,'track_name' => 'c91','type' => 'curve'),
				119	=>	    array ('distance' => 1612,'track_name' => 'c92','type' => 'curve'),
				120	=>	    array ('distance' => 1642,'track_name' => 'c93','type' => 'curve'),
				121	=>	    array ('distance' => 1661,'track_name' => 'c94','type' => 'curve'),
				122	=>	    array ('distance' => 1919,'track_name' => 'c95','type' => 'curve'),
				123	=>	    array ('distance' => 2010,'track_name' => 'c96','type' => 'curve'),
				124	=>	    array ('distance' => 2264,'track_name' => 'c97','type' => 'curve'),
				125	=>	    array ('distance' => 1504,'track_name' => 'c98','type' => 'curve'),
				126	=>	    array ('distance' => 1477,'track_name' => 'c99','type' => 'curve'),
				127	=>	    array ('distance' => 1557,'track_name' => 'c100','type' => 'curve'),
				128	=>	    array ('distance' => 1709,'track_name' => 'c101','type' => 'curve'),
				129	=>	    array ('distance' => 1076,'track_name' => 'c102','type' => 'curve'),
				130	=>	    array ('distance' => 1322,'track_name' => 'c103','type' => 'curve'),
				131	=>	    array ('distance' => 1192,'track_name' => 'c104','type' => 'curve'),
				132	=>	    array ('distance' => 1628,'track_name' => 'c105','type' => 'curve')
		);		
		
		
		echo '<table>';

		foreach($track_setting as $k=>$item)
		{
			echo '<tr>';
			echo '<td>'.$k.'</td>';
			foreach($item as $data)
			{
				echo '<td>'.$data.'</td>';
			}
			echo '</tr>';
		}

		echo '</table>';		
		
	}
	
	
	private function get_rand($proArr) 
	{ 
		$result = ''; 
		//概率数组的总概率精度 
		$proSum = array_sum($proArr); 
		//概率数组循环 
		foreach ($proArr as $key => $proCur) { 
			$randNum = mt_rand(1, $proSum);             //抽取随机数
			if ($randNum <= $proCur) { 
				$result = $key;                         //得出结果
				break; 
			} else { 
				$proSum -= $proCur;                     
			}
		}
		unset ($proArr); 
		return $result; 
	}

	public function test_rand()
	{
		$prize_arr =array('devil'=>20,'crab'=>30,'crocodile'=>50);
		echo $this->get_rand($prize_arr);	
	}
	
	
	
	
	
	
	
	
	
}
