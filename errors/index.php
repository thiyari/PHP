<?php
	//error_reporting(0); // Show No Errors
	//error_reporting(-1); // Show All Errors
	//error_reporting(E_ALL); // Show ALl Errors
	//error_reporting(E_ALL & ~E_NOTICE); // Show All Errors
	//ini_set('display_errors','on');
	//echo "test";
	//echo $test;
	//myfunc();
	//echo 'Hi There'
	//include 'test.php';
	
	//trigger_error('This is a fatal error',E_USER_ERROR);
	//trigger_error('This is a notice',E_USER_NOTICE);  
	//trigger_error('This is a warning',E_USER_WARNING);  

	//echo 'Hello World';




	//$foo = [0,1,2,3,4,5];
	//echo $foo;
	//print_r($foo);
/*	class foo{
		private $name;

		function __construct($name){
			$this->name = $name;
		}
	}
	$foo = new Foo('Brad');
	$values = [1, true, 'foo', [0,1,2],null, $foo];
	foreach($values as $val){
		var_dump($val);
	}

	//var_dump($foo);

	*/







/*	function console_log($data){
		echo '<script>';
		echo 'console.log('.json_encode($data).')';
		echo '</script>';
	}

	//$foo = 'bar';
	$foo = [0,1,2,3,4];
	console_log($foo);

*/







/*
	function a($txt){
		b('Brad');
	}

	function b($txt){
		c('John');
	}
	
	function c($txt){
		var_dump(debug_backtrace());
	}

	a('Tom');

*/







/*
	function numCheck($number){
		if($number < 5){
			throw new Exception('Number must be above 5...');
		}
		return true;
	}

	try{
		//numCheck(6);
		numCheck(2);
		echo 'Your number is above 5';
	}
	
	catch(Exception $e){
		echo 'ERROR: '.$e->getFile().'(Line '.$e->getLine().');'.$e->getMessage();
	}

	echo 'Hello World';

	*/

	//phpinfo();
	//phpinfo(INFO_GENERAL);
	//phpinfo(INFO_CONFIGURATION);
	//phpinfo(INFO_MODULES);
	//phpinfo(INFO_VARIABLES);
	phpinfo(INFO_ALL);