<?php
$tdataubigeo = array();
$tdataubigeo[".searchableFields"] = array();
$tdataubigeo[".ShortName"] = "ubigeo";
$tdataubigeo[".OwnerID"] = "";
$tdataubigeo[".OriginalTable"] = "ubigeo";


$tdataubigeo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataubigeo[".originalPagesByType"] = $tdataubigeo[".pagesByType"];
$tdataubigeo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataubigeo[".originalPages"] = $tdataubigeo[".pages"];
$tdataubigeo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataubigeo[".originalDefaultPages"] = $tdataubigeo[".defaultPages"];

//	field labels
$fieldLabelsubigeo = array();
$fieldToolTipsubigeo = array();
$pageTitlesubigeo = array();
$placeHoldersubigeo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsubigeo["Spanish"] = array();
	$fieldToolTipsubigeo["Spanish"] = array();
	$placeHoldersubigeo["Spanish"] = array();
	$pageTitlesubigeo["Spanish"] = array();
	$fieldLabelsubigeo["Spanish"]["IdUbigeo"] = "Id Ubigeo";
	$fieldToolTipsubigeo["Spanish"]["IdUbigeo"] = "";
	$placeHoldersubigeo["Spanish"]["IdUbigeo"] = "";
	$fieldLabelsubigeo["Spanish"]["Ubigeo"] = "Ubigeo";
	$fieldToolTipsubigeo["Spanish"]["Ubigeo"] = "";
	$placeHoldersubigeo["Spanish"]["Ubigeo"] = "";
	$fieldLabelsubigeo["Spanish"]["Departamento"] = "Departamento";
	$fieldToolTipsubigeo["Spanish"]["Departamento"] = "";
	$placeHoldersubigeo["Spanish"]["Departamento"] = "";
	$fieldLabelsubigeo["Spanish"]["Provincia"] = "Provincia";
	$fieldToolTipsubigeo["Spanish"]["Provincia"] = "";
	$placeHoldersubigeo["Spanish"]["Provincia"] = "";
	$fieldLabelsubigeo["Spanish"]["Distrito"] = "Distrito";
	$fieldToolTipsubigeo["Spanish"]["Distrito"] = "";
	$placeHoldersubigeo["Spanish"]["Distrito"] = "";
	$fieldLabelsubigeo["Spanish"]["Altitud"] = "Altitud";
	$fieldToolTipsubigeo["Spanish"]["Altitud"] = "";
	$placeHoldersubigeo["Spanish"]["Altitud"] = "";
	$fieldLabelsubigeo["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipsubigeo["Spanish"]["Latitud"] = "";
	$placeHoldersubigeo["Spanish"]["Latitud"] = "";
	$fieldLabelsubigeo["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipsubigeo["Spanish"]["Longitud"] = "";
	$placeHoldersubigeo["Spanish"]["Longitud"] = "";
	if (count($fieldToolTipsubigeo["Spanish"]))
		$tdataubigeo[".isUseToolTips"] = true;
}


	$tdataubigeo[".NCSearch"] = true;



$tdataubigeo[".shortTableName"] = "ubigeo";
$tdataubigeo[".nSecOptions"] = 0;

$tdataubigeo[".mainTableOwnerID"] = "";
$tdataubigeo[".entityType"] = 0;
$tdataubigeo[".connId"] = "Jardines_at_localhost";


$tdataubigeo[".strOriginalTableName"] = "ubigeo";

	



$tdataubigeo[".showAddInPopup"] = false;

$tdataubigeo[".showEditInPopup"] = false;

$tdataubigeo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataubigeo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataubigeo[".listAjax"] = false;
//	temporary
$tdataubigeo[".listAjax"] = false;

	$tdataubigeo[".audit"] = false;

	$tdataubigeo[".locking"] = false;


$pages = $tdataubigeo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataubigeo[".edit"] = true;
	$tdataubigeo[".afterEditAction"] = 1;
	$tdataubigeo[".closePopupAfterEdit"] = 1;
	$tdataubigeo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataubigeo[".add"] = true;
$tdataubigeo[".afterAddAction"] = 1;
$tdataubigeo[".closePopupAfterAdd"] = 1;
$tdataubigeo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataubigeo[".list"] = true;
}



$tdataubigeo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataubigeo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataubigeo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataubigeo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataubigeo[".printFriendly"] = true;
}



$tdataubigeo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataubigeo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataubigeo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataubigeo[".isUseAjaxSuggest"] = true;

$tdataubigeo[".rowHighlite"] = true;





$tdataubigeo[".ajaxCodeSnippetAdded"] = false;

$tdataubigeo[".buttonsAdded"] = false;

$tdataubigeo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataubigeo[".isUseTimeForSearch"] = false;


$tdataubigeo[".badgeColor"] = "2F4F4F";


$tdataubigeo[".allSearchFields"] = array();
$tdataubigeo[".filterFields"] = array();
$tdataubigeo[".requiredSearchFields"] = array();

$tdataubigeo[".googleLikeFields"] = array();
$tdataubigeo[".googleLikeFields"][] = "IdUbigeo";
$tdataubigeo[".googleLikeFields"][] = "Ubigeo";
$tdataubigeo[".googleLikeFields"][] = "Departamento";
$tdataubigeo[".googleLikeFields"][] = "Provincia";
$tdataubigeo[".googleLikeFields"][] = "Distrito";
$tdataubigeo[".googleLikeFields"][] = "Altitud";
$tdataubigeo[".googleLikeFields"][] = "Latitud";
$tdataubigeo[".googleLikeFields"][] = "Longitud";



$tdataubigeo[".tableType"] = "list";

$tdataubigeo[".printerPageOrientation"] = 0;
$tdataubigeo[".nPrinterPageScale"] = 100;

$tdataubigeo[".nPrinterSplitRecords"] = 40;

$tdataubigeo[".geocodingEnabled"] = false;










$tdataubigeo[".pageSize"] = 20;

$tdataubigeo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataubigeo[".strOrderBy"] = $tstrOrderBy;

$tdataubigeo[".orderindexes"] = array();


$tdataubigeo[".sqlHead"] = "SELECT IdUbigeo,  	Ubigeo,  	Departamento,  	Provincia,  	Distrito,  	Altitud,  	Latitud,  	Longitud";
$tdataubigeo[".sqlFrom"] = "FROM ubigeo";
$tdataubigeo[".sqlWhereExpr"] = "";
$tdataubigeo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataubigeo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataubigeo[".arrGroupsPerPage"] = $arrGPP;

$tdataubigeo[".highlightSearchResults"] = true;

$tableKeysubigeo = array();
$tableKeysubigeo[] = "IdUbigeo";
$tdataubigeo[".Keys"] = $tableKeysubigeo;


$tdataubigeo[".hideMobileList"] = array();




//	IdUbigeo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdUbigeo";
	$fdata["GoodName"] = "IdUbigeo";
	$fdata["ownerTable"] = "ubigeo";
	$fdata["Label"] = GetFieldLabel("ubigeo","IdUbigeo");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdUbigeo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdUbigeo";

	
	
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


	$tdataubigeo["IdUbigeo"] = $fdata;
		$tdataubigeo[".searchableFields"][] = "IdUbigeo";
//	Ubigeo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Ubigeo";
	$fdata["GoodName"] = "Ubigeo";
	$fdata["ownerTable"] = "ubigeo";
	$fdata["Label"] = GetFieldLabel("ubigeo","Ubigeo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Ubigeo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ubigeo";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdataubigeo["Ubigeo"] = $fdata;
		$tdataubigeo[".searchableFields"][] = "Ubigeo";
//	Departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Departamento";
	$fdata["GoodName"] = "Departamento";
	$fdata["ownerTable"] = "ubigeo";
	$fdata["Label"] = GetFieldLabel("ubigeo","Departamento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Departamento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Departamento";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataubigeo["Departamento"] = $fdata;
		$tdataubigeo[".searchableFields"][] = "Departamento";
//	Provincia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Provincia";
	$fdata["GoodName"] = "Provincia";
	$fdata["ownerTable"] = "ubigeo";
	$fdata["Label"] = GetFieldLabel("ubigeo","Provincia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Provincia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Provincia";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataubigeo["Provincia"] = $fdata;
		$tdataubigeo[".searchableFields"][] = "Provincia";
//	Distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Distrito";
	$fdata["GoodName"] = "Distrito";
	$fdata["ownerTable"] = "ubigeo";
	$fdata["Label"] = GetFieldLabel("ubigeo","Distrito");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Distrito";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Distrito";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataubigeo["Distrito"] = $fdata;
		$tdataubigeo[".searchableFields"][] = "Distrito";
//	Altitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Altitud";
	$fdata["GoodName"] = "Altitud";
	$fdata["ownerTable"] = "ubigeo";
	$fdata["Label"] = GetFieldLabel("ubigeo","Altitud");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Altitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Altitud";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataubigeo["Altitud"] = $fdata;
		$tdataubigeo[".searchableFields"][] = "Altitud";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ubigeo";
	$fdata["Label"] = GetFieldLabel("ubigeo","Latitud");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Latitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Latitud";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataubigeo["Latitud"] = $fdata;
		$tdataubigeo[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ubigeo";
	$fdata["Label"] = GetFieldLabel("ubigeo","Longitud");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Longitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Longitud";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataubigeo["Longitud"] = $fdata;
		$tdataubigeo[".searchableFields"][] = "Longitud";


$tables_data["ubigeo"]=&$tdataubigeo;
$field_labels["ubigeo"] = &$fieldLabelsubigeo;
$fieldToolTips["ubigeo"] = &$fieldToolTipsubigeo;
$placeHolders["ubigeo"] = &$placeHoldersubigeo;
$page_titles["ubigeo"] = &$pageTitlesubigeo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ubigeo"] = array();
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


		
	$detailsTablesData["ubigeo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ubigeo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ubigeo"][$dIndex]["masterKeys"][]="IdUbigeo";

				$detailsTablesData["ubigeo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ubigeo"][$dIndex]["detailKeys"][]="IdUbigeoRecojo";
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


		
	$detailsTablesData["ubigeo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ubigeo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ubigeo"][$dIndex]["masterKeys"][]="IdUbigeo";

				$detailsTablesData["ubigeo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ubigeo"][$dIndex]["detailKeys"][]="IdUbigeoInstalacion";
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


		
	$detailsTablesData["ubigeo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ubigeo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ubigeo"][$dIndex]["masterKeys"][]="IdUbigeo";

				$detailsTablesData["ubigeo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ubigeo"][$dIndex]["detailKeys"][]="IdUbigueoDespacho";

// tables which are master tables for current table (detail)
$masterTablesData["ubigeo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ubigeo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdUbigeo,  	Ubigeo,  	Departamento,  	Provincia,  	Distrito,  	Altitud,  	Latitud,  	Longitud";
$proto0["m_strFrom"] = "FROM ubigeo";
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
	"m_strName" => "IdUbigeo",
	"m_strTable" => "ubigeo",
	"m_srcTableName" => "ubigeo"
));

$proto6["m_sql"] = "IdUbigeo";
$proto6["m_srcTableName"] = "ubigeo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Ubigeo",
	"m_strTable" => "ubigeo",
	"m_srcTableName" => "ubigeo"
));

$proto8["m_sql"] = "Ubigeo";
$proto8["m_srcTableName"] = "ubigeo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Departamento",
	"m_strTable" => "ubigeo",
	"m_srcTableName" => "ubigeo"
));

$proto10["m_sql"] = "Departamento";
$proto10["m_srcTableName"] = "ubigeo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Provincia",
	"m_strTable" => "ubigeo",
	"m_srcTableName" => "ubigeo"
));

$proto12["m_sql"] = "Provincia";
$proto12["m_srcTableName"] = "ubigeo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Distrito",
	"m_strTable" => "ubigeo",
	"m_srcTableName" => "ubigeo"
));

$proto14["m_sql"] = "Distrito";
$proto14["m_srcTableName"] = "ubigeo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Altitud",
	"m_strTable" => "ubigeo",
	"m_srcTableName" => "ubigeo"
));

$proto16["m_sql"] = "Altitud";
$proto16["m_srcTableName"] = "ubigeo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "ubigeo",
	"m_srcTableName" => "ubigeo"
));

$proto18["m_sql"] = "Latitud";
$proto18["m_srcTableName"] = "ubigeo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "ubigeo",
	"m_srcTableName" => "ubigeo"
));

$proto20["m_sql"] = "Longitud";
$proto20["m_srcTableName"] = "ubigeo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "ubigeo";
$proto23["m_srcTableName"] = "ubigeo";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "IdUbigeo";
$proto23["m_columns"][] = "Ubigeo";
$proto23["m_columns"][] = "Departamento";
$proto23["m_columns"][] = "Provincia";
$proto23["m_columns"][] = "Distrito";
$proto23["m_columns"][] = "Altitud";
$proto23["m_columns"][] = "Latitud";
$proto23["m_columns"][] = "Longitud";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "ubigeo";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "ubigeo";
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
$proto0["m_srcTableName"]="ubigeo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ubigeo = createSqlQuery_ubigeo();


	
		;

								

$tdataubigeo[".sqlquery"] = $queryData_ubigeo;



$tableEvents["ubigeo"] = new eventsBase;
$tdataubigeo[".hasEvents"] = false;

?>