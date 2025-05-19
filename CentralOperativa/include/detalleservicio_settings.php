<?php
$tdatadetalleservicio = array();
$tdatadetalleservicio[".searchableFields"] = array();
$tdatadetalleservicio[".ShortName"] = "detalleservicio";
$tdatadetalleservicio[".OwnerID"] = "";
$tdatadetalleservicio[".OriginalTable"] = "detalleservicio";


$tdatadetalleservicio[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadetalleservicio[".originalPagesByType"] = $tdatadetalleservicio[".pagesByType"];
$tdatadetalleservicio[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadetalleservicio[".originalPages"] = $tdatadetalleservicio[".pages"];
$tdatadetalleservicio[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadetalleservicio[".originalDefaultPages"] = $tdatadetalleservicio[".defaultPages"];

//	field labels
$fieldLabelsdetalleservicio = array();
$fieldToolTipsdetalleservicio = array();
$pageTitlesdetalleservicio = array();
$placeHoldersdetalleservicio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdetalleservicio["Spanish"] = array();
	$fieldToolTipsdetalleservicio["Spanish"] = array();
	$placeHoldersdetalleservicio["Spanish"] = array();
	$pageTitlesdetalleservicio["Spanish"] = array();
	$fieldLabelsdetalleservicio["Spanish"]["IdDetalleServicio"] = "Id Detalle Servicio";
	$fieldToolTipsdetalleservicio["Spanish"]["IdDetalleServicio"] = "";
	$placeHoldersdetalleservicio["Spanish"]["IdDetalleServicio"] = "";
	$fieldLabelsdetalleservicio["Spanish"]["IdServicio"] = "Nro Contrato Servicio";
	$fieldToolTipsdetalleservicio["Spanish"]["IdServicio"] = "";
	$placeHoldersdetalleservicio["Spanish"]["IdServicio"] = "";
	$fieldLabelsdetalleservicio["Spanish"]["FHRecojo"] = "Fecha y Hora de Recojo";
	$fieldToolTipsdetalleservicio["Spanish"]["FHRecojo"] = "";
	$placeHoldersdetalleservicio["Spanish"]["FHRecojo"] = "";
	$fieldLabelsdetalleservicio["Spanish"]["IdSedeRecojo"] = "Sede Recojo";
	$fieldToolTipsdetalleservicio["Spanish"]["IdSedeRecojo"] = "";
	$placeHoldersdetalleservicio["Spanish"]["IdSedeRecojo"] = "";
	$fieldLabelsdetalleservicio["Spanish"]["Lugar"] = "Lugar";
	$fieldToolTipsdetalleservicio["Spanish"]["Lugar"] = "";
	$placeHoldersdetalleservicio["Spanish"]["Lugar"] = "";
	$fieldLabelsdetalleservicio["Spanish"]["Turno"] = "Turno";
	$fieldToolTipsdetalleservicio["Spanish"]["Turno"] = "";
	$placeHoldersdetalleservicio["Spanish"]["Turno"] = "";
	$fieldLabelsdetalleservicio["Spanish"]["IdUbigeoRecojo"] = "Ubigeo";
	$fieldToolTipsdetalleservicio["Spanish"]["IdUbigeoRecojo"] = "";
	$placeHoldersdetalleservicio["Spanish"]["IdUbigeoRecojo"] = "";
	$fieldLabelsdetalleservicio["Spanish"]["Instalacion"] = "Instalación";
	$fieldToolTipsdetalleservicio["Spanish"]["Instalacion"] = "";
	$placeHoldersdetalleservicio["Spanish"]["Instalacion"] = "";
	$fieldLabelsdetalleservicio["Spanish"]["Necropcia"] = "Necropcia";
	$fieldToolTipsdetalleservicio["Spanish"]["Necropcia"] = "";
	$placeHoldersdetalleservicio["Spanish"]["Necropcia"] = "";
	$fieldLabelsdetalleservicio["Spanish"]["Camara"] = "Camara";
	$fieldToolTipsdetalleservicio["Spanish"]["Camara"] = "";
	$placeHoldersdetalleservicio["Spanish"]["Camara"] = "";
	$fieldLabelsdetalleservicio["Spanish"]["Nivel"] = "Nivel";
	$fieldToolTipsdetalleservicio["Spanish"]["Nivel"] = "";
	$placeHoldersdetalleservicio["Spanish"]["Nivel"] = "";
	$fieldLabelsdetalleservicio["Spanish"]["IdPersonalRecojo"] = "Personal Recojo";
	$fieldToolTipsdetalleservicio["Spanish"]["IdPersonalRecojo"] = "";
	$placeHoldersdetalleservicio["Spanish"]["IdPersonalRecojo"] = "";
	$fieldLabelsdetalleservicio["Spanish"]["IdVehiculoRecojo"] = "Vehiculo Recojo";
	$fieldToolTipsdetalleservicio["Spanish"]["IdVehiculoRecojo"] = "";
	$placeHoldersdetalleservicio["Spanish"]["IdVehiculoRecojo"] = "";
	if (count($fieldToolTipsdetalleservicio["Spanish"]))
		$tdatadetalleservicio[".isUseToolTips"] = true;
}


	$tdatadetalleservicio[".NCSearch"] = true;



$tdatadetalleservicio[".shortTableName"] = "detalleservicio";
$tdatadetalleservicio[".nSecOptions"] = 0;

$tdatadetalleservicio[".mainTableOwnerID"] = "";
$tdatadetalleservicio[".entityType"] = 0;
$tdatadetalleservicio[".connId"] = "Jardines_at_localhost";


$tdatadetalleservicio[".strOriginalTableName"] = "detalleservicio";

	



$tdatadetalleservicio[".showAddInPopup"] = false;

$tdatadetalleservicio[".showEditInPopup"] = false;

$tdatadetalleservicio[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadetalleservicio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadetalleservicio[".listAjax"] = false;
//	temporary
$tdatadetalleservicio[".listAjax"] = false;

	$tdatadetalleservicio[".audit"] = false;

	$tdatadetalleservicio[".locking"] = false;


$pages = $tdatadetalleservicio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadetalleservicio[".edit"] = true;
	$tdatadetalleservicio[".afterEditAction"] = 1;
	$tdatadetalleservicio[".closePopupAfterEdit"] = 1;
	$tdatadetalleservicio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadetalleservicio[".add"] = true;
$tdatadetalleservicio[".afterAddAction"] = 1;
$tdatadetalleservicio[".closePopupAfterAdd"] = 1;
$tdatadetalleservicio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadetalleservicio[".list"] = true;
}



$tdatadetalleservicio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadetalleservicio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadetalleservicio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadetalleservicio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadetalleservicio[".printFriendly"] = true;
}



$tdatadetalleservicio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadetalleservicio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadetalleservicio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadetalleservicio[".isUseAjaxSuggest"] = true;

$tdatadetalleservicio[".rowHighlite"] = true;





$tdatadetalleservicio[".ajaxCodeSnippetAdded"] = false;

$tdatadetalleservicio[".buttonsAdded"] = false;

$tdatadetalleservicio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetalleservicio[".isUseTimeForSearch"] = false;


$tdatadetalleservicio[".badgeColor"] = "edca00";


$tdatadetalleservicio[".allSearchFields"] = array();
$tdatadetalleservicio[".filterFields"] = array();
$tdatadetalleservicio[".requiredSearchFields"] = array();

$tdatadetalleservicio[".googleLikeFields"] = array();
$tdatadetalleservicio[".googleLikeFields"][] = "IdDetalleServicio";
$tdatadetalleservicio[".googleLikeFields"][] = "IdServicio";
$tdatadetalleservicio[".googleLikeFields"][] = "FHRecojo";
$tdatadetalleservicio[".googleLikeFields"][] = "IdSedeRecojo";
$tdatadetalleservicio[".googleLikeFields"][] = "Lugar";
$tdatadetalleservicio[".googleLikeFields"][] = "Turno";
$tdatadetalleservicio[".googleLikeFields"][] = "IdUbigeoRecojo";
$tdatadetalleservicio[".googleLikeFields"][] = "Instalacion";
$tdatadetalleservicio[".googleLikeFields"][] = "Necropcia";
$tdatadetalleservicio[".googleLikeFields"][] = "Camara";
$tdatadetalleservicio[".googleLikeFields"][] = "Nivel";
$tdatadetalleservicio[".googleLikeFields"][] = "IdPersonalRecojo";
$tdatadetalleservicio[".googleLikeFields"][] = "IdVehiculoRecojo";



$tdatadetalleservicio[".tableType"] = "list";

$tdatadetalleservicio[".printerPageOrientation"] = 0;
$tdatadetalleservicio[".nPrinterPageScale"] = 100;

$tdatadetalleservicio[".nPrinterSplitRecords"] = 40;

$tdatadetalleservicio[".geocodingEnabled"] = false;










$tdatadetalleservicio[".pageSize"] = 20;

$tdatadetalleservicio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadetalleservicio[".strOrderBy"] = $tstrOrderBy;

$tdatadetalleservicio[".orderindexes"] = array();


$tdatadetalleservicio[".sqlHead"] = "SELECT IdDetalleServicio,  IdServicio,  FHRecojo,  IdSedeRecojo,  Lugar,  Turno,  IdUbigeoRecojo,  Instalacion,  Necropcia,  Camara,  Nivel,  IdPersonalRecojo,  IdVehiculoRecojo";
$tdatadetalleservicio[".sqlFrom"] = "FROM detalleservicio";
$tdatadetalleservicio[".sqlWhereExpr"] = "";
$tdatadetalleservicio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetalleservicio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetalleservicio[".arrGroupsPerPage"] = $arrGPP;

$tdatadetalleservicio[".highlightSearchResults"] = true;

$tableKeysdetalleservicio = array();
$tableKeysdetalleservicio[] = "IdDetalleServicio";
$tdatadetalleservicio[".Keys"] = $tableKeysdetalleservicio;


$tdatadetalleservicio[".hideMobileList"] = array();




//	IdDetalleServicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdDetalleServicio";
	$fdata["GoodName"] = "IdDetalleServicio";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("detalleservicio","IdDetalleServicio");
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


	$tdatadetalleservicio["IdDetalleServicio"] = $fdata;
		$tdatadetalleservicio[".searchableFields"][] = "IdDetalleServicio";
//	IdServicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IdServicio";
	$fdata["GoodName"] = "IdServicio";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("detalleservicio","IdServicio");
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


	$tdatadetalleservicio["IdServicio"] = $fdata;
		$tdatadetalleservicio[".searchableFields"][] = "IdServicio";
//	FHRecojo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FHRecojo";
	$fdata["GoodName"] = "FHRecojo";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("detalleservicio","FHRecojo");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FHRecojo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FHRecojo";

	
	
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


	$tdatadetalleservicio["FHRecojo"] = $fdata;
		$tdatadetalleservicio[".searchableFields"][] = "FHRecojo";
//	IdSedeRecojo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IdSedeRecojo";
	$fdata["GoodName"] = "IdSedeRecojo";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("detalleservicio","IdSedeRecojo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdSedeRecojo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdSedeRecojo";

	
	
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
	$edata["DisplayField"] = "Direccion";

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


	$tdatadetalleservicio["IdSedeRecojo"] = $fdata;
		$tdatadetalleservicio[".searchableFields"][] = "IdSedeRecojo";
//	Lugar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Lugar";
	$fdata["GoodName"] = "Lugar";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("detalleservicio","Lugar");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Lugar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lugar";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

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


	$tdatadetalleservicio["Lugar"] = $fdata;
		$tdatadetalleservicio[".searchableFields"][] = "Lugar";
//	Turno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Turno";
	$fdata["GoodName"] = "Turno";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("detalleservicio","Turno");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Turno";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Turno";

	
	
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


	$tdatadetalleservicio["Turno"] = $fdata;
		$tdatadetalleservicio[".searchableFields"][] = "Turno";
//	IdUbigeoRecojo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "IdUbigeoRecojo";
	$fdata["GoodName"] = "IdUbigeoRecojo";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("detalleservicio","IdUbigeoRecojo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdUbigeoRecojo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdUbigeoRecojo";

	
	
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


	$tdatadetalleservicio["IdUbigeoRecojo"] = $fdata;
		$tdatadetalleservicio[".searchableFields"][] = "IdUbigeoRecojo";
//	Instalacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Instalacion";
	$fdata["GoodName"] = "Instalacion";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("detalleservicio","Instalacion");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "Instalacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Instalacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatadetalleservicio["Instalacion"] = $fdata;
		$tdatadetalleservicio[".searchableFields"][] = "Instalacion";
//	Necropcia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Necropcia";
	$fdata["GoodName"] = "Necropcia";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("detalleservicio","Necropcia");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "Necropcia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Necropcia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatadetalleservicio["Necropcia"] = $fdata;
		$tdatadetalleservicio[".searchableFields"][] = "Necropcia";
//	Camara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Camara";
	$fdata["GoodName"] = "Camara";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("detalleservicio","Camara");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "Camara";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Camara";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatadetalleservicio["Camara"] = $fdata;
		$tdatadetalleservicio[".searchableFields"][] = "Camara";
//	Nivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Nivel";
	$fdata["GoodName"] = "Nivel";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("detalleservicio","Nivel");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nivel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nivel";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

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


	$tdatadetalleservicio["Nivel"] = $fdata;
		$tdatadetalleservicio[".searchableFields"][] = "Nivel";
//	IdPersonalRecojo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "IdPersonalRecojo";
	$fdata["GoodName"] = "IdPersonalRecojo";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("detalleservicio","IdPersonalRecojo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdPersonalRecojo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdPersonalRecojo";

	
	
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

				$edata["LookupWhere"] = "cargo = \"Director\" and IndEstado = \"A\"";


	
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


	$tdatadetalleservicio["IdPersonalRecojo"] = $fdata;
		$tdatadetalleservicio[".searchableFields"][] = "IdPersonalRecojo";
//	IdVehiculoRecojo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "IdVehiculoRecojo";
	$fdata["GoodName"] = "IdVehiculoRecojo";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("detalleservicio","IdVehiculoRecojo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdVehiculoRecojo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdVehiculoRecojo";

	
	
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


	$tdatadetalleservicio["IdVehiculoRecojo"] = $fdata;
		$tdatadetalleservicio[".searchableFields"][] = "IdVehiculoRecojo";


$tables_data["detalleservicio"]=&$tdatadetalleservicio;
$field_labels["detalleservicio"] = &$fieldLabelsdetalleservicio;
$fieldToolTips["detalleservicio"] = &$fieldToolTipsdetalleservicio;
$placeHolders["detalleservicio"] = &$placeHoldersdetalleservicio;
$page_titles["detalleservicio"] = &$pageTitlesdetalleservicio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["detalleservicio"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["detalleservicio"] = array();



	
				$strOriginalDetailsTable="servicio";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="servicio";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "servicio";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalleservicio"][0] = $masterParams;
				$masterTablesData["detalleservicio"][0]["masterKeys"] = array();
	$masterTablesData["detalleservicio"][0]["masterKeys"][]="IdServicio";
				$masterTablesData["detalleservicio"][0]["detailKeys"] = array();
	$masterTablesData["detalleservicio"][0]["detailKeys"][]="IdServicio";
		
	
				$strOriginalDetailsTable="sede";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="sede";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sede";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalleservicio"][1] = $masterParams;
				$masterTablesData["detalleservicio"][1]["masterKeys"] = array();
	$masterTablesData["detalleservicio"][1]["masterKeys"][]="IdSede";
				$masterTablesData["detalleservicio"][1]["detailKeys"] = array();
	$masterTablesData["detalleservicio"][1]["detailKeys"][]="IdSedeRecojo";
		
	
				$strOriginalDetailsTable="ubigeo";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ubigeo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ubigeo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalleservicio"][2] = $masterParams;
				$masterTablesData["detalleservicio"][2]["masterKeys"] = array();
	$masterTablesData["detalleservicio"][2]["masterKeys"][]="IdUbigeo";
				$masterTablesData["detalleservicio"][2]["detailKeys"] = array();
	$masterTablesData["detalleservicio"][2]["detailKeys"][]="IdUbigeoRecojo";
		
	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalleservicio"][3] = $masterParams;
				$masterTablesData["detalleservicio"][3]["masterKeys"] = array();
	$masterTablesData["detalleservicio"][3]["masterKeys"][]="IdPersonal";
				$masterTablesData["detalleservicio"][3]["detailKeys"] = array();
	$masterTablesData["detalleservicio"][3]["detailKeys"][]="IdPersonalRecojo";
		
	
				$strOriginalDetailsTable="vehiculos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vehiculos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vehiculos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalleservicio"][4] = $masterParams;
				$masterTablesData["detalleservicio"][4]["masterKeys"] = array();
	$masterTablesData["detalleservicio"][4]["masterKeys"][]="IdVehiculo";
				$masterTablesData["detalleservicio"][4]["detailKeys"] = array();
	$masterTablesData["detalleservicio"][4]["detailKeys"][]="IdVehiculoRecojo";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_detalleservicio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdDetalleServicio,  IdServicio,  FHRecojo,  IdSedeRecojo,  Lugar,  Turno,  IdUbigeoRecojo,  Instalacion,  Necropcia,  Camara,  Nivel,  IdPersonalRecojo,  IdVehiculoRecojo";
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
	"m_srcTableName" => "detalleservicio"
));

$proto6["m_sql"] = "IdDetalleServicio";
$proto6["m_srcTableName"] = "detalleservicio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IdServicio",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "detalleservicio"
));

$proto8["m_sql"] = "IdServicio";
$proto8["m_srcTableName"] = "detalleservicio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FHRecojo",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "detalleservicio"
));

$proto10["m_sql"] = "FHRecojo";
$proto10["m_srcTableName"] = "detalleservicio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IdSedeRecojo",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "detalleservicio"
));

$proto12["m_sql"] = "IdSedeRecojo";
$proto12["m_srcTableName"] = "detalleservicio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Lugar",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "detalleservicio"
));

$proto14["m_sql"] = "Lugar";
$proto14["m_srcTableName"] = "detalleservicio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Turno",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "detalleservicio"
));

$proto16["m_sql"] = "Turno";
$proto16["m_srcTableName"] = "detalleservicio";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "IdUbigeoRecojo",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "detalleservicio"
));

$proto18["m_sql"] = "IdUbigeoRecojo";
$proto18["m_srcTableName"] = "detalleservicio";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Instalacion",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "detalleservicio"
));

$proto20["m_sql"] = "Instalacion";
$proto20["m_srcTableName"] = "detalleservicio";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Necropcia",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "detalleservicio"
));

$proto22["m_sql"] = "Necropcia";
$proto22["m_srcTableName"] = "detalleservicio";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Camara",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "detalleservicio"
));

$proto24["m_sql"] = "Camara";
$proto24["m_srcTableName"] = "detalleservicio";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Nivel",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "detalleservicio"
));

$proto26["m_sql"] = "Nivel";
$proto26["m_srcTableName"] = "detalleservicio";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "IdPersonalRecojo",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "detalleservicio"
));

$proto28["m_sql"] = "IdPersonalRecojo";
$proto28["m_srcTableName"] = "detalleservicio";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "IdVehiculoRecojo",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "detalleservicio"
));

$proto30["m_sql"] = "IdVehiculoRecojo";
$proto30["m_srcTableName"] = "detalleservicio";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "detalleservicio";
$proto33["m_srcTableName"] = "detalleservicio";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "IdDetalleServicio";
$proto33["m_columns"][] = "IdServicio";
$proto33["m_columns"][] = "FHRecojo";
$proto33["m_columns"][] = "IdSedeRecojo";
$proto33["m_columns"][] = "Lugar";
$proto33["m_columns"][] = "Turno";
$proto33["m_columns"][] = "IdUbigeoRecojo";
$proto33["m_columns"][] = "Instalacion";
$proto33["m_columns"][] = "Necropcia";
$proto33["m_columns"][] = "Camara";
$proto33["m_columns"][] = "Nivel";
$proto33["m_columns"][] = "IdPersonalRecojo";
$proto33["m_columns"][] = "IdVehiculoRecojo";
$proto33["m_columns"][] = "FHInstalacion";
$proto33["m_columns"][] = "IdAtaud";
$proto33["m_columns"][] = "IdUrna";
$proto33["m_columns"][] = "IdSedeInstalacion";
$proto33["m_columns"][] = "IdVelatorio";
$proto33["m_columns"][] = "IdUbigeoInstalacion";
$proto33["m_columns"][] = "TurnoInstalacion";
$proto33["m_columns"][] = "IdPersonalInstalacion";
$proto33["m_columns"][] = "IdVehiculoInstalacion";
$proto33["m_columns"][] = "FHDespacho";
$proto33["m_columns"][] = "IdUbigueoDespacho";
$proto33["m_columns"][] = "HoraMisa";
$proto33["m_columns"][] = "TipoCremacion";
$proto33["m_columns"][] = "IdPersonalDespacho";
$proto33["m_columns"][] = "IdVehiculoDespacho";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "detalleservicio";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "detalleservicio";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="detalleservicio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detalleservicio = createSqlQuery_detalleservicio();


	
		;

													

$tdatadetalleservicio[".sqlquery"] = $queryData_detalleservicio;



$tableEvents["detalleservicio"] = new eventsBase;
$tdatadetalleservicio[".hasEvents"] = false;

?>