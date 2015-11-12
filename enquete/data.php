<?php
error_reporting(0);
if(isset($_POST['message'])){
	$a = array(
		'Obrigado pelo seu voto e boa sorte!', 
		'O seu voto foi cadastrado!', 
		'Boa escolha! Seu voto foi enviado.', 
		'Voto enviado! Por que não continua votando?', 
		'Obrigado por participar! Vamos cuidar muito bem do seu voto.', 
	);
	$message = array_rand($a, 2);
	echo $a[$message[0]];
}
if(isset($_POST['data'])){
	$data = explode("||", $_POST['data']);
	$file = $data[0];
	$name = $data[1];

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

	$db = new JsonDB('data.json');
	
	$votoatual = $db->get($file,"votos");
	$db->add($file, ['name' => $name, 'votos' => $votoatual+1]);
	$db->save();
}