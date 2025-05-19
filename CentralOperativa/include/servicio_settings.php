<?php
$tdataservicio = array();
$tdataservicio[".searchableFields"] = array();
$tdataservicio[".ShortName"] = "servicio";
$tdataservicio[".OwnerID"] = "";
$tdataservicio[".OriginalTable"] = "servicio";


$tdataservicio[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataservicio[".originalPagesByType"] = $tdataservicio[".pagesByType"];
$tdataservicio[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataservicio[".originalPages"] = $tdataservicio[".pages"];
$tdataservicio[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataservicio[".originalDefaultPages"] = $tdataservicio[".defaultPages"];

//	field labels
$fieldLabelsservicio = array();
$fieldToolTipsservicio = array();
$pageTitlesservicio = array();
$placeHoldersservicio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsservicio["Spanish"] = array();
	$fieldToolTipsservicio["Spanish"] = array();
	$placeHoldersservicio["Spanish"] = array();
	$pageTitlesservicio["Spanish"] = array();
	$fieldLabelsservicio["Spanish"]["IdServicio"] = "Id Servicio";
	$fieldToolTipsservicio["Spanish"]["IdServicio"] = "";
	$placeHoldersservicio["Spanish"]["IdServicio"] = "";
	$fieldLabelsservicio["Spanish"]["NroContrato"] = "Nro Contrato";
	$fieldToolTipsservicio["Spanish"]["NroContrato"] = "";
	$placeHoldersservicio["Spanish"]["NroContrato"] = "";
	$fieldLabelsservicio["Spanish"]["FechaContrato"] = "Fecha Contrato";
	$fieldToolTipsservicio["Spanish"]["FechaContrato"] = "";
	$placeHoldersservicio["Spanish"]["FechaContrato"] = "";
	$fieldLabelsservicio["Spanish"]["ServicioClase"] = "Servicio Clase";
	$fieldToolTipsservicio["Spanish"]["ServicioClase"] = "";
	$placeHoldersservicio["Spanish"]["ServicioClase"] = "";
	$fieldLabelsservicio["Spanish"]["IdTipoServicio"] = "Tipo Servicio";
	$fieldToolTipsservicio["Spanish"]["IdTipoServicio"] = "";
	$placeHoldersservicio["Spanish"]["IdTipoServicio"] = "";
	$fieldLabelsservicio["Spanish"]["DocTitular"] = "Doc Titular (DNI o CE)";
	$fieldToolTipsservicio["Spanish"]["DocTitular"] = "";
	$placeHoldersservicio["Spanish"]["DocTitular"] = "";
	$fieldLabelsservicio["Spanish"]["Titular"] = "Titular";
	$fieldToolTipsservicio["Spanish"]["Titular"] = "";
	$placeHoldersservicio["Spanish"]["Titular"] = "";
	$fieldLabelsservicio["Spanish"]["Observacion"] = "Observacion";
	$fieldToolTipsservicio["Spanish"]["Observacion"] = "";
	$placeHoldersservicio["Spanish"]["Observacion"] = "";
	$fieldLabelsservicio["Spanish"]["DocFallecido"] = "Doc Fallecido (DNI o CE)";
	$fieldToolTipsservicio["Spanish"]["DocFallecido"] = "";
	$placeHoldersservicio["Spanish"]["DocFallecido"] = "";
	$fieldLabelsservicio["Spanish"]["Fallecido"] = "Fallecido";
	$fieldToolTipsservicio["Spanish"]["Fallecido"] = "";
	$placeHoldersservicio["Spanish"]["Fallecido"] = "";
	$fieldLabelsservicio["Spanish"]["Sexo"] = "Sexo";
	$fieldToolTipsservicio["Spanish"]["Sexo"] = "";
	$placeHoldersservicio["Spanish"]["Sexo"] = "";
	$fieldLabelsservicio["Spanish"]["FHFallecimiento"] = "Fecha y Hora Fallecimiento";
	$fieldToolTipsservicio["Spanish"]["FHFallecimiento"] = "";
	$placeHoldersservicio["Spanish"]["FHFallecimiento"] = "";
	$fieldLabelsservicio["Spanish"]["IdCausa"] = "Causa de Muerte";
	$fieldToolTipsservicio["Spanish"]["IdCausa"] = "";
	$placeHoldersservicio["Spanish"]["IdCausa"] = "";
	$fieldLabelsservicio["Spanish"]["Recojo"] = "Recojo";
	$fieldToolTipsservicio["Spanish"]["Recojo"] = "";
	$placeHoldersservicio["Spanish"]["Recojo"] = "";
	$fieldLabelsservicio["Spanish"]["Instalacion"] = "Instalación";
	$fieldToolTipsservicio["Spanish"]["Instalacion"] = "";
	$placeHoldersservicio["Spanish"]["Instalacion"] = "";
	$fieldLabelsservicio["Spanish"]["Despacho"] = "Despacho";
	$fieldToolTipsservicio["Spanish"]["Despacho"] = "";
	$placeHoldersservicio["Spanish"]["Despacho"] = "";
	if (count($fieldToolTipsservicio["Spanish"]))
		$tdataservicio[".isUseToolTips"] = true;
}


	$tdataservicio[".NCSearch"] = true;



$tdataservicio[".shortTableName"] = "servicio";
$tdataservicio[".nSecOptions"] = 0;

$tdataservicio[".mainTableOwnerID"] = "";
$tdataservicio[".entityType"] = 0;
$tdataservicio[".connId"] = "Jardines_at_localhost";


$tdataservicio[".strOriginalTableName"] = "servicio";

	



$tdataservicio[".showAddInPopup"] = false;

$tdataservicio[".showEditInPopup"] = false;

$tdataservicio[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataservicio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataservicio[".listAjax"] = false;
//	temporary
$tdataservicio[".listAjax"] = false;

	$tdataservicio[".audit"] = false;

	$tdataservicio[".locking"] = false;


$pages = $tdataservicio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataservicio[".edit"] = true;
	$tdataservicio[".afterEditAction"] = 1;
	$tdataservicio[".closePopupAfterEdit"] = 1;
	$tdataservicio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataservicio[".add"] = true;
$tdataservicio[".afterAddAction"] = 1;
$tdataservicio[".closePopupAfterAdd"] = 1;
$tdataservicio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataservicio[".list"] = true;
}



$tdataservicio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataservicio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataservicio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataservicio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataservicio[".printFriendly"] = true;
}



$tdataservicio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataservicio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataservicio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataservicio[".isUseAjaxSuggest"] = true;

$tdataservicio[".rowHighlite"] = true;





$tdataservicio[".ajaxCodeSnippetAdded"] = false;

$tdataservicio[".buttonsAdded"] = false;

$tdataservicio[".addPageEvents"] = false;

// use timepicker for search panel
$tdataservicio[".isUseTimeForSearch"] = false;


$tdataservicio[".badgeColor"] = "edca00";


$tdataservicio[".allSearchFields"] = array();
$tdataservicio[".filterFields"] = array();
$tdataservicio[".requiredSearchFields"] = array();

$tdataservicio[".googleLikeFields"] = array();
$tdataservicio[".googleLikeFields"][] = "IdServicio";
$tdataservicio[".googleLikeFields"][] = "NroContrato";
$tdataservicio[".googleLikeFields"][] = "FechaContrato";
$tdataservicio[".googleLikeFields"][] = "ServicioClase";
$tdataservicio[".googleLikeFields"][] = "IdTipoServicio";
$tdataservicio[".googleLikeFields"][] = "DocTitular";
$tdataservicio[".googleLikeFields"][] = "Titular";
$tdataservicio[".googleLikeFields"][] = "Observacion";
$tdataservicio[".googleLikeFields"][] = "DocFallecido";
$tdataservicio[".googleLikeFields"][] = "Fallecido";
$tdataservicio[".googleLikeFields"][] = "Sexo";
$tdataservicio[".googleLikeFields"][] = "FHFallecimiento";
$tdataservicio[".googleLikeFields"][] = "IdCausa";
$tdataservicio[".googleLikeFields"][] = "Recojo";
$tdataservicio[".googleLikeFields"][] = "Instalacion";
$tdataservicio[".googleLikeFields"][] = "Despacho";



$tdataservicio[".tableType"] = "list";

$tdataservicio[".printerPageOrientation"] = 0;
$tdataservicio[".nPrinterPageScale"] = 100;

$tdataservicio[".nPrinterSplitRecords"] = 40;

$tdataservicio[".geocodingEnabled"] = false;










$tdataservicio[".pageSize"] = 20;

$tdataservicio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataservicio[".strOrderBy"] = $tstrOrderBy;

$tdataservicio[".orderindexes"] = array();


$tdataservicio[".sqlHead"] = "SELECT IdServicio,  	NroContrato,  	FechaContrato,  	ServicioClase,  	IdTipoServicio,  	DocTitular,  	Titular,  	Observacion,  	DocFallecido,  	Fallecido,  	Sexo,  	FHFallecimiento,  	IdCausa,  	Recojo,  	Instalacion,  	Despacho";
$tdataservicio[".sqlFrom"] = "FROM servicio";
$tdataservicio[".sqlWhereExpr"] = "";
$tdataservicio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataservicio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataservicio[".arrGroupsPerPage"] = $arrGPP;

$tdataservicio[".highlightSearchResults"] = true;

$tableKeysservicio = array();
$tableKeysservicio[] = "IdServicio";
$tdataservicio[".Keys"] = $tableKeysservicio;


$tdataservicio[".hideMobileList"] = array();




//	IdServicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdServicio";
	$fdata["GoodName"] = "IdServicio";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","IdServicio");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdataservicio["IdServicio"] = $fdata;
		$tdataservicio[".searchableFields"][] = "IdServicio";
//	NroContrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NroContrato";
	$fdata["GoodName"] = "NroContrato";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","NroContrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NroContrato";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NroContrato";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdataservicio["NroContrato"] = $fdata;
		$tdataservicio[".searchableFields"][] = "NroContrato";
//	FechaContrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FechaContrato";
	$fdata["GoodName"] = "FechaContrato";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","FechaContrato");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FechaContrato";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaContrato";

	
	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdataservicio["FechaContrato"] = $fdata;
		$tdataservicio[".searchableFields"][] = "FechaContrato";
//	ServicioClase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ServicioClase";
	$fdata["GoodName"] = "ServicioClase";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","ServicioClase");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ServicioClase";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ServicioClase";

	
	
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
	$edata["LookupValues"][] = "Protección";
	$edata["LookupValues"][] = "Necesidad";

	
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


	$tdataservicio["ServicioClase"] = $fdata;
		$tdataservicio[".searchableFields"][] = "ServicioClase";
//	IdTipoServicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdTipoServicio";
	$fdata["GoodName"] = "IdTipoServicio";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","IdTipoServicio");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdTipoServicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdTipoServicio";

	
	
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
	$edata["LookupTable"] = "tiposervicio";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdTipoServicio";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Descripcion";

				$edata["LookupWhere"] = "IndEstado = \"A\"";


	
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


	$tdataservicio["IdTipoServicio"] = $fdata;
		$tdataservicio[".searchableFields"][] = "IdTipoServicio";
//	DocTitular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DocTitular";
	$fdata["GoodName"] = "DocTitular";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","DocTitular");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DocTitular";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DocTitular";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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


	$tdataservicio["DocTitular"] = $fdata;
		$tdataservicio[".searchableFields"][] = "DocTitular";
//	Titular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Titular";
	$fdata["GoodName"] = "Titular";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","Titular");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Titular";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Titular";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataservicio["Titular"] = $fdata;
		$tdataservicio[".searchableFields"][] = "Titular";
//	Observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Observacion";
	$fdata["GoodName"] = "Observacion";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","Observacion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Observacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observacion";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataservicio["Observacion"] = $fdata;
		$tdataservicio[".searchableFields"][] = "Observacion";
//	DocFallecido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DocFallecido";
	$fdata["GoodName"] = "DocFallecido";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","DocFallecido");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DocFallecido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DocFallecido";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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


	$tdataservicio["DocFallecido"] = $fdata;
		$tdataservicio[".searchableFields"][] = "DocFallecido";
//	Fallecido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Fallecido";
	$fdata["GoodName"] = "Fallecido";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","Fallecido");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Fallecido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fallecido";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataservicio["Fallecido"] = $fdata;
		$tdataservicio[".searchableFields"][] = "Fallecido";
//	Sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Sexo";
	$fdata["GoodName"] = "Sexo";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","Sexo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Sexo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sexo";

	
	
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
	$edata["LookupValues"][] = "Masculino";
	$edata["LookupValues"][] = "Femenino";

	
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


	$tdataservicio["Sexo"] = $fdata;
		$tdataservicio[".searchableFields"][] = "Sexo";
//	FHFallecimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FHFallecimiento";
	$fdata["GoodName"] = "FHFallecimiento";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","FHFallecimiento");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FHFallecimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FHFallecimiento";

	
	
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


	$tdataservicio["FHFallecimiento"] = $fdata;
		$tdataservicio[".searchableFields"][] = "FHFallecimiento";
//	IdCausa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "IdCausa";
	$fdata["GoodName"] = "IdCausa";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","IdCausa");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdCausa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdCausa";

	
	
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
	$edata["LookupTable"] = "causamuerte";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "IdCausa";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Descripcion";

	

	
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


	$tdataservicio["IdCausa"] = $fdata;
		$tdataservicio[".searchableFields"][] = "IdCausa";
//	Recojo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Recojo";
	$fdata["GoodName"] = "Recojo";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","Recojo");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "Recojo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Recojo";

	
	
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


	$tdataservicio["Recojo"] = $fdata;
		$tdataservicio[".searchableFields"][] = "Recojo";
//	Instalacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Instalacion";
	$fdata["GoodName"] = "Instalacion";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","Instalacion");
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


	$tdataservicio["Instalacion"] = $fdata;
		$tdataservicio[".searchableFields"][] = "Instalacion";
//	Despacho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Despacho";
	$fdata["GoodName"] = "Despacho";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = GetFieldLabel("servicio","Despacho");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "Despacho";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Despacho";

	
	
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


	$tdataservicio["Despacho"] = $fdata;
		$tdataservicio[".searchableFields"][] = "Despacho";


$tables_data["servicio"]=&$tdataservicio;
$field_labels["servicio"] = &$fieldLabelsservicio;
$fieldToolTips["servicio"] = &$fieldToolTipsservicio;
$placeHolders["servicio"] = &$placeHoldersservicio;
$page_titles["servicio"] = &$pageTitlesservicio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["servicio"] = array();
//	detalleservicio
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detalleservicio";
		$detailsParam["dOriginalTable"] = "detalleservicio";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalleservicio";
	$detailsParam["dCaptionTable"] = GetTableCaption("detalleservicio");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["servicio"][$dIndex] = $detailsParam;

	
		$detailsTablesData["servicio"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["servicio"][$dIndex]["masterKeys"][]="IdServicio";

				$detailsTablesData["servicio"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["servicio"][$dIndex]["detailKeys"][]="IdServicio";
//	servicioadicional
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="servicioadicional";
		$detailsParam["dOriginalTable"] = "servicioadicional";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "servicioadicional";
	$detailsParam["dCaptionTable"] = GetTableCaption("servicioadicional");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["servicio"][$dIndex] = $detailsParam;

	
		$detailsTablesData["servicio"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["servicio"][$dIndex]["masterKeys"][]="IdServicio";

				$detailsTablesData["servicio"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["servicio"][$dIndex]["detailKeys"][]="IdServicio";

// tables which are master tables for current table (detail)
$masterTablesData["servicio"] = array();



	
				$strOriginalDetailsTable="tiposervicio";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tiposervicio";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tiposervicio";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["servicio"][0] = $masterParams;
				$masterTablesData["servicio"][0]["masterKeys"] = array();
	$masterTablesData["servicio"][0]["masterKeys"][]="IdTipoServicio";
				$masterTablesData["servicio"][0]["detailKeys"] = array();
	$masterTablesData["servicio"][0]["detailKeys"][]="IdTipoServicio";
		
	
				$strOriginalDetailsTable="causamuerte";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="causamuerte";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "causamuerte";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["servicio"][1] = $masterParams;
				$masterTablesData["servicio"][1]["masterKeys"] = array();
	$masterTablesData["servicio"][1]["masterKeys"][]="IdCausa";
				$masterTablesData["servicio"][1]["detailKeys"] = array();
	$masterTablesData["servicio"][1]["detailKeys"][]="IdCausa";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_servicio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdServicio,  	NroContrato,  	FechaContrato,  	ServicioClase,  	IdTipoServicio,  	DocTitular,  	Titular,  	Observacion,  	DocFallecido,  	Fallecido,  	Sexo,  	FHFallecimiento,  	IdCausa,  	Recojo,  	Instalacion,  	Despacho";
$proto0["m_strFrom"] = "FROM servicio";
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
	"m_strName" => "IdServicio",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto6["m_sql"] = "IdServicio";
$proto6["m_srcTableName"] = "servicio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NroContrato",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto8["m_sql"] = "NroContrato";
$proto8["m_srcTableName"] = "servicio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaContrato",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto10["m_sql"] = "FechaContrato";
$proto10["m_srcTableName"] = "servicio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ServicioClase",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto12["m_sql"] = "ServicioClase";
$proto12["m_srcTableName"] = "servicio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdTipoServicio",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto14["m_sql"] = "IdTipoServicio";
$proto14["m_srcTableName"] = "servicio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DocTitular",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto16["m_sql"] = "DocTitular";
$proto16["m_srcTableName"] = "servicio";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Titular",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto18["m_sql"] = "Titular";
$proto18["m_srcTableName"] = "servicio";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Observacion",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto20["m_sql"] = "Observacion";
$proto20["m_srcTableName"] = "servicio";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DocFallecido",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto22["m_sql"] = "DocFallecido";
$proto22["m_srcTableName"] = "servicio";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Fallecido",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto24["m_sql"] = "Fallecido";
$proto24["m_srcTableName"] = "servicio";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Sexo",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto26["m_sql"] = "Sexo";
$proto26["m_srcTableName"] = "servicio";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FHFallecimiento",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto28["m_sql"] = "FHFallecimiento";
$proto28["m_srcTableName"] = "servicio";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "IdCausa",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto30["m_sql"] = "IdCausa";
$proto30["m_srcTableName"] = "servicio";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Recojo",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto32["m_sql"] = "Recojo";
$proto32["m_srcTableName"] = "servicio";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Instalacion",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto34["m_sql"] = "Instalacion";
$proto34["m_srcTableName"] = "servicio";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Despacho",
	"m_strTable" => "servicio",
	"m_srcTableName" => "servicio"
));

$proto36["m_sql"] = "Despacho";
$proto36["m_srcTableName"] = "servicio";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "servicio";
$proto39["m_srcTableName"] = "servicio";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "IdServicio";
$proto39["m_columns"][] = "NroContrato";
$proto39["m_columns"][] = "FechaContrato";
$proto39["m_columns"][] = "ServicioClase";
$proto39["m_columns"][] = "IdTipoServicio";
$proto39["m_columns"][] = "DocTitular";
$proto39["m_columns"][] = "Titular";
$proto39["m_columns"][] = "Observacion";
$proto39["m_columns"][] = "DocFallecido";
$proto39["m_columns"][] = "Fallecido";
$proto39["m_columns"][] = "Sexo";
$proto39["m_columns"][] = "FHFallecimiento";
$proto39["m_columns"][] = "IdCausa";
$proto39["m_columns"][] = "Recojo";
$proto39["m_columns"][] = "Instalacion";
$proto39["m_columns"][] = "Despacho";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "servicio";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "servicio";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="servicio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_servicio = createSqlQuery_servicio();


	
		;

																

$tdataservicio[".sqlquery"] = $queryData_servicio;



$tableEvents["servicio"] = new eventsBase;
$tdataservicio[".hasEvents"] = false;

?>