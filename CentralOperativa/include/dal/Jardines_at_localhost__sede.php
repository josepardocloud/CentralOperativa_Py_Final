<?php
$dalTablesede = array();
$dalTablesede["IdSede"] = array("type"=>3,"varname"=>"IdSede", "name" => "IdSede");
$dalTablesede["Sede"] = array("type"=>200,"varname"=>"Sede", "name" => "Sede");
$dalTablesede["Direccion"] = array("type"=>200,"varname"=>"Direccion", "name" => "Direccion");
$dalTablesede["IndEstado"] = array("type"=>200,"varname"=>"IndEstado", "name" => "IndEstado");
$dalTablesede["Ubigeo"] = array("type"=>200,"varname"=>"Ubigeo", "name" => "Ubigeo");
	$dalTablesede["IdSede"]["key"]=true;

$dal_info["Jardines_at_localhost__sede"] = &$dalTablesede;
?>