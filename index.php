<?php
		require_once 'revert.php';

		$str = new revert('Привет! Я - человек.');
		echo $str -> revert_characters();