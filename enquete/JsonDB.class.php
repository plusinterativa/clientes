<?php
class JsonDB {
	protected $filename;
	protected $json;
	
	function __construct($filename){
		$this->filename = $filename;	
		$this->json = json_decode(file_get_contents($filename), true);	
	}

	function add($key, $value){
		$this->json[$key] = $value;
	}

	function get($key,$par1){
		return $this->json[$key][$par1];
	}

	function save(){
		return file_put_contents($this->filename, json_encode($this->json));
	}
}