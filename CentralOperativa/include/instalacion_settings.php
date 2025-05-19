<?php
$tdatainstalacion = array();
$tdatainstalacion[".searchableFields"] = array();
$tdatainstalacion[".ShortName"] = "instalacion";
$tdatainstalacion[".OwnerID"] = "";
$tdatainstalacion[".OriginalTable"] = "detalleservicio";


$tdatainstalacion[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainstalacion[".originalPagesByType"] = $tdatainstalacion[".pagesByType"];
$tdatainstalacion[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainstalacion[".originalPages"] = $tdatainstalacion[".pages"];
$tdatainstalacion[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainstalacion[".originalDefaultPages"] = $tdatainstalacion[".defaultPages"];

//	field labels
$fieldLabelsinstalacion = array();
$fieldToolTipsinstalacion = array();
$pageTitlesinstalacion = array();
$placeHoldersinstalacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinstalacion["Spanish"] = array();
	$fieldToolTipsinstalacion["Spanish"] = array();
	$placeHoldersinstalacion["Spanish"] = array();
	$pageTitlesinstalacion["Spanish"] = array();
	$fieldLabelsinstalacion["Spanish"]["IdDetalleServicio"] = "Id Detalle Servicio";
	$fieldToolTipsinstalacion["Spanish"]["IdDetalleServicio"] = "";
	$placeHoldersinstalacion["Spanish"]["IdDetalleServicio"] = "";
	$fieldLabelsinstalacion["Spanish"]["IdServicio"] = "Nro Contrato Servicio";
	$fieldToolTipsinstalacion["Spanish"]["IdServicio"] = "";
	$placeHoldersinstalacion["Spanish"]["IdServicio"] = "";
	$fieldLabelsinstalacion["Spanish"]["FHInstalacion"] = "Fecha y Hora de Instalación";
	$fieldToolTipsinstalacion["Spanish"]["FHInstalacion"] = "";
	$placeHoldersinstalacion["Spanish"]["FHInstalacion"] = "";
	$fieldLabelsinstalacion["Spanish"]["IdAtaud"] = "Ataud";
	$fieldToolTipsinstalacion["Spanish"]["IdAtaud"] = "";
	$placeHoldersinstalacion["Spanish"]["IdAtaud"] = "";
	$fieldLabelsinstalacion["Spanish"]["IdUrna"] = "Urna";
	$fieldToolTipsinstalacion["Spanish"]["IdUrna"] = "";
	$placeHoldersinstalacion["Spanish"]["IdUrna"] = "";
	$fieldLabelsinstalacion["Spanish"]["IdSedeInstalacion"] = "Sede";
	$fieldToolTipsinstalacion["Spanish"]["IdSedeInstalacion"] = "";
	$placeHoldersinstalacion["Spanish"]["IdSedeInstalacion"] = "";
	$fieldLabelsinstalacion["Spanish"]["IdVelatorio"] = "Velatorio";
	$fieldToolTipsinstalacion["Spanish"]["IdVelatorio"] = "";
	$placeHoldersinstalacion["Spanish"]["IdVelatorio"] = "";
	$fieldLabelsinstalacion["Spanish"]["IdUbigeoInstalacion"] = "Ubigeo";
	$fieldToolTipsinstalacion["Spanish"]["IdUbigeoInstalacion"] = "";
	$placeHoldersinstalacion["Spanish"]["IdUbigeoInstalacion"] = "";
	$fieldLabelsinstalacion["Spanish"]["TurnoInstalacion"] = "Turno";
	$fieldToolTipsinstalacion["Spanish"]["TurnoInstalacion"] = "";
	$placeHoldersinstalacion["Spanish"]["TurnoInstalacion"] = "";
	$fieldLabelsinstalacion["Spanish"]["IdPersonalInstalacion"] = "Personal Instalación";
	$fieldToolTipsinstalacion["Spanish"]["IdPersonalInstalacion"] = "";
	$placeHoldersinstalacion["Spanish"]["IdPersonalInstalacion"] = "";
	$fieldLabelsinstalacion["Spanish"]["IdVehiculoInstalacion"] = "Vehiculo Instalación";
	$fieldToolTipsinstalacion["Spanish"]["IdVehiculoInstalacion"] = "";
	$placeHoldersinstalacion["Spanish"]["IdVehiculoInstalacion"] = "";
	if (count($fieldToolTipsinstalacion["Spanish"]))
		$tdatainstalacion[".isUseToolTips"] = true;
}


	$tdatainstalacion[".NCSearch"] = true;



$tdatainstalacion[".shortTableName"] = "instalacion";
$tdatainstalacion[".nSecOptions"] = 0;

$tdatainstalacion[".mainTableOwnerID"] = "";
$tdatainstalacion[".entityType"] = 1;
$tdatainstalacion[".connId"] = "Jardines_at_localhost";


$tdatainstalacion[".strOriginalTableName"] = "detalleservicio";

	



$tdatainstalacion[".showAddInPopup"] = false;

$tdatainstalacion[".showEditInPopup"] = false;

$tdatainstalacion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainstalacion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainstalacion[".listAjax"] = false;
//	temporary
$tdatainstalacion[".listAjax"] = false;

	$tdatainstalacion[".audit"] = false;

	$tdatainstalacion[".locking"] = false;


$pages = $tdatainstalacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainstalacion[".edit"] = true;
	$tdatainstalacion[".afterEditAction"] = 1;
	$tdatainstalacion[".closePopupAfterEdit"] = 1;
	$tdatainstalacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainstalacion[".add"] = true;
$tdatainstalacion[".afterAddAction"] = 1;
$tdatainstalacion[".closePopupAfterAdd"] = 1;
$tdatainstalacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainstalacion[".list"] = true;
}



$tdatainstalacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainstalacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainstalacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainstalacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainstalacion[".printFriendly"] = true;
}



$tdatainstalacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainstalacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainstalacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainstalacion[".isUseAjaxSuggest"] = true;

$tdatainstalacion[".rowHighlite"] = true;





$tdatainstalacion[".ajaxCodeSnippetAdded"] = false;

$tdatainstalacion[".buttonsAdded"] = false;

$tdatainstalacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainstalacion[".isUseTimeForSearch"] = false;


$tdatainstalacion[".badgeColor"] = "6da5c8";


$tdatainstalacion[".allSearchFields"] = array();
$tdatainstalacion[".filterFields"] = array();
$tdatainstalacion[".requiredSearchFields"] = array();

$tdatainstalacion[".googleLikeFields"] = array();
$tdatainstalacion[".googleLikeFields"][] = "IdDetalleServicio";
$tdatainstalacion[".googleLikeFields"][] = "IdServicio";
$tdatainstalacion[".googleLikeFields"][] = "FHInstalacion";
$tdatainstalacion[".googleLikeFields"][] = "IdAtaud";
$tdatainstalacion[".googleLikeFields"][] = "IdUrna";
$tdatainstalacion[".googleLikeFields"][] = "IdSedeInstalacion";
$tdatainstalacion[".googleLikeFields"][] = "IdVelatorio";
$tdatainstalacion[".googleLikeFields"][] = "IdUbigeoInstalacion";
$tdatainstalacion[".googleLikeFields"][] = "TurnoInstalacion";
$tdatainstalacion[".googleLikeFields"][] = "IdPersonalInstalacion";
$tdatainstalacion[".googleLikeFields"][] = "IdVehiculoInstalacion";



$tdatainstalacion[".tableType"] = "list";

$tdatainstalacion[".printerPageOrientation"] = 0;
$tdatainstalacion[".nPrinterPageScale"] = 100;

$tdatainstalacion[".nPrinterSplitRecords"] = 40;

$tdatainstalacion[".geocodingEnabled"] = false;










$tdatainstalacion[".pageSize"] = 20;

$tdatainstalacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainstalacion[".strOrderBy"] = $tstrOrderBy;

$tdatainstalacion[".orderindexes"] = array();


$tdatainstalacion[".sqlHead"] = "SELECT IdDetalleServicio,  IdServicio,  FHInstalacion,  IdAtaud,  IdUrna,  IdSedeInstalacion,  IdVelatorio,  IdUbigeoInstalacion,  TurnoInstalacion,  IdPersonalInstalacion,  IdVehiculoInstalacion";
$tdatainstalacion[".sqlFrom"] = "FROM detalleservicio";
$tdatainstalacion[".sqlWhereExpr"] = "";
$tdatainstalacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainstalacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainstalacion[".arrGroupsPerPage"] = $arrGPP;

$tdatainstalacion[".highlightSearchResults"] = true;

$tableKeysinstalacion = array();
$tableKeysinstalacion[] = "IdDetalleServicio";
$tdatainstalacion[".Keys"] = $tableKeysinstalacion;


$tdatainstalacion[".hideMobileList"] = array();




//	IdDetalleServicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdDetalleServicio";
	$fdata["GoodName"] = "IdDetalleServicio";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Instalacion","IdDetalleServicio");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdDetalleServicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdDetalleServicio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainstalacion["IdDetalleServicio"] = $fdata;
		$tdatainstalacion[".searchableFields"][] = "IdDetalleServicio";
//	IdServicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IdServicio";
	$fdata["GoodName"] = "IdServicio";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Instalacion","IdServicio");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdServicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdServicio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "servicio";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "IdServicio";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NroContrato";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainstalacion["IdServicio"] = $fdata;
		$tdatainstalacion[".searchableFields"][] = "IdServicio";
//	FHInstalacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FHInstalacion";
	$fdata["GoodName"] = "FHInstalacion";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Instalacion","FHInstalacion");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FHInstalacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FHInstalacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainstalacion["FHInstalacion"] = $fdata;
		$tdatainstalacion[".searchableFields"][] = "FHInstalacion";
//	IdAtaud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IdAtaud";
	$fdata["GoodName"] = "IdAtaud";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Instalacion","IdAtaud");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdAtaud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdAtaud";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ataud";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "IdAtaud";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Modelo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainstalacion["IdAtaud"] = $fdata;
		$tdatainstalacion[".searchableFields"][] = "IdAtaud";
//	IdUrna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdUrna";
	$fdata["GoodName"] = "IdUrna";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Instalacion","IdUrna");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdUrna";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdUrna";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "urna";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "IdUrna";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TipoUrna";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainstalacion["IdUrna"] = $fdata;
		$tdatainstalacion[".searchableFields"][] = "IdUrna";
//	IdSedeInstalacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "IdSedeInstalacion";
	$fdata["GoodName"] = "IdSedeInstalacion";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Instalacion","IdSedeInstalacion");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdSedeInstalacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdSedeInstalacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "sede";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "IdSede";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Sede";

				$edata["LookupWhere"] = "IndEstado = \"A\"";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainstalacion["IdSedeInstalacion"] = $fdata;
		$tdatainstalacion[".searchableFields"][] = "IdSedeInstalacion";
//	IdVelatorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "IdVelatorio";
	$fdata["GoodName"] = "IdVelatorio";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Instalacion","IdVelatorio");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdVelatorio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdVelatorio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "velatrorio";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "IdVelatorio";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainstalacion["IdVelatorio"] = $fdata;
		$tdatainstalacion[".searchableFields"][] = "IdVelatorio";
//	IdUbigeoInstalacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "IdUbigeoInstalacion";
	$fdata["GoodName"] = "IdUbigeoInstalacion";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Instalacion","IdUbigeoInstalacion");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdUbigeoInstalacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdUbigeoInstalacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ubigeo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "IdUbigeo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Distrito";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainstalacion["IdUbigeoInstalacion"] = $fdata;
		$tdatainstalacion[".searchableFields"][] = "IdUbigeoInstalacion";
//	TurnoInstalacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TurnoInstalacion";
	$fdata["GoodName"] = "TurnoInstalacion";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Instalacion","TurnoInstalacion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TurnoInstalacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TurnoInstalacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Día";
	$edata["LookupValues"][] = "Noche";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainstalacion["TurnoInstalacion"] = $fdata;
		$tdatainstalacion[".searchableFields"][] = "TurnoInstalacion";
//	IdPersonalInstalacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "IdPersonalInstalacion";
	$fdata["GoodName"] = "IdPersonalInstalacion";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Instalacion","IdPersonalInstalacion");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdPersonalInstalacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdPersonalInstalacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "personal";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "IdPersonal";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NomApe";

				$edata["LookupWhere"] = "cargo = \"Director\"";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainstalacion["IdPersonalInstalacion"] = $fdata;
		$tdatainstalacion[".searchableFields"][] = "IdPersonalInstalacion";
//	IdVehiculoInstalacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "IdVehiculoInstalacion";
	$fdata["GoodName"] = "IdVehiculoInstalacion";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Instalacion","IdVehiculoInstalacion");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdVehiculoInstalacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdVehiculoInstalacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vehiculos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "IdVehiculo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Placa";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainstalacion["IdVehiculoInstalacion"] = $fdata;
		$tdatainstalacion[".searchableFields"][] = "IdVehiculoInstalacion";


$tables_data["Instalacion"]=&$tdatainstalacion;
$field_labels["Instalacion"] = &$fieldLabelsinstalacion;
$fieldToolTips["Instalacion"] = &$fieldToolTipsinstalacion;
$placeHolders["Instalacion"] = &$placeHoldersinstalacion;
$page_titles["Instalacion"] = &$pageTitlesinstalacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Instalacion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Instalacion"] = array();



	
				$strOriginalDetailsTable="ataud";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ataud";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ataud";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Instalacion"][0] = $masterParams;
				$masterTablesData["Instalacion"][0]["masterKeys"] = array();
	$masterTablesData["Instalacion"][0]["masterKeys"][]="IdAtaud";
				$masterTablesData["Instalacion"][0]["detailKeys"] = array();
	$masterTablesData["Instalacion"][0]["detailKeys"][]="IdAtaud";
		
	
				$strOriginalDetailsTable="urna";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="urna";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "urna";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Instalacion"][1] = $masterParams;
				$masterTablesData["Instalacion"][1]["masterKeys"] = array();
	$masterTablesData["Instalacion"][1]["masterKeys"][]="IdUrna";
				$masterTablesData["Instalacion"][1]["detailKeys"] = array();
	$masterTablesData["Instalacion"][1]["detailKeys"][]="IdUrna";
		
	
				$strOriginalDetailsTable="sede";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="sede";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sede";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Instalacion"][2] = $masterParams;
				$masterTablesData["Instalacion"][2]["masterKeys"] = array();
	$masterTablesData["Instalacion"][2]["masterKeys"][]="IdSede";
				$masterTablesData["Instalacion"][2]["detailKeys"] = array();
	$masterTablesData["Instalacion"][2]["detailKeys"][]="IdSedeInstalacion";
		
	
				$strOriginalDetailsTable="velatrorio";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="velatrorio";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "velatrorio";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Instalacion"][3] = $masterParams;
				$masterTablesData["Instalacion"][3]["masterKeys"] = array();
	$masterTablesData["Instalacion"][3]["masterKeys"][]="IdVelatorio";
				$masterTablesData["Instalacion"][3]["detailKeys"] = array();
	$masterTablesData["Instalacion"][3]["detailKeys"][]="IdVelatorio";
		
	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Instalacion"][4] = $masterParams;
				$masterTablesData["Instalacion"][4]["masterKeys"] = array();
	$masterTablesData["Instalacion"][4]["masterKeys"][]="IdPersonal";
				$masterTablesData["Instalacion"][4]["detailKeys"] = array();
	$masterTablesData["Instalacion"][4]["detailKeys"][]="IdPersonalInstalacion";
		
	
				$strOriginalDetailsTable="vehiculos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vehiculos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vehiculos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Instalacion"][5] = $masterParams;
				$masterTablesData["Instalacion"][5]["masterKeys"] = array();
	$masterTablesData["Instalacion"][5]["masterKeys"][]="IdVehiculo";
				$masterTablesData["Instalacion"][5]["detailKeys"] = array();
	$masterTablesData["Instalacion"][5]["detailKeys"][]="IdVehiculoInstalacion";
		
	
				$strOriginalDetailsTable="ubigeo";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ubigeo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ubigeo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Instalacion"][6] = $masterParams;
				$masterTablesData["Instalacion"][6]["masterKeys"] = array();
	$masterTablesData["Instalacion"][6]["masterKeys"][]="IdUbigeo";
				$masterTablesData["Instalacion"][6]["detailKeys"] = array();
	$masterTablesData["Instalacion"][6]["detailKeys"][]="IdUbigeoInstalacion";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_instalacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdDetalleServicio,  IdServicio,  FHInstalacion,  IdAtaud,  IdUrna,  IdSedeInstalacion,  IdVelatorio,  IdUbigeoInstalacion,  TurnoInstalacion,  IdPersonalInstalacion,  IdVehiculoInstalacion";
$proto0["m_strFrom"] = "FROM detalleservicio";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "IdDetalleServicio",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Instalacion"
));

$proto6["m_sql"] = "IdDetalleServicio";
$proto6["m_srcTableName"] = "Instalacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IdServicio",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Instalacion"
));

$proto8["m_sql"] = "IdServicio";
$proto8["m_srcTableName"] = "Instalacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FHInstalacion",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Instalacion"
));

$proto10["m_sql"] = "FHInstalacion";
$proto10["m_srcTableName"] = "Instalacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IdAtaud",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Instalacion"
));

$proto12["m_sql"] = "IdAtaud";
$proto12["m_srcTableName"] = "Instalacion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdUrna",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Instalacion"
));

$proto14["m_sql"] = "IdUrna";
$proto14["m_srcTableName"] = "Instalacion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "IdSedeInstalacion",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Instalacion"
));

$proto16["m_sql"] = "IdSedeInstalacion";
$proto16["m_srcTableName"] = "Instalacion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "IdVelatorio",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Instalacion"
));

$proto18["m_sql"] = "IdVelatorio";
$proto18["m_srcTableName"] = "Instalacion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "IdUbigeoInstalacion",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Instalacion"
));

$proto20["m_sql"] = "IdUbigeoInstalacion";
$proto20["m_srcTableName"] = "Instalacion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TurnoInstalacion",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Instalacion"
));

$proto22["m_sql"] = "TurnoInstalacion";
$proto22["m_srcTableName"] = "Instalacion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "IdPersonalInstalacion",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Instalacion"
));

$proto24["m_sql"] = "IdPersonalInstalacion";
$proto24["m_srcTableName"] = "Instalacion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "IdVehiculoInstalacion",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Instalacion"
));

$proto26["m_sql"] = "IdVehiculoInstalacion";
$proto26["m_srcTableName"] = "Instalacion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "detalleservicio";
$proto29["m_srcTableName"] = "Instalacion";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "IdDetalleServicio";
$proto29["m_columns"][] = "IdServicio";
$proto29["m_columns"][] = "FHRecojo";
$proto29["m_columns"][] = "IdSedeRecojo";
$proto29["m_columns"][] = "Lugar";
$proto29["m_columns"][] = "Turno";
$proto29["m_columns"][] = "IdUbigeoRecojo";
$proto29["m_columns"][] = "Instalacion";
$proto29["m_columns"][] = "Necropcia";
$proto29["m_columns"][] = "Camara";
$proto29["m_columns"][] = "Nivel";
$proto29["m_columns"][] = "IdPersonalRecojo";
$proto29["m_columns"][] = "IdVehiculoRecojo";
$proto29["m_columns"][] = "FHInstalacion";
$proto29["m_columns"][] = "IdAtaud";
$proto29["m_columns"][] = "IdUrna";
$proto29["m_columns"][] = "IdSedeInstalacion";
$proto29["m_columns"][] = "IdVelatorio";
$proto29["m_columns"][] = "IdUbigeoInstalacion";
$proto29["m_columns"][] = "TurnoInstalacion";
$proto29["m_columns"][] = "IdPersonalInstalacion";
$proto29["m_columns"][] = "IdVehiculoInstalacion";
$proto29["m_columns"][] = "FHDespacho";
$proto29["m_columns"][] = "IdUbigueoDespacho";
$proto29["m_columns"][] = "HoraMisa";
$proto29["m_columns"][] = "TipoCremacion";
$proto29["m_columns"][] = "IdPersonalDespacho";
$proto29["m_columns"][] = "IdVehiculoDespacho";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "detalleservicio";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "Instalacion";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Instalacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_instalacion = createSqlQuery_instalacion();


	
		;

											

$tdatainstalacion[".sqlquery"] = $queryData_instalacion;



$tableEvents["Instalacion"] = new eventsBase;
$tdatainstalacion[".hasEvents"] = false;

?>