<?php
$dalTablepersonal = array();
$dalTablepersonal["IdPersonal"] = array("type"=>3,"varname"=>"IdPersonal", "name" => "IdPersonal");
$dalTablepersonal["DocPersonal"] = array("type"=>200,"varname"=>"DocPersonal", "name" => "DocPersonal");
$dalTablepersonal["NomApe"] = array("type"=>200,"varname"=>"NomApe", "name" => "NomApe");
$dalTablepersonal["Telefono"] = array("type"=>200,"varname"=>"Telefono", "name" => "Telefono");
$dalTablepersonal["Correo"] = array("type"=>200,"varname"=>"Correo", "name" => "Correo");
$dalTablepersonal["Cargo"] = array("type"=>200,"varname"=>"Cargo", "name" => "Cargo");
$dalTablepersonal["IndEstado"] = array("type"=>200,"varname"=>"IndEstado", "name" => "IndEstado");
	$dalTablepersonal["IdPersonal"]["key"]=true;

$dal_info["Jardines_at_localhost__personal"] = &$dalTablepersonal;
?>