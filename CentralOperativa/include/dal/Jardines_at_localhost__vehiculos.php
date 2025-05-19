<?php
$dalTablevehiculos = array();
$dalTablevehiculos["IdVehiculo"] = array("type"=>3,"varname"=>"IdVehiculo", "name" => "IdVehiculo");
$dalTablevehiculos["Marca"] = array("type"=>200,"varname"=>"Marca", "name" => "Marca");
$dalTablevehiculos["Modelo"] = array("type"=>200,"varname"=>"Modelo", "name" => "Modelo");
$dalTablevehiculos["Color"] = array("type"=>200,"varname"=>"Color", "name" => "Color");
$dalTablevehiculos["Placa"] = array("type"=>200,"varname"=>"Placa", "name" => "Placa");
$dalTablevehiculos["CategoriaVehiculo"] = array("type"=>200,"varname"=>"CategoriaVehiculo", "name" => "CategoriaVehiculo");
$dalTablevehiculos["IndEstado"] = array("type"=>200,"varname"=>"IndEstado", "name" => "IndEstado");
	$dalTablevehiculos["IdVehiculo"]["key"]=true;

$dal_info["Jardines_at_localhost__vehiculos"] = &$dalTablevehiculos;
?>