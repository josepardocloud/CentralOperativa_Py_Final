<?php
$dalTableurna = array();
$dalTableurna["IdUrna"] = array("type"=>3,"varname"=>"IdUrna", "name" => "IdUrna");
$dalTableurna["TipoUrna"] = array("type"=>200,"varname"=>"TipoUrna", "name" => "TipoUrna");
$dalTableurna["Precio"] = array("type"=>14,"varname"=>"Precio", "name" => "Precio");
$dalTableurna["IndEstado"] = array("type"=>200,"varname"=>"IndEstado", "name" => "IndEstado");
	$dalTableurna["IdUrna"]["key"]=true;

$dal_info["Jardines_at_localhost__urna"] = &$dalTableurna;
?>