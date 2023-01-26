<?php

namespace Lib\Core;

class Autoloader{
	
	private $rootFolder;
	private $rootPath;
	private $class;

	public function __construct($rootFolder){

		$this->rootFolder = $rootFolder;
	}

	public function load($class){

		$this->class = $class;

		echo "<pre>", var_dump($this->rootPath()), "</pre>";
	}

	public function rootPath(){

		$rootPath = strstr(__DIR__, $this->rootFolder, true).$this->rootFolder."/";

		return $rootPath;
	}

}