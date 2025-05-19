<?php
$tdatadespacho = array();
$tdatadespacho[".searchableFields"] = array();
$tdatadespacho[".ShortName"] = "despacho";
$tdatadespacho[".OwnerID"] = "";
$tdatadespacho[".OriginalTable"] = "detalleservicio";


$tdatadespacho[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadespacho[".originalPagesByType"] = $tdatadespacho[".pagesByType"];
$tdatadespacho[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadespacho[".originalPages"] = $tdatadespacho[".pages"];
$tdatadespacho[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadespacho[".originalDefaultPages"] = $tdatadespacho[".defaultPages"];

//	field labels
$fieldLabelsdespacho = array();
$fieldToolTipsdespacho = array();
$pageTitlesdespacho = array();
$placeHoldersdespacho = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdespacho["Spanish"] = array();
	$fieldToolTipsdespacho["Spanish"] = array();
	$placeHoldersdespacho["Spanish"] = array();
	$pageTitlesdespacho["Spanish"] = array();
	$fieldLabelsdespacho["Spanish"]["IdDetalleServicio"] = "Id Detalle Servicio";
	$fieldToolTipsdespacho["Spanish"]["IdDetalleServicio"] = "";
	$placeHoldersdespacho["Spanish"]["IdDetalleServicio"] = "";
	$fieldLabelsdespacho["Spanish"]["IdServicio"] = "Nro Contrato Servicio";
	$fieldToolTipsdespacho["Spanish"]["IdServicio"] = "";
	$placeHoldersdespacho["Spanish"]["IdServicio"] = "";
	$fieldLabelsdespacho["Spanish"]["FHDespacho"] = "Fecha y Hora Despacho";
	$fieldToolTipsdespacho["Spanish"]["FHDespacho"] = "";
	$placeHoldersdespacho["Spanish"]["FHDespacho"] = "";
	$fieldLabelsdespacho["Spanish"]["IdUbigueoDespacho"] = "Ubigueo";
	$fieldToolTipsdespacho["Spanish"]["IdUbigueoDespacho"] = "";
	$placeHoldersdespacho["Spanish"]["IdUbigueoDespacho"] = "";
	$fieldLabelsdespacho["Spanish"]["HoraMisa"] = "Hora Misa";
	$fieldToolTipsdespacho["Spanish"]["HoraMisa"] = "";
	$placeHoldersdespacho["Spanish"]["HoraMisa"] = "";
	$fieldLabelsdespacho["Spanish"]["TipoCremacion"] = "Tipo Cremación";
	$fieldToolTipsdespacho["Spanish"]["TipoCremacion"] = "";
	$placeHoldersdespacho["Spanish"]["TipoCremacion"] = "";
	$fieldLabelsdespacho["Spanish"]["IdPersonalDespacho"] = "Personal Despacho";
	$fieldToolTipsdespacho["Spanish"]["IdPersonalDespacho"] = "";
	$placeHoldersdespacho["Spanish"]["IdPersonalDespacho"] = "";
	$fieldLabelsdespacho["Spanish"]["IdVehiculoDespacho"] = "Vehiculo Despacho";
	$fieldToolTipsdespacho["Spanish"]["IdVehiculoDespacho"] = "";
	$placeHoldersdespacho["Spanish"]["IdVehiculoDespacho"] = "";
	if (count($fieldToolTipsdespacho["Spanish"]))
		$tdatadespacho[".isUseToolTips"] = true;
}


	$tdatadespacho[".NCSearch"] = true;



$tdatadespacho[".shortTableName"] = "despacho";
$tdatadespacho[".nSecOptions"] = 0;

$tdatadespacho[".mainTableOwnerID"] = "";
$tdatadespacho[".entityType"] = 1;
$tdatadespacho[".connId"] = "Jardines_at_localhost";


$tdatadespacho[".strOriginalTableName"] = "detalleservicio";

	



$tdatadespacho[".showAddInPopup"] = false;

$tdatadespacho[".showEditInPopup"] = false;

$tdatadespacho[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadespacho[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadespacho[".listAjax"] = false;
//	temporary
$tdatadespacho[".listAjax"] = false;

	$tdatadespacho[".audit"] = false;

	$tdatadespacho[".locking"] = false;


$pages = $tdatadespacho[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadespacho[".edit"] = true;
	$tdatadespacho[".afterEditAction"] = 1;
	$tdatadespacho[".closePopupAfterEdit"] = 1;
	$tdatadespacho[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadespacho[".add"] = true;
$tdatadespacho[".afterAddAction"] = 1;
$tdatadespacho[".closePopupAfterAdd"] = 1;
$tdatadespacho[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadespacho[".list"] = true;
}



$tdatadespacho[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadespacho[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadespacho[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadespacho[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadespacho[".printFriendly"] = true;
}



$tdatadespacho[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadespacho[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadespacho[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadespacho[".isUseAjaxSuggest"] = true;

$tdatadespacho[".rowHighlite"] = true;





$tdatadespacho[".ajaxCodeSnippetAdded"] = false;

$tdatadespacho[".buttonsAdded"] = false;

$tdatadespacho[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadespacho[".isUseTimeForSearch"] = true;


$tdatadespacho[".badgeColor"] = "4169e1";


$tdatadespacho[".allSearchFields"] = array();
$tdatadespacho[".filterFields"] = array();
$tdatadespacho[".requiredSearchFields"] = array();

$tdatadespacho[".googleLikeFields"] = array();
$tdatadespacho[".googleLikeFields"][] = "IdDetalleServicio";
$tdatadespacho[".googleLikeFields"][] = "IdServicio";
$tdatadespacho[".googleLikeFields"][] = "FHDespacho";
$tdatadespacho[".googleLikeFields"][] = "IdUbigueoDespacho";
$tdatadespacho[".googleLikeFields"][] = "HoraMisa";
$tdatadespacho[".googleLikeFields"][] = "TipoCremacion";
$tdatadespacho[".googleLikeFields"][] = "IdPersonalDespacho";
$tdatadespacho[".googleLikeFields"][] = "IdVehiculoDespacho";



$tdatadespacho[".tableType"] = "list";

$tdatadespacho[".printerPageOrientation"] = 0;
$tdatadespacho[".nPrinterPageScale"] = 100;

$tdatadespacho[".nPrinterSplitRecords"] = 40;

$tdatadespacho[".geocodingEnabled"] = false;










$tdatadespacho[".pageSize"] = 20;

$tdatadespacho[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadespacho[".strOrderBy"] = $tstrOrderBy;

$tdatadespacho[".orderindexes"] = array();


$tdatadespacho[".sqlHead"] = "SELECT IdDetalleServicio,  IdServicio,  FHDespacho,  IdUbigueoDespacho,  HoraMisa,  TipoCremacion,  IdPersonalDespacho,  IdVehiculoDespacho";
$tdatadespacho[".sqlFrom"] = "FROM detalleservicio";
$tdatadespacho[".sqlWhereExpr"] = "";
$tdatadespacho[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadespacho[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadespacho[".arrGroupsPerPage"] = $arrGPP;

$tdatadespacho[".highlightSearchResults"] = true;

$tableKeysdespacho = array();
$tableKeysdespacho[] = "IdDetalleServicio";
$tdatadespacho[".Keys"] = $tableKeysdespacho;


$tdatadespacho[".hideMobileList"] = array();




//	IdDetalleServicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdDetalleServicio";
	$fdata["GoodName"] = "IdDetalleServicio";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Despacho","IdDetalleServicio");
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


	$tdatadespacho["IdDetalleServicio"] = $fdata;
		$tdatadespacho[".searchableFields"][] = "IdDetalleServicio";
//	IdServicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IdServicio";
	$fdata["GoodName"] = "IdServicio";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Despacho","IdServicio");
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdServicio";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NroContrato";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatadespacho["IdServicio"] = $fdata;
		$tdatadespacho[".searchableFields"][] = "IdServicio";
//	FHDespacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FHDespacho";
	$fdata["GoodName"] = "FHDespacho";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Despacho","FHDespacho");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FHDespacho";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FHDespacho";

	
	
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


	$tdatadespacho["FHDespacho"] = $fdata;
		$tdatadespacho[".searchableFields"][] = "FHDespacho";
//	IdUbigueoDespacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IdUbigueoDespacho";
	$fdata["GoodName"] = "IdUbigueoDespacho";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Despacho","IdUbigueoDespacho");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdUbigueoDespacho";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdUbigueoDespacho";

	
	
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


	$tdatadespacho["IdUbigueoDespacho"] = $fdata;
		$tdatadespacho[".searchableFields"][] = "IdUbigueoDespacho";
//	HoraMisa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "HoraMisa";
	$fdata["GoodName"] = "HoraMisa";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Despacho","HoraMisa");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "HoraMisa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HoraMisa";

	
	
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

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 1);

	
	
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


	$tdatadespacho["HoraMisa"] = $fdata;
		$tdatadespacho[".searchableFields"][] = "HoraMisa";
//	TipoCremacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TipoCremacion";
	$fdata["GoodName"] = "TipoCremacion";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Despacho","TipoCremacion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TipoCremacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoCremacion";

	
	
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
	$edata["LookupValues"][] = "Directa";
	$edata["LookupValues"][] = "Conmemorativa";
	$edata["LookupValues"][] = "En nombre de la Ciencia";

	
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


	$tdatadespacho["TipoCremacion"] = $fdata;
		$tdatadespacho[".searchableFields"][] = "TipoCremacion";
//	IdPersonalDespacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "IdPersonalDespacho";
	$fdata["GoodName"] = "IdPersonalDespacho";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Despacho","IdPersonalDespacho");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdPersonalDespacho";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdPersonalDespacho";

	
	
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

				$edata["LookupWhere"] = "cargo= \"Director\"";


	
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


	$tdatadespacho["IdPersonalDespacho"] = $fdata;
		$tdatadespacho[".searchableFields"][] = "IdPersonalDespacho";
//	IdVehiculoDespacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "IdVehiculoDespacho";
	$fdata["GoodName"] = "IdVehiculoDespacho";
	$fdata["ownerTable"] = "detalleservicio";
	$fdata["Label"] = GetFieldLabel("Despacho","IdVehiculoDespacho");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdVehiculoDespacho";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdVehiculoDespacho";

	
	
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


	$tdatadespacho["IdVehiculoDespacho"] = $fdata;
		$tdatadespacho[".searchableFields"][] = "IdVehiculoDespacho";


$tables_data["Despacho"]=&$tdatadespacho;
$field_labels["Despacho"] = &$fieldLabelsdespacho;
$fieldToolTips["Despacho"] = &$fieldToolTipsdespacho;
$placeHolders["Despacho"] = &$placeHoldersdespacho;
$page_titles["Despacho"] = &$pageTitlesdespacho;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Despacho"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Despacho"] = array();



	
				$strOriginalDetailsTable="ubigeo";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ubigeo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ubigeo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Despacho"][0] = $masterParams;
				$masterTablesData["Despacho"][0]["masterKeys"] = array();
	$masterTablesData["Despacho"][0]["masterKeys"][]="IdUbigeo";
				$masterTablesData["Despacho"][0]["detailKeys"] = array();
	$masterTablesData["Despacho"][0]["detailKeys"][]="IdUbigueoDespacho";
		
	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Despacho"][1] = $masterParams;
				$masterTablesData["Despacho"][1]["masterKeys"] = array();
	$masterTablesData["Despacho"][1]["masterKeys"][]="IdPersonal";
				$masterTablesData["Despacho"][1]["detailKeys"] = array();
	$masterTablesData["Despacho"][1]["detailKeys"][]="IdPersonalDespacho";
		
	
				$strOriginalDetailsTable="vehiculos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vehiculos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vehiculos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Despacho"][2] = $masterParams;
				$masterTablesData["Despacho"][2]["masterKeys"] = array();
	$masterTablesData["Despacho"][2]["masterKeys"][]="IdVehiculo";
				$masterTablesData["Despacho"][2]["detailKeys"] = array();
	$masterTablesData["Despacho"][2]["detailKeys"][]="IdVehiculoDespacho";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_despacho()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdDetalleServicio,  IdServicio,  FHDespacho,  IdUbigueoDespacho,  HoraMisa,  TipoCremacion,  IdPersonalDespacho,  IdVehiculoDespacho";
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
	"m_srcTableName" => "Despacho"
));

$proto6["m_sql"] = "IdDetalleServicio";
$proto6["m_srcTableName"] = "Despacho";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IdServicio",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Despacho"
));

$proto8["m_sql"] = "IdServicio";
$proto8["m_srcTableName"] = "Despacho";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FHDespacho",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Despacho"
));

$proto10["m_sql"] = "FHDespacho";
$proto10["m_srcTableName"] = "Despacho";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IdUbigueoDespacho",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Despacho"
));

$proto12["m_sql"] = "IdUbigueoDespacho";
$proto12["m_srcTableName"] = "Despacho";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "HoraMisa",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Despacho"
));

$proto14["m_sql"] = "HoraMisa";
$proto14["m_srcTableName"] = "Despacho";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoCremacion",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Despacho"
));

$proto16["m_sql"] = "TipoCremacion";
$proto16["m_srcTableName"] = "Despacho";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "IdPersonalDespacho",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Despacho"
));

$proto18["m_sql"] = "IdPersonalDespacho";
$proto18["m_srcTableName"] = "Despacho";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "IdVehiculoDespacho",
	"m_strTable" => "detalleservicio",
	"m_srcTableName" => "Despacho"
));

$proto20["m_sql"] = "IdVehiculoDespacho";
$proto20["m_srcTableName"] = "Despacho";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "detalleservicio";
$proto23["m_srcTableName"] = "Despacho";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "IdDetalleServicio";
$proto23["m_columns"][] = "IdServicio";
$proto23["m_columns"][] = "FHRecojo";
$proto23["m_columns"][] = "IdSedeRecojo";
$proto23["m_columns"][] = "Lugar";
$proto23["m_columns"][] = "Turno";
$proto23["m_columns"][] = "IdUbigeoRecojo";
$proto23["m_columns"][] = "Instalacion";
$proto23["m_columns"][] = "Necropcia";
$proto23["m_columns"][] = "Camara";
$proto23["m_columns"][] = "Nivel";
$proto23["m_columns"][] = "IdPersonalRecojo";
$proto23["m_columns"][] = "IdVehiculoRecojo";
$proto23["m_columns"][] = "FHInstalacion";
$proto23["m_columns"][] = "IdAtaud";
$proto23["m_columns"][] = "IdUrna";
$proto23["m_columns"][] = "IdSedeInstalacion";
$proto23["m_columns"][] = "IdVelatorio";
$proto23["m_columns"][] = "IdUbigeoInstalacion";
$proto23["m_columns"][] = "TurnoInstalacion";
$proto23["m_columns"][] = "IdPersonalInstalacion";
$proto23["m_columns"][] = "IdVehiculoInstalacion";
$proto23["m_columns"][] = "FHDespacho";
$proto23["m_columns"][] = "IdUbigueoDespacho";
$proto23["m_columns"][] = "HoraMisa";
$proto23["m_columns"][] = "TipoCremacion";
$proto23["m_columns"][] = "IdPersonalDespacho";
$proto23["m_columns"][] = "IdVehiculoDespacho";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "detalleservicio";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Despacho";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Despacho";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_despacho = createSqlQuery_despacho();


	
		;

								

$tdatadespacho[".sqlquery"] = $queryData_despacho;



$tableEvents["Despacho"] = new eventsBase;
$tdatadespacho[".hasEvents"] = false;

?>