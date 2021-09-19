<?php
		require_once 'revert.php';
		
		class test extends revert
		{
				public function test()
				{
					$test_str = "hello";
					$this -> str = $test_str;
					
					$arr_rev_step = str_split($test_str, 1);
					$arr_rev = array_reverse($arr_rev_step);

					$kat = true;

					for ($i = 0; $i < count($arr_rev_step); $i++) 
					{ 
						for ($j = count($arr_rev_step)-1; $j >= 0; $j--) 
						{ 
							if ($arr_rev_step[$i] == $arr_rev[$j])
							{
								$kat = true;
							} else
							{
								$kat = false;
							}

							if ($kat === false)
							{
								return $kat;
							}
						}
					}
					return $kat;
				} 

		}