<?php
		class revert
		{
				private $str;
				public function __construct($str)
				{
					$this -> str = $str;
				}
				public function revert_characters()
				{
					$arr = explode(' ', $this->str);
					$count = count($arr);

					$revert_str = '';

					for ($i = 0; $i < $count; $i++)
					{
						$str_part = $arr[$i];

						$arr_rev_step = str_split($str_part, 1);

						$arr_fin_step = array_reverse($arr_rev_step);

						$revert_str .= ' ' . implode('', $arr_fin_step);
					}
					return $revert_str;
				}
				public function get_str()
				{
					return $this -> str;
				}
		}