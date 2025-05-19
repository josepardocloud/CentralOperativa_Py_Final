<?php
$dalTableUsuario = array();
$dalTableUsuario["IdUsuario"] = array("type"=>3,"varname"=>"IdUsuario", "name" => "IdUsuario");
$dalTableUsuario["NomApe"] = array("type"=>200,"varname"=>"NomApe", "name" => "NomApe");
$dalTableUsuario["Usuario"] = array("type"=>200,"varname"=>"Usuario", "name" => "Usuario");
$dalTableUsuario["Clave"] = array("type"=>200,"varname"=>"Clave", "name" => "Clave");
$dalTableUsuario["Nivel"] = array("type"=>200,"varname"=>"Nivel", "name" => "Nivel");
	$dalTableUsuario["IdUsuario"]["key"]=true;

$dal_info["Jardines_at_localhost__Usuario"] = &$dalTableUsuario;
?>