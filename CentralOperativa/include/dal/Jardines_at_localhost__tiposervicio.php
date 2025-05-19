<?php
$dalTabletiposervicio = array();
$dalTabletiposervicio["IdTipoServicio"] = array("type"=>3,"varname"=>"IdTipoServicio", "name" => "IdTipoServicio");
$dalTabletiposervicio["Descripcion"] = array("type"=>200,"varname"=>"Descripcion", "name" => "Descripcion");
$dalTabletiposervicio["IndEstado"] = array("type"=>200,"varname"=>"IndEstado", "name" => "IndEstado");
	$dalTabletiposervicio["IdTipoServicio"]["key"]=true;

$dal_info["Jardines_at_localhost__tiposervicio"] = &$dalTabletiposervicio;
?>