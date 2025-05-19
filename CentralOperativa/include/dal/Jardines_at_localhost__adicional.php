<?php
$dalTableadicional = array();
$dalTableadicional["IdAdicional"] = array("type"=>3,"varname"=>"IdAdicional", "name" => "IdAdicional");
$dalTableadicional["descricion"] = array("type"=>200,"varname"=>"descricion", "name" => "descricion");
$dalTableadicional["IdCategoria"] = array("type"=>3,"varname"=>"IdCategoria", "name" => "IdCategoria");
$dalTableadicional["Precio"] = array("type"=>14,"varname"=>"Precio", "name" => "Precio");
$dalTableadicional["IndEstado"] = array("type"=>200,"varname"=>"IndEstado", "name" => "IndEstado");
	$dalTableadicional["IdAdicional"]["key"]=true;

$dal_info["Jardines_at_localhost__adicional"] = &$dalTableadicional;
?>