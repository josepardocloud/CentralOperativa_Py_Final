<?php
$tdatavehiculos = array();
$tdatavehiculos[".searchableFields"] = array();
$tdatavehiculos[".ShortName"] = "vehiculos";
$tdatavehiculos[".OwnerID"] = "";
$tdatavehiculos[".OriginalTable"] = "vehiculos";


$tdatavehiculos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavehiculos[".originalPagesByType"] = $tdatavehiculos[".pagesByType"];
$tdatavehiculos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavehiculos[".originalPages"] = $tdatavehiculos[".pages"];
$tdatavehiculos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavehiculos[".originalDefaultPages"] = $tdatavehiculos[".defaultPages"];

//	field labels
$fieldLabelsvehiculos = array();
$fieldToolTipsvehiculos = array();
$pageTitlesvehiculos = array();
$placeHoldersvehiculos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvehiculos["Spanish"] = array();
	$fieldToolTipsvehiculos["Spanish"] = array();
	$placeHoldersvehiculos["Spanish"] = array();
	$pageTitlesvehiculos["Spanish"] = array();
	$fieldLabelsvehiculos["Spanish"]["IdVehiculo"] = "Id Vehiculo";
	$fieldToolTipsvehiculos["Spanish"]["IdVehiculo"] = "";
	$placeHoldersvehiculos["Spanish"]["IdVehiculo"] = "";
	$fieldLabelsvehiculos["Spanish"]["Marca"] = "Marca";
	$fieldToolTipsvehiculos["Spanish"]["Marca"] = "";
	$placeHoldersvehiculos["Spanish"]["Marca"] = "";
	$fieldLabelsvehiculos["Spanish"]["Modelo"] = "Modelo";
	$fieldToolTipsvehiculos["Spanish"]["Modelo"] = "";
	$placeHoldersvehiculos["Spanish"]["Modelo"] = "";
	$fieldLabelsvehiculos["Spanish"]["Color"] = "Color";
	$fieldToolTipsvehiculos["Spanish"]["Color"] = "";
	$placeHoldersvehiculos["Spanish"]["Color"] = "";
	$fieldLabelsvehiculos["Spanish"]["Placa"] = "Placa";
	$fieldToolTipsvehiculos["Spanish"]["Placa"] = "";
	$placeHoldersvehiculos["Spanish"]["Placa"] = "";
	$fieldLabelsvehiculos["Spanish"]["IndEstado"] = "Estado";
	$fieldToolTipsvehiculos["Spanish"]["IndEstado"] = "";
	$placeHoldersvehiculos["Spanish"]["IndEstado"] = "";
	$fieldLabelsvehiculos["Spanish"]["CategoriaVehiculo"] = "Categoria Vehiculo";
	$fieldToolTipsvehiculos["Spanish"]["CategoriaVehiculo"] = "";
	$placeHoldersvehiculos["Spanish"]["CategoriaVehiculo"] = "";
	if (count($fieldToolTipsvehiculos["Spanish"]))
		$tdatavehiculos[".isUseToolTips"] = true;
}


	$tdatavehiculos[".NCSearch"] = true;



$tdatavehiculos[".shortTableName"] = "vehiculos";
$tdatavehiculos[".nSecOptions"] = 0;

$tdatavehiculos[".mainTableOwnerID"] = "";
$tdatavehiculos[".entityType"] = 0;
$tdatavehiculos[".connId"] = "Jardines_at_localhost";


$tdatavehiculos[".strOriginalTableName"] = "vehiculos";

	



$tdatavehiculos[".showAddInPopup"] = false;

$tdatavehiculos[".showEditInPopup"] = false;

$tdatavehiculos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehiculos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehiculos[".listAjax"] = false;
//	temporary
$tdatavehiculos[".listAjax"] = false;

	$tdatavehiculos[".audit"] = false;

	$tdatavehiculos[".locking"] = false;


$pages = $tdatavehiculos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavehiculos[".edit"] = true;
	$tdatavehiculos[".afterEditAction"] = 1;
	$tdatavehiculos[".closePopupAfterEdit"] = 1;
	$tdatavehiculos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavehiculos[".add"] = true;
$tdatavehiculos[".afterAddAction"] = 1;
$tdatavehiculos[".closePopupAfterAdd"] = 1;
$tdatavehiculos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavehiculos[".list"] = true;
}



$tdatavehiculos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavehiculos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavehiculos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavehiculos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavehiculos[".printFriendly"] = true;
}



$tdatavehiculos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavehiculos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavehiculos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavehiculos[".isUseAjaxSuggest"] = true;

$tdatavehiculos[".rowHighlite"] = true;





$tdatavehiculos[".ajaxCodeSnippetAdded"] = false;

$tdatavehiculos[".buttonsAdded"] = false;

$tdatavehiculos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehiculos[".isUseTimeForSearch"] = false;


$tdatavehiculos[".badgeColor"] = "778899";


$tdatavehiculos[".allSearchFields"] = array();
$tdatavehiculos[".filterFields"] = array();
$tdatavehiculos[".requiredSearchFields"] = array();

$tdatavehiculos[".googleLikeFields"] = array();
$tdatavehiculos[".googleLikeFields"][] = "IdVehiculo";
$tdatavehiculos[".googleLikeFields"][] = "Marca";
$tdatavehiculos[".googleLikeFields"][] = "Modelo";
$tdatavehiculos[".googleLikeFields"][] = "Color";
$tdatavehiculos[".googleLikeFields"][] = "Placa";
$tdatavehiculos[".googleLikeFields"][] = "CategoriaVehiculo";
$tdatavehiculos[".googleLikeFields"][] = "IndEstado";



$tdatavehiculos[".tableType"] = "list";

$tdatavehiculos[".printerPageOrientation"] = 0;
$tdatavehiculos[".nPrinterPageScale"] = 100;

$tdatavehiculos[".nPrinterSplitRecords"] = 40;

$tdatavehiculos[".geocodingEnabled"] = false;










$tdatavehiculos[".pageSize"] = 20;

$tdatavehiculos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehiculos[".strOrderBy"] = $tstrOrderBy;

$tdatavehiculos[".orderindexes"] = array();


$tdatavehiculos[".sqlHead"] = "SELECT IdVehiculo,  	Marca,  	Modelo,  	Color,  	Placa,  	CategoriaVehiculo,  	IndEstado";
$tdatavehiculos[".sqlFrom"] = "FROM vehiculos";
$tdatavehiculos[".sqlWhereExpr"] = "";
$tdatavehiculos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavehiculos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehiculos[".arrGroupsPerPage"] = $arrGPP;

$tdatavehiculos[".highlightSearchResults"] = true;

$tableKeysvehiculos = array();
$tableKeysvehiculos[] = "IdVehiculo";
$tdatavehiculos[".Keys"] = $tableKeysvehiculos;


$tdatavehiculos[".hideMobileList"] = array();




//	IdVehiculo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdVehiculo";
	$fdata["GoodName"] = "IdVehiculo";
	$fdata["ownerTable"] = "vehiculos";
	$fdata["Label"] = GetFieldLabel("vehiculos","IdVehiculo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdVehiculo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdVehiculo";

	
	
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


	$tdatavehiculos["IdVehiculo"] = $fdata;
		$tdatavehiculos[".searchableFields"][] = "IdVehiculo";
//	Marca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Marca";
	$fdata["GoodName"] = "Marca";
	$fdata["ownerTable"] = "vehiculos";
	$fdata["Label"] = GetFieldLabel("vehiculos","Marca");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Marca";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Marca";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatavehiculos["Marca"] = $fdata;
		$tdatavehiculos[".searchableFields"][] = "Marca";
//	Modelo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Modelo";
	$fdata["GoodName"] = "Modelo";
	$fdata["ownerTable"] = "vehiculos";
	$fdata["Label"] = GetFieldLabel("vehiculos","Modelo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Modelo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Modelo";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatavehiculos["Modelo"] = $fdata;
		$tdatavehiculos[".searchableFields"][] = "Modelo";
//	Color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Color";
	$fdata["GoodName"] = "Color";
	$fdata["ownerTable"] = "vehiculos";
	$fdata["Label"] = GetFieldLabel("vehiculos","Color");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Color";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatavehiculos["Color"] = $fdata;
		$tdatavehiculos[".searchableFields"][] = "Color";
//	Placa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Placa";
	$fdata["GoodName"] = "Placa";
	$fdata["ownerTable"] = "vehiculos";
	$fdata["Label"] = GetFieldLabel("vehiculos","Placa");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Placa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Placa";

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% ya existe!", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatavehiculos["Placa"] = $fdata;
		$tdatavehiculos[".searchableFields"][] = "Placa";
//	CategoriaVehiculo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CategoriaVehiculo";
	$fdata["GoodName"] = "CategoriaVehiculo";
	$fdata["ownerTable"] = "vehiculos";
	$fdata["Label"] = GetFieldLabel("vehiculos","CategoriaVehiculo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CategoriaVehiculo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CategoriaVehiculo";

	
	
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
	$edata["LookupValues"][] = "";
	$edata["LookupValues"][] = "CarrozaFunebre";
	$edata["LookupValues"][] = "Miniban traslado/Rejoco";
	$edata["LookupValues"][] = "Miniban personas";

	
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


	$tdatavehiculos["CategoriaVehiculo"] = $fdata;
		$tdatavehiculos[".searchableFields"][] = "CategoriaVehiculo";
//	IndEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "IndEstado";
	$fdata["GoodName"] = "IndEstado";
	$fdata["ownerTable"] = "vehiculos";
	$fdata["Label"] = GetFieldLabel("vehiculos","IndEstado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "IndEstado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndEstado";

	
	
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
	$edata["LookupValues"][] = "A";
	$edata["LookupValues"][] = "I";

	
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


	$tdatavehiculos["IndEstado"] = $fdata;
		$tdatavehiculos[".searchableFields"][] = "IndEstado";


$tables_data["vehiculos"]=&$tdatavehiculos;
$field_labels["vehiculos"] = &$fieldLabelsvehiculos;
$fieldToolTips["vehiculos"] = &$fieldToolTipsvehiculos;
$placeHolders["vehiculos"] = &$placeHoldersvehiculos;
$page_titles["vehiculos"] = &$pageTitlesvehiculos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehiculos"] = array();
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


		
	$detailsTablesData["vehiculos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vehiculos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vehiculos"][$dIndex]["masterKeys"][]="IdVehiculo";

				$detailsTablesData["vehiculos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vehiculos"][$dIndex]["detailKeys"][]="IdVehiculoRecojo";
//	Instalacion
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Instalacion";
		$detailsParam["dOriginalTable"] = "detalleservicio";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "instalacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("Instalacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["vehiculos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vehiculos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vehiculos"][$dIndex]["masterKeys"][]="IdVehiculo";

				$detailsTablesData["vehiculos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vehiculos"][$dIndex]["detailKeys"][]="IdVehiculoInstalacion";
//	Despacho
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Despacho";
		$detailsParam["dOriginalTable"] = "detalleservicio";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "despacho";
	$detailsParam["dCaptionTable"] = GetTableCaption("Despacho");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["vehiculos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vehiculos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vehiculos"][$dIndex]["masterKeys"][]="IdVehiculo";

				$detailsTablesData["vehiculos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vehiculos"][$dIndex]["detailKeys"][]="IdVehiculoDespacho";

// tables which are master tables for current table (detail)
$masterTablesData["vehiculos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vehiculos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdVehiculo,  	Marca,  	Modelo,  	Color,  	Placa,  	CategoriaVehiculo,  	IndEstado";
$proto0["m_strFrom"] = "FROM vehiculos";
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
	"m_strName" => "IdVehiculo",
	"m_strTable" => "vehiculos",
	"m_srcTableName" => "vehiculos"
));

$proto6["m_sql"] = "IdVehiculo";
$proto6["m_srcTableName"] = "vehiculos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Marca",
	"m_strTable" => "vehiculos",
	"m_srcTableName" => "vehiculos"
));

$proto8["m_sql"] = "Marca";
$proto8["m_srcTableName"] = "vehiculos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Modelo",
	"m_strTable" => "vehiculos",
	"m_srcTableName" => "vehiculos"
));

$proto10["m_sql"] = "Modelo";
$proto10["m_srcTableName"] = "vehiculos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Color",
	"m_strTable" => "vehiculos",
	"m_srcTableName" => "vehiculos"
));

$proto12["m_sql"] = "Color";
$proto12["m_srcTableName"] = "vehiculos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Placa",
	"m_strTable" => "vehiculos",
	"m_srcTableName" => "vehiculos"
));

$proto14["m_sql"] = "Placa";
$proto14["m_srcTableName"] = "vehiculos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CategoriaVehiculo",
	"m_strTable" => "vehiculos",
	"m_srcTableName" => "vehiculos"
));

$proto16["m_sql"] = "CategoriaVehiculo";
$proto16["m_srcTableName"] = "vehiculos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "IndEstado",
	"m_strTable" => "vehiculos",
	"m_srcTableName" => "vehiculos"
));

$proto18["m_sql"] = "IndEstado";
$proto18["m_srcTableName"] = "vehiculos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "vehiculos";
$proto21["m_srcTableName"] = "vehiculos";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "IdVehiculo";
$proto21["m_columns"][] = "Marca";
$proto21["m_columns"][] = "Modelo";
$proto21["m_columns"][] = "Color";
$proto21["m_columns"][] = "Placa";
$proto21["m_columns"][] = "CategoriaVehiculo";
$proto21["m_columns"][] = "IndEstado";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "vehiculos";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "vehiculos";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vehiculos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehiculos = createSqlQuery_vehiculos();


	
		;

							

$tdatavehiculos[".sqlquery"] = $queryData_vehiculos;



$tableEvents["vehiculos"] = new eventsBase;
$tdatavehiculos[".hasEvents"] = false;

?>