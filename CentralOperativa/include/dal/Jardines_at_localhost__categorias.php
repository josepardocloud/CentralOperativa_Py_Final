<?php
$dalTablecategorias = array();
$dalTablecategorias["IdCategoria"] = array("type"=>3,"varname"=>"IdCategoria", "name" => "IdCategoria");
$dalTablecategorias["Descripcion"] = array("type"=>200,"varname"=>"Descripcion", "name" => "Descripcion");
$dalTablecategorias["Abreviatura"] = array("type"=>200,"varname"=>"Abreviatura", "name" => "Abreviatura");
$dalTablecategorias["IndEstado"] = array("type"=>200,"varname"=>"IndEstado", "name" => "IndEstado");
	$dalTablecategorias["IdCategoria"]["key"]=true;

$dal_info["Jardines_at_localhost__categorias"] = &$dalTablecategorias;
?>