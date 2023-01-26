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

		$this->class = str_replace("\\", "/", $class);

		echo "<pre>", var_dump($this->rootPath(), $this->getClassName()), "</pre>";
	}

	public function rootPath(){

		$rootPath = strstr(__DIR__, $this->rootFolder, true).$this->rootFolder."/";

		return $rootPath;
	}

	public function getClassName(){

		$className = substr(strrchr($this->class, "/"),1);

		return $className;
	}

}