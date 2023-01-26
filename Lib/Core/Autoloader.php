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
	}

}