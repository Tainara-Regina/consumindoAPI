<?php 
class climaTempoSP {

public $key = KEY_API;
public $cidade = "limeira";
public $estado = "SP";



public function __construct($cidade=null,$key=null,$estado=null){
	if (!is_null($key)) {$this->key = $key;};
if (!is_null($cidade)) {$this->cidade = $cidade;};
if (!is_null($estado)) {$this->estado = $estado;};

}


 public	function requestClimaTempoSP(){
$url = "https://api.hgbrasil.com/weather?key=".$this->key."&city_name=".$this->cidade.",".$this->estado;
 $require = json_decode(@file_get_contents($url),true);


$resultado =
 array(
 	'cidade'      => $require['results']['city'],
	'diaSemana'   => $require['results']['forecast'][0]['weekday'],
	'mesAno'      => $require['results']['date'],
	'horario'     => $require['results']['time'],
	'temperatura' => $require['results']['temp'],
	'temp_descricao' => $require['results']['description']
	 );
return $resultado;

	}
}

?>