<?php
$dalTablevelatrorio = array();
$dalTablevelatrorio["IdVelatorio"] = array("type"=>3,"varname"=>"IdVelatorio", "name" => "IdVelatorio");
$dalTablevelatrorio["Nombre"] = array("type"=>200,"varname"=>"Nombre", "name" => "Nombre");
$dalTablevelatrorio["Direccion"] = array("type"=>200,"varname"=>"Direccion", "name" => "Direccion");
$dalTablevelatrorio["IdUbigeo"] = array("type"=>200,"varname"=>"IdUbigeo", "name" => "IdUbigeo");
$dalTablevelatrorio["IndEstado"] = array("type"=>200,"varname"=>"IndEstado", "name" => "IndEstado");
	$dalTablevelatrorio["IdVelatorio"]["key"]=true;

$dal_info["Jardines_at_localhost__velatrorio"] = &$dalTablevelatrorio;
?>