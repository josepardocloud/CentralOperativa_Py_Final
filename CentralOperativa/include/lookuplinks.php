<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["ubigeo"] ) ) {
			$lookupTableLinks["ubigeo"] = array();
		}
		if( !isset( $lookupTableLinks["ubigeo"]["sede.Ubigeo"] )) {
			$lookupTableLinks["ubigeo"]["sede.Ubigeo"] = array();
		}
		$lookupTableLinks["ubigeo"]["sede.Ubigeo"]["edit"] = array("table" => "sede", "field" => "Ubigeo", "page" => "edit");
		if( !isset( $lookupTableLinks["tiposervicio"] ) ) {
			$lookupTableLinks["tiposervicio"] = array();
		}
		if( !isset( $lookupTableLinks["tiposervicio"]["ataud.IdTipoServicio"] )) {
			$lookupTableLinks["tiposervicio"]["ataud.IdTipoServicio"] = array();
		}
		$lookupTableLinks["tiposervicio"]["ataud.IdTipoServicio"]["edit"] = array("table" => "ataud", "field" => "IdTipoServicio", "page" => "edit");
		if( !isset( $lookupTableLinks["ubigeo"] ) ) {
			$lookupTableLinks["ubigeo"] = array();
		}
		if( !isset( $lookupTableLinks["ubigeo"]["velatrorio.IdUbigeo"] )) {
			$lookupTableLinks["ubigeo"]["velatrorio.IdUbigeo"] = array();
		}
		$lookupTableLinks["ubigeo"]["velatrorio.IdUbigeo"]["edit"] = array("table" => "velatrorio", "field" => "IdUbigeo", "page" => "edit");
		if( !isset( $lookupTableLinks["categorias"] ) ) {
			$lookupTableLinks["categorias"] = array();
		}
		if( !isset( $lookupTableLinks["categorias"]["adicional.IdCategoria"] )) {
			$lookupTableLinks["categorias"]["adicional.IdCategoria"] = array();
		}
		$lookupTableLinks["categorias"]["adicional.IdCategoria"]["edit"] = array("table" => "adicional", "field" => "IdCategoria", "page" => "edit");
		if( !isset( $lookupTableLinks["servicio"] ) ) {
			$lookupTableLinks["servicio"] = array();
		}
		if( !isset( $lookupTableLinks["servicio"]["servicioadicional.IdServicio"] )) {
			$lookupTableLinks["servicio"]["servicioadicional.IdServicio"] = array();
		}
		$lookupTableLinks["servicio"]["servicioadicional.IdServicio"]["edit"] = array("table" => "servicioadicional", "field" => "IdServicio", "page" => "edit");
		if( !isset( $lookupTableLinks["adicional"] ) ) {
			$lookupTableLinks["adicional"] = array();
		}
		if( !isset( $lookupTableLinks["adicional"]["servicioadicional.IdAdicional"] )) {
			$lookupTableLinks["adicional"]["servicioadicional.IdAdicional"] = array();
		}
		$lookupTableLinks["adicional"]["servicioadicional.IdAdicional"]["edit"] = array("table" => "servicioadicional", "field" => "IdAdicional", "page" => "edit");
		if( !isset( $lookupTableLinks["tiposervicio"] ) ) {
			$lookupTableLinks["tiposervicio"] = array();
		}
		if( !isset( $lookupTableLinks["tiposervicio"]["servicio.IdTipoServicio"] )) {
			$lookupTableLinks["tiposervicio"]["servicio.IdTipoServicio"] = array();
		}
		$lookupTableLinks["tiposervicio"]["servicio.IdTipoServicio"]["edit"] = array("table" => "servicio", "field" => "IdTipoServicio", "page" => "edit");
		if( !isset( $lookupTableLinks["causamuerte"] ) ) {
			$lookupTableLinks["causamuerte"] = array();
		}
		if( !isset( $lookupTableLinks["causamuerte"]["servicio.IdCausa"] )) {
			$lookupTableLinks["causamuerte"]["servicio.IdCausa"] = array();
		}
		$lookupTableLinks["causamuerte"]["servicio.IdCausa"]["edit"] = array("table" => "servicio", "field" => "IdCausa", "page" => "edit");
		if( !isset( $lookupTableLinks["servicio"] ) ) {
			$lookupTableLinks["servicio"] = array();
		}
		if( !isset( $lookupTableLinks["servicio"]["detalleservicio.IdServicio"] )) {
			$lookupTableLinks["servicio"]["detalleservicio.IdServicio"] = array();
		}
		$lookupTableLinks["servicio"]["detalleservicio.IdServicio"]["edit"] = array("table" => "detalleservicio", "field" => "IdServicio", "page" => "edit");
		if( !isset( $lookupTableLinks["sede"] ) ) {
			$lookupTableLinks["sede"] = array();
		}
		if( !isset( $lookupTableLinks["sede"]["detalleservicio.IdSedeRecojo"] )) {
			$lookupTableLinks["sede"]["detalleservicio.IdSedeRecojo"] = array();
		}
		$lookupTableLinks["sede"]["detalleservicio.IdSedeRecojo"]["edit"] = array("table" => "detalleservicio", "field" => "IdSedeRecojo", "page" => "edit");
		if( !isset( $lookupTableLinks["ubigeo"] ) ) {
			$lookupTableLinks["ubigeo"] = array();
		}
		if( !isset( $lookupTableLinks["ubigeo"]["detalleservicio.IdUbigeoRecojo"] )) {
			$lookupTableLinks["ubigeo"]["detalleservicio.IdUbigeoRecojo"] = array();
		}
		$lookupTableLinks["ubigeo"]["detalleservicio.IdUbigeoRecojo"]["edit"] = array("table" => "detalleservicio", "field" => "IdUbigeoRecojo", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["detalleservicio.IdPersonalRecojo"] )) {
			$lookupTableLinks["personal"]["detalleservicio.IdPersonalRecojo"] = array();
		}
		$lookupTableLinks["personal"]["detalleservicio.IdPersonalRecojo"]["edit"] = array("table" => "detalleservicio", "field" => "IdPersonalRecojo", "page" => "edit");
		if( !isset( $lookupTableLinks["vehiculos"] ) ) {
			$lookupTableLinks["vehiculos"] = array();
		}
		if( !isset( $lookupTableLinks["vehiculos"]["detalleservicio.IdVehiculoRecojo"] )) {
			$lookupTableLinks["vehiculos"]["detalleservicio.IdVehiculoRecojo"] = array();
		}
		$lookupTableLinks["vehiculos"]["detalleservicio.IdVehiculoRecojo"]["edit"] = array("table" => "detalleservicio", "field" => "IdVehiculoRecojo", "page" => "edit");
		if( !isset( $lookupTableLinks["servicio"] ) ) {
			$lookupTableLinks["servicio"] = array();
		}
		if( !isset( $lookupTableLinks["servicio"]["instalacion.IdServicio"] )) {
			$lookupTableLinks["servicio"]["instalacion.IdServicio"] = array();
		}
		$lookupTableLinks["servicio"]["instalacion.IdServicio"]["edit"] = array("table" => "Instalacion", "field" => "IdServicio", "page" => "edit");
		if( !isset( $lookupTableLinks["ataud"] ) ) {
			$lookupTableLinks["ataud"] = array();
		}
		if( !isset( $lookupTableLinks["ataud"]["instalacion.IdAtaud"] )) {
			$lookupTableLinks["ataud"]["instalacion.IdAtaud"] = array();
		}
		$lookupTableLinks["ataud"]["instalacion.IdAtaud"]["edit"] = array("table" => "Instalacion", "field" => "IdAtaud", "page" => "edit");
		if( !isset( $lookupTableLinks["urna"] ) ) {
			$lookupTableLinks["urna"] = array();
		}
		if( !isset( $lookupTableLinks["urna"]["instalacion.IdUrna"] )) {
			$lookupTableLinks["urna"]["instalacion.IdUrna"] = array();
		}
		$lookupTableLinks["urna"]["instalacion.IdUrna"]["edit"] = array("table" => "Instalacion", "field" => "IdUrna", "page" => "edit");
		if( !isset( $lookupTableLinks["sede"] ) ) {
			$lookupTableLinks["sede"] = array();
		}
		if( !isset( $lookupTableLinks["sede"]["instalacion.IdSedeInstalacion"] )) {
			$lookupTableLinks["sede"]["instalacion.IdSedeInstalacion"] = array();
		}
		$lookupTableLinks["sede"]["instalacion.IdSedeInstalacion"]["edit"] = array("table" => "Instalacion", "field" => "IdSedeInstalacion", "page" => "edit");
		if( !isset( $lookupTableLinks["velatrorio"] ) ) {
			$lookupTableLinks["velatrorio"] = array();
		}
		if( !isset( $lookupTableLinks["velatrorio"]["instalacion.IdVelatorio"] )) {
			$lookupTableLinks["velatrorio"]["instalacion.IdVelatorio"] = array();
		}
		$lookupTableLinks["velatrorio"]["instalacion.IdVelatorio"]["edit"] = array("table" => "Instalacion", "field" => "IdVelatorio", "page" => "edit");
		if( !isset( $lookupTableLinks["ubigeo"] ) ) {
			$lookupTableLinks["ubigeo"] = array();
		}
		if( !isset( $lookupTableLinks["ubigeo"]["instalacion.IdUbigeoInstalacion"] )) {
			$lookupTableLinks["ubigeo"]["instalacion.IdUbigeoInstalacion"] = array();
		}
		$lookupTableLinks["ubigeo"]["instalacion.IdUbigeoInstalacion"]["edit"] = array("table" => "Instalacion", "field" => "IdUbigeoInstalacion", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["instalacion.IdPersonalInstalacion"] )) {
			$lookupTableLinks["personal"]["instalacion.IdPersonalInstalacion"] = array();
		}
		$lookupTableLinks["personal"]["instalacion.IdPersonalInstalacion"]["edit"] = array("table" => "Instalacion", "field" => "IdPersonalInstalacion", "page" => "edit");
		if( !isset( $lookupTableLinks["vehiculos"] ) ) {
			$lookupTableLinks["vehiculos"] = array();
		}
		if( !isset( $lookupTableLinks["vehiculos"]["instalacion.IdVehiculoInstalacion"] )) {
			$lookupTableLinks["vehiculos"]["instalacion.IdVehiculoInstalacion"] = array();
		}
		$lookupTableLinks["vehiculos"]["instalacion.IdVehiculoInstalacion"]["edit"] = array("table" => "Instalacion", "field" => "IdVehiculoInstalacion", "page" => "edit");
		if( !isset( $lookupTableLinks["servicio"] ) ) {
			$lookupTableLinks["servicio"] = array();
		}
		if( !isset( $lookupTableLinks["servicio"]["despacho.IdServicio"] )) {
			$lookupTableLinks["servicio"]["despacho.IdServicio"] = array();
		}
		$lookupTableLinks["servicio"]["despacho.IdServicio"]["edit"] = array("table" => "Despacho", "field" => "IdServicio", "page" => "edit");
		if( !isset( $lookupTableLinks["ubigeo"] ) ) {
			$lookupTableLinks["ubigeo"] = array();
		}
		if( !isset( $lookupTableLinks["ubigeo"]["despacho.IdUbigueoDespacho"] )) {
			$lookupTableLinks["ubigeo"]["despacho.IdUbigueoDespacho"] = array();
		}
		$lookupTableLinks["ubigeo"]["despacho.IdUbigueoDespacho"]["edit"] = array("table" => "Despacho", "field" => "IdUbigueoDespacho", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["despacho.IdPersonalDespacho"] )) {
			$lookupTableLinks["personal"]["despacho.IdPersonalDespacho"] = array();
		}
		$lookupTableLinks["personal"]["despacho.IdPersonalDespacho"]["edit"] = array("table" => "Despacho", "field" => "IdPersonalDespacho", "page" => "edit");
		if( !isset( $lookupTableLinks["vehiculos"] ) ) {
			$lookupTableLinks["vehiculos"] = array();
		}
		if( !isset( $lookupTableLinks["vehiculos"]["despacho.IdVehiculoDespacho"] )) {
			$lookupTableLinks["vehiculos"]["despacho.IdVehiculoDespacho"] = array();
		}
		$lookupTableLinks["vehiculos"]["despacho.IdVehiculoDespacho"]["edit"] = array("table" => "Despacho", "field" => "IdVehiculoDespacho", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["usuario.NomApe"] )) {
			$lookupTableLinks["personal"]["usuario.NomApe"] = array();
		}
		$lookupTableLinks["personal"]["usuario.NomApe"]["edit"] = array("table" => "usuario", "field" => "NomApe", "page" => "edit");
}

?>